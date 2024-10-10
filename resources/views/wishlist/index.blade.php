@extends('layouts.app')

@section('content')
    <h1>Wishlist</h1>
    <ul>
        @foreach ($wishlistItems as $item)
            <li>{{ $item->picture->title }} - ${{ $item->picture->price }}</li>
        @endforeach
    </ul>
@endsection