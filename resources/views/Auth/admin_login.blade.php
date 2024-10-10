@extends('layouts.auth')

@section('content')
<div class="login-container">
    <div class="login-box">
        <h2>ARTFUSION - Admin Login</h2>
        <form method="POST" action="{{ url('/admin-login') }}">
            @csrf
            <div class="form-group">
                <label for="admin_id">Admin ID</label>
                <input type="text" name="admin_id" id="admin_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>
@endsection
