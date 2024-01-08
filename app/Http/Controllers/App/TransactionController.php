<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Boarding;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class TransactionController extends Controller
{
    public function booking($id)
    {
        $room = Boarding::find($id);
        $user = Auth::user();
        return view('app.front.booking', compact(['room', 'user']));
    }

    public function payment(Request $request)
    {
        $data = $request->only([
            'id',
            'price',
            'check_in',
            'check_out',
        ]);

        $data['check_in'] = Carbon::createFromFormat('m/d/Y', $data['check_in']);
        $data['check_out'] = Carbon::createFromFormat('m/d/Y', $data['check_out']);
        $data['date_entry'] = $data['check_in']->format('Y-m-d');;
        $data['date_out'] = $data['check_out']->format('Y-m-d');;
        // dd($data);
        $user = Auth::user();
        $user_name = $user->name;
        $user_email = $user->email;
        $room = Boarding::where('id', $data['id'])->first();
        // $code = Uuid::uuid4()->toString();
        $transaction = Transaction::create([
            'user_id' => $user->id,
            'boarding_id' => $room->id,
            'date_entry' => $data['date_entry'],
            'date_out' => $data['date_out'],
        ]);

        // dd($data);
        $snapResult = $this->_createSnap($transaction, $data, $user_name, $user_email, $room);
        return redirect()->to($snapResult->redirect_url);
    }

    private function _createSnap($transaction, $data, $user_name, $user_email, $room)
    {
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = config('midtrans.environment') == 'production' ? true : false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $params = [
            'transaction_details' => [
                'order_id' => $transaction->id,
                'gross_amount' => $data['price'],
            ],
            'customer_details' => [
                'first_name' => $user_name,
                'email' => $user_email,
            ],
            'item_details' => [
                [
                    'id' => $data['id'],
                    'price' => $data['price'],
                    'quantity' => 1,
                    'name' => $room->name
                ]
            ],
            'callbacks' => [
                'finish' => route('finish')
            ]
        ];

        $snapResult = \Midtrans\Snap::createTransaction($params);
        // dd($snapResult);
        return $snapResult;
    }

    public function finish()
    {
        $order_id = request()->query('order_id');
        $status = request()->query('transaction_status');
        $status_code = request()->query('status_code');

        $result = '';
        if ($status == 'pending' && $status_code == '201') {
            $result = 'unfinish';
        } else if ($status == 'settlement' && $status_code == '200') {
            $result = 'finish';
        } else if (empty($order_id)) {
            $result = 'unfinish';
        } else {
            $result = 'failed';
        }

        $tran = Transaction::where('id', $order_id)->first();
        $tran->update([]);
        $room = Boarding::where('id', $tran->boarding_id)->first();


        return view("app.front.finish", compact('result', 'order_id'));
    }
}
