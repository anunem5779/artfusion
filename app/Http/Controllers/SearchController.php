<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Picture;  // Assuming you have a Picture model

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = Picture::where('title', 'LIKE', "%$query%")->get();
        
        return view('search.results', compact('results'));
    }
}
