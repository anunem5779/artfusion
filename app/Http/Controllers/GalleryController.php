<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $pictures = Picture::all();
        return view('gallery.index', compact('pictures'));
    }
}
