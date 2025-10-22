@extends('layouts.app')

@section('content')
    <h2>Dashboard</h2>
    <p>Hey there, book lovers! Welcome to my book review corner, <strong>{{ $username ?? 'your name' }}</strong>!</p>
    <p>What would you like to do today?</p>

    <div class="dashboard-ctas">
        <a href="{{route('pengelolaan', ['username' => $username ?? 'your name'])}}" class="cta-button">
            <h3>Browse All Reviews</h3>
            <p>See what others are saying about the latest books.</p>
        </a>
        <a href="{{route('profile', ['username' => $username ?? 'your name'])}}" class="cta-button cta-secondary">
            <h3>View Your Profile</h3>
            <p>Check your bio and favorite book.</p>
        </a>
    </div>
@endsection
