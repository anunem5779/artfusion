<?php

namespace App\Http\Controllers;

use App\Models\Pictures;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function index()
    {
        return view('offers.index');
    }
}
