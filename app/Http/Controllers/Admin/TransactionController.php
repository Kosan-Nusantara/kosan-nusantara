<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\TransactionDataTable;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        // return $dataTable->render('app.admin.transaction.index');
        return view('app.admin.transaction.index');
    }

    public function datatable()
    {
        $user = Auth()->user();
        $data = Transaction::with(['user', 'boarding'])
            ->when($user->type == 'member', function($data) use($user) {
                return $data->where('user_id', $user->id);
            })
            ->get(); // Gantilah dengan model dan query yang sesuai

        return response()->json(['data' => $data]);
    }
}