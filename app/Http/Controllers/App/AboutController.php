<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Boarding;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $boardings = Boarding::with(['facility'])
            ->orderBy('price', 'asc')
            ->get();
        return view('app.front.about', compact(['boardings']));
    }
}
