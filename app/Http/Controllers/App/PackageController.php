<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Boarding;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $boardings = Boarding::with(['facility'])
            ->orderBy('price', 'asc')
            ->get();
        return view('app.front.package', compact(['boardings']));
    }
    public function detail($id)
    {
        $boarding = Boarding::with(['facility'])
            ->where('id', $id)
            ->first();
        return view('app.front.package-detail', compact(['boarding']));
    }
}
