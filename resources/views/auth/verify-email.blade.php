@extends('layouts.app')

@section('title', 'Verify Your Email')

@section('content')
    <div class="container">
        <h1>Email Verification Required</h1>
        <p>Please check your email for a verification link.</p>
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Resend Verification Email</button>
        </form>
        <a href="{{ route('logout') }}" class="btn btn-secondary" 
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
@endsection
