<?php

namespace App\Http\Controllers;

use App\Models\Pictures;
use Illuminate\Http\Request;

class FPicturesController extends Controller
{
    public static function show()
    {
        // Features the latest 3 pictures
        $pictures = Pictures::latest()->take(3)->get();

        // Pass the pictures to the view
        return view('welcome', compact('pictures'));
    }
}
