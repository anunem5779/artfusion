@extends('layouts.app')

@section('content')
    <center><h3>Auctions</h3></center>
    <div class="row">
        @foreach ($auctions as $auction)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $auction->title }}</h5>
                        <p class="card-text">Current Bid: ${{ $auction->current_bid }}</p>
                        <p class="card-text">End Time: {{ $auction->end_time }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection