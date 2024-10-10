@extends('layouts.auth')

@section('content')
<div class="login-container">
    <div class="login-box">
        <h3><b>ARTFUSION</b></h3>
        <form method="POST" action="{{ url('/login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Username</label>
                <input type="text" name="email" id="email" class="form-control1" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control1" required>
            </div>
            <button type="submit" class="btn1 btn-primary1">Login</button>
            <a href="{{ route('register') }}" class="btn2 btn-link1">Register Now</a>
        </form>
    </div>
</div>
@endsection
