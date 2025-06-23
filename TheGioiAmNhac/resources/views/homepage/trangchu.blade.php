@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/homepage/trangchu.css') }}">
@endpush

@section('content')
<header>
    <div class="logo">
        <h1>WORLDFI</h1>
    </div>
    <nav>
        <a href="{{ route('vechungtoi') }}">Về chúng tôi</a>
        <a href="{{ route('khampha') }}">Khám phá</a>
        @auth
            <span>Xin chào, {{ Auth::user()->name }}</span>
            <a href="#" id="logout-link">
                Đăng xuất
            </a>
            <form id="logout-form" action="{{ route('signout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <a href="{{ route('dangky') }}">Đăng ký</a>
            <a href="{{ route('dangnhap') }}">Đăng nhập</a>
        @endauth
    </nav>
</header>

<div class="main-container">
    <main>
        <section>
            <h2>Bài hát thịnh hành</h2>
            <div class="carousel-wrapper">
                <button class="nav-button prev">&#10094;</button>
                <div class="card-container">
                    @foreach($songs as $song)
                    <div class="card">
                        <img src="{{ asset($song->image_path) }}" alt="{{$song->name}}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $song->name }}</h5>
                            <p class="card-text">{{ $song->artist->name }}</p>
                        </div>
                        <div class="play-button">
                            <svg role="img" height="24" width="24" aria-hidden="true" viewBox="0 0 24 24"><path d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.782V4.218a.7.7 0 0 1 1.05-.612z"></path></svg>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="nav-button next">&#10095;</button>
            </div>
        </section>

        <section>
            <h2>Nghệ sĩ phổ biến</h2>
            <div class="carousel-wrapper">
                <button class="nav-button prev">&#10094;</button>
                <div class="card-container artist-container">
                    @foreach($artists as $artist)
                    <div class="card">
                        <img src="{{ asset($artist->image_path) }}" alt="{{$artist->name}}" class="artist-img">
                        <div class="card-body">
                            <h5 class="card-title">{{ $artist->name }}</h5>
                            <p class="card-text">Nghệ sĩ</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="nav-button next">&#10095;</button>
            </div>
        </section>

        <section>
            <h2>Album và đĩa đơn nổi tiếng</h2>
            <div class="carousel-wrapper">
                <button class="nav-button prev">&#10094;</button>
                <div class="card-container">
                    @foreach($albums as $album)
                    <div class="card">
                        <img src="{{ asset($album->image_path) }}" alt="{{$album->name}}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $album->name }}</h5>
                            <p class="card-text">{{ $album->artist->name }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="nav-button next">&#10095;</button>
            </div>
        </section>

        <section>
            <h2>Radio phổ biến</h2>
            <div class="carousel-wrapper">
                <button class="nav-button prev">&#10094;</button>
                <div class="card-container">
                    @foreach($radios as $radio)
                    <div class="card">
                        <img src="{{ asset($radio->image_path) }}" alt="{{$radio->name}}" class="artist-img">
                        <div class="card-body">
                            <h5 class="card-title">{{ $radio->name }}</h5>
                            <p class="card-text">{{ $radio->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="nav-button next">&#10095;</button>
            </div>
        </section>

        <section>
            <h2>Bảng xếp hạng Nổi bật</h2>
            <div class="carousel-wrapper">
                <button class="nav-button prev">&#10094;</button>
                <div class="card-container">
                    @foreach($charts as $chart)
                    <div class="card" style="background-color: {{ $chart->background_color }};">
                         @if($chart->image_path)
                            <img src="{{ asset($chart->image_path) }}" alt="Chart Image">
                         @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $chart->name }}</h5>
                            <p class="card-text">{{ $chart->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="nav-button next">&#10095;</button>
            </div>
        </section>

        <section>
            <h2>Nâng đỡ bên thềm, nhạc đổ vào tim</h2>
            <div class="carousel-wrapper">
                <button class="nav-button prev">&#10094;</button>
                <div class="card-container">
                    @foreach($suggestions as $suggestion)
                    <div class="card">
                        <img src="{{ asset($suggestion->image_path) }}" alt="{{$suggestion->name}}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $suggestion->name }}</h5>
                            <p class="card-text">{{ $suggestion->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="nav-button next">&#10095;</button>
            </div>
        </section>
    </main>
</div>

<div id="logout-modal" class="modal-overlay" style="display: none;">
    <div class="modal-content">
        <h2>Xác nhận đăng xuất</h2>
        <p>Bạn có chắc chắn muốn đăng xuất không?</p>
        <div class="modal-actions">
            <button id="confirm-logout-btn" class="btn btn-danger">Đăng xuất</button>
            <button id="cancel-logout-btn" class="btn btn-secondary">Ở lại</button>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/homepage/trangchu.js') }}"></script>
@endpush
