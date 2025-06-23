@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/artist/show.css') }}">
@endpush

@section('content')
<div class="artist-header" style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.9)), url('{{ asset($artist->image_path) }}');">
    <img src="{{ asset($artist->image_path) }}" alt="{{ $artist->name }}" class="artist-image">
    <div class="artist-info">
        <h1>{{ $artist->name }}</h1>
        <p class="artist-description">{{ $artist->description }}</p>
    </div>
</div>

<div class="artist-songs">
    <h2>Bài hát</h2>
    <ul>
        @foreach($artist->songs as $song)
            <li>
                <img src="{{ asset($song->image_path) }}" alt="{{ $song->name }}" class="song-image">
                <span class="song-name">{{ $song->name }}</span>
            </li>
        @endforeach
    </ul>
</div>
@endsection