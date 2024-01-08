<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Boarding;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HandleTransactionNotifController extends Controller
{
    public function __invoke(Request $request)
    {
        $payload = $request->all();

        Log::info('incoming-midtrans', [
            'payload' => $payload
        ]);

        $orderId = $payload['order_id'];
        $statusCode = $payload['status_code'];
        $grossAmount = $payload['gross_amount'];

        $reqSignature = $payload['signature_key'];

        $signature = hash('sha512', $orderId . $statusCode . $grossAmount . config('midtrans.server_key'));

        if ($signature != $reqSignature) {
            return response()->json([
                'message' => 'Invalid signature'
            ], 401);
        }

        $transactionStatus = $payload['transaction_status'];

        $paymentType = $payload['payment_type']; // payment channel
        // $paymentChannel = MasterPaymentChannel::where('payment_type', $paymentType)->first();


        $tran = Transaction::where('id', $orderId)->first();

        if (!$tran) {
            return response()->json([
                'message' => 'Invalid transaction'
            ], 400);
        }

        $room = Boarding::where('id', $tran->boarding_id)->first();


        if ($transactionStatus == 'settlement') {
            $transactionTime = $payload['settlement_time'];
            $carbonDate = Carbon::parse($transactionTime);
            $formattedDate = $carbonDate->format('Y-m-d');

            $tran->update([
                'status' => 'success'
            ]);
        } else if ($transactionStatus == 'expire') {
            $tran->update([
                'status' => 'expire'
            ]);
        } else if ($transactionStatus == 'failure') {
            $tran->update([
                'status' => 'failure'
            ]);
        } else if ($transactionStatus == 'cancel') {
            $tran->update([
                'status' => 'cancel'
            ]);
        }


        return response()->json(['message' => 'success'], 200);
    }
}
