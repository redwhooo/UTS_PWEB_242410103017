@extends('layouts.app')

@section('content')
    <div class="profile-card">

        <div class="profile-image-container">
            <img src="{{asset($profile['image'])}}" alt="Foto Profil" class="profile-pic">
        </div>

        <div class="profile-info-container">
            <h2 class="profile-name">{{$profile['name'] ?? 'your name'}}</h2>
            <p class="profile-bio">{{ $profile['bio'] }}</p>

            <div class="profile-fav-book">
                <strong>My Top Pick:</strong>
                <span>{{ $profile['favBook'] }}</span>
            </div>
        </div>

    </div>
@endsection
