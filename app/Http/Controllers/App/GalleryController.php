<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::get();
        return view('app.front.gallery', compact(['galleries']));
    }
}
