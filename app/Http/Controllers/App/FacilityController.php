<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\BoardingFacility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = BoardingFacility::select('name', 'photo')
            ->distinct()
            ->get();

        return view('app.front.facility', compact(['facilities']));
    }
}