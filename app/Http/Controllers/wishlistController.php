<?php

namespace App\Http\Controllers;

use App\Models\WishlistItem;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlistItems = WishlistItem::/*where('user_id', Auth::id())->*/with('picture')->get();
        return view('wishlist.index', compact('wishlistItems'));
    }
}
