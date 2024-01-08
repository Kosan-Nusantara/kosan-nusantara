<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('app.admin.users.index');
    }

    public function datatable()
    {
        $user = Auth()->user();
        $data = User::all(); // Gantilah dengan model dan query yang sesuai

        return response()->json(['data' => $data]);
    }
}