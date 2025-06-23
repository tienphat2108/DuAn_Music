<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thế Giới Âm Nhạc - Khám phá</title>
    <link rel="stylesheet" href="{{ asset('css/guest/style.css') }}">
    <!-- Optionally link to a font like Circular Std if you have it -->
    <!-- <link rel="stylesheet" href="https://example.com/path/to/circular-std.css"> -->
</head>
<body>
    <header>
        <div class="logo">
            <h1>WorldFi</h1>
        </div>
        <nav>
            <a href="{{ route('vechungtoi') }}">Về chúng tôi</a>
            <a href="{{ route('khampha') }}">Khám phá</a>
            <a href="/dangky">Đăng ký</a>
            <a href="/dangnhap">Đăng nhập</a>
        </nav>
    </header>

    <main>
        <section class="songs-section">
            <h2>Bài hát thịnh hành</h2>
            <div class="carousel-wrapper">
                <!-- Navigation Buttons -->
                <button class="nav-button prev">
                    <svg role="img" height="24" width="24" aria-hidden="true" viewBox="0 0 24 24" data-icon="chevron-left" class="Svg-sc-ytk21e-0 kPpFfn">
                        <path fill="#ffffff" d="m15.969 2.029a1.5 1.5 0 0 1 .472 1.94l-5.696 9.87 5.696 9.87a1.5 1.5 0 0 1-2.41 1.39l-6.5-11.25a1.5 1.5 0 0 1 0-1.39l6.5-11.25a1.5 1.5 0 0 1 1.938-.47z"></path>
                    </svg>
                </button>
                <button class="nav-button next">
                    <svg role="img" height="24" width="24" aria-hidden="true" viewBox="0 0 24 24" data-icon="chevron-right" class="Svg-sc-ytk21e-0 kPpFfn">
                        <path fill="#ffffff" d="M8.031 2.029a1.5 1.5 0 0 0-.472 1.94l5.696 9.87-5.696 9.87a1.5 1.5 0 0 0 2.41 1.39l6.5-11.25a1.5 1.5 0 0 0 0-1.39l-6.5-11.25a1.5 1.5 0 0 0-1.938-.47z"></path>
                    </svg>
                </button>

                <div class="card-container">
                    <!-- Mẫu Card Bài hát -->
                    @foreach($songs as $song)
                    <div class="card">
                        <img src="{{ asset($song->image_path) }}" alt="Album Art">
                        <h3>{{ $song->name }}</h3>
                        <p>{{ $song->artist->name }}</p>
                        <div class="play-button">
                            <svg role="img" height="24" width="24" aria-hidden="true" viewBox="0 0 24 24" data-icon="play" class="Svg-sc-ytk21e-0 kPpFfn">
                                <path d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.782V4.218a.7.7 0 0 1 1.05-.612z"></path>
                            </svg>
                        </div>
                    </div>
                    @endforeach
                    <!-- Thêm các card bài hát khác tại đây -->
                </div>
            </div>
        </section>

        <section>
            <h2>Nghệ sĩ phổ biến</h2>
            <div class="carousel-wrapper">
                <!-- Navigation Buttons -->
                <button class="nav-button prev">
                    <svg role="img" height="24" width="24" aria-hidden="true" viewBox="0 0 24 24" data-icon="chevron-left" class="Svg-sc-ytk21e-0 kPpFfn">
                        <path fill="#ffffff" d="m15.969 2.029a1.5 1.5 0 0 1 .472 1.94l-5.696 9.87 5.696 9.87a1.5 1.5 0 0 1-2.41 1.39l-6.5-11.25a1.5 1.5 0 0 1 0-1.39l6.5-11.25a1.5 1.5 0 0 1 1.938-.47z"></path>
                    </svg>
                </button>
                <button class="nav-button next">
                    <svg role="img" height="24" width="24" aria-hidden="true" viewBox="0 0 24 24" data-icon="chevron-right" class="Svg-sc-ytk21e-0 kPpFfn">
                        <path fill="#ffffff" d="M8.031 2.029a1.5 1.5 0 0 0-.472 1.94l5.696 9.87-5.696 9.87a1.5 1.5 0 0 0 2.41 1.39l6.5-11.25a1.5 1.5 0 0 0 0-1.39l-6.5-11.25a1.5 1.5 0 0 0-1.938-.47z"></path>
                    </svg>
                </button>
                <div class="card-container">
                    <!-- Mẫu Card Nghệ sĩ -->
                    @foreach($artists as $artist)
                    <a href="{{ route('artists.show', $artist->id) }}" class="card-link">
                        <div class="card">
                            <img src="{{ asset($artist->image_path) }}" alt="Artist Image" class="artist-card-image" style="border-radius: 50%;">
                            <h3>{{ $artist->name }}</h3>
                            <p>Nghệ sĩ</p>
                        </div>
                    </a>
                    @endforeach
                    <!-- Thêm các card nghệ sĩ khác tại đây -->
                </div>
            </div>
        </section>

        <section>
            <h2>Album và đĩa đơn nổi tiếng</h2>
            <div class="carousel-wrapper">
                <!-- Navigation Buttons -->
                <button class="nav-button prev">
                    <svg role="img" height="24" width="24" aria-hidden="true" viewBox="0 0 24 24" data-icon="chevron-left" class="Svg-sc-ytk21e-0 kPpFfn">
                        <path fill="#ffffff" d="m15.969 2.029a1.5 1.5 0 0 1 .472 1.94l-5.696 9.87 5.696 9.87a1.5 1.5 0 0 1-2.41 1.39l-6.5-11.25a1.5 1.5 0 0 1 0-1.39l6.5-11.25a1.5 1.5 0 0 1 1.938-.47z"></path>
                    </svg>
                </button>
                <button class="nav-button next">
                    <svg role="img" height="24" width="24" aria-hidden="true" viewBox="0 0 24 24" data-icon="chevron-right" class="Svg-sc-ytk21e-0 kPpFfn">
                        <path fill="#ffffff" d="M8.031 2.029a1.5 1.5 0 0 0-.472 1.94l5.696 9.87-5.696 9.87a1.5 1.5 0 0 0 2.41 1.39l6.5-11.25a1.5 1.5 0 0 0 0-1.39l-6.5-11.25a1.5 1.5 0 0 0-1.938-.47z"></path>
                    </svg>
                </button>
                <div class="card-container">
                    <!-- Mẫu Card Album/Đĩa đơn -->
                    @foreach($albums as $album)
                    <div class="card">
                        <img src="{{ asset($album->image_path) }}" alt="Album/Single Art">
                        <h3>{{ $album->name }}</h3>
                        <p>{{ $album->artist->name }}</p>
                        <div class="play-button">
                            <svg role="img" height="24" width="24" aria-hidden="true" viewBox="0 0 24 24" data-icon="play" class="Svg-sc-ytk21e-0 kPpFfn">
                                <path d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.782V4.218a.7.7 0 0 1 1.05-.612z"></path>
                            </svg>
                        </div>
                    </div>
                    @endforeach
                    <!-- Thêm các card khác -->
                </div>
            </div>
        </section>

        <section>
            <h2>Radio phổ biến</h2>
            <div class="carousel-wrapper">
                <!-- Navigation Buttons -->
                <button class="nav-button prev">
                    <svg role="img" height="24" width="24" aria-hidden="true" viewBox="0 0 24 24" data-icon="chevron-left" class="Svg-sc-ytk21e-0 kPpFfn">
                        <path fill="#ffffff" d="m15.969 2.029a1.5 1.5 0 0 1 .472 1.94l-5.696 9.87 5.696 9.87a1.5 1.5 0 0 1-2.41 1.39l-6.5-11.25a1.5 1.5 0 0 1 0-1.39l6.5-11.25a1.5 1.5 0 0 1 1.938-.47z"></path>
                    </svg>
                </button>
                <button class="nav-button next">
                    <svg role="img" height="24" width="24" aria-hidden="true" viewBox="0 0 24 24" data-icon="chevron-right" class="Svg-sc-ytk21e-0 kPpFfn">
                        <path fill="#ffffff" d="M8.031 2.029a1.5 1.5 0 0 0-.472 1.94l5.696 9.87-5.696 9.87a1.5 1.5 0 0 0 2.41 1.39l6.5-11.25a1.5 1.5 0 0 0 0-1.39l-6.5-11.25a1.5 1.5 0 0 0-1.938-.47z"></path>
                    </svg>
                </button>
                <div class="card-container">
                    <!-- Mẫu Card Radio -->
                    @foreach($radios as $radio)
                    <div class="card">
                        <img src="{{ asset($radio->image_path) }}" alt="Radio Image" style="border-radius: 50%;">
                        <h3>{{ $radio->name }}</h3>
                        <p>{{ $radio->description }}</p>
                        <div class="play-button">
                            <svg role="img" height="24" width="24" aria-hidden="true" viewBox="0 0 24 24" data-icon="play" class="Svg-sc-ytk21e-0 kPpFfn">
                                <path d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.782V4.218a.7.7 0 0 1 1.05-.612z"></path>
                            </svg>
                        </div>
                    </div>
                    @endforeach
                    <!-- Thêm các card khác -->
                </div>
            </div>
        </section>

        <section>
            <h2>Bảng xếp hạng Nổi bật</h2>
            <div class="carousel-wrapper">
                <!-- Navigation Buttons -->
                <button class="nav-button prev">
                    <svg role="img" height="24" width="24" aria-hidden="true" viewBox="0 0 24 24" data-icon="chevron-left" class="Svg-sc-ytk21e-0 kPpFfn">
                        <path fill="#ffffff" d="m15.969 2.029a1.5 1.5 0 0 1 .472 1.94l-5.696 9.87 5.696 9.87a1.5 1.5 0 0 1-2.41 1.39l-6.5-11.25a1.5 1.5 0 0 1 0-1.39l6.5-11.25a1.5 1.5 0 0 1 1.938-.47z"></path>
                    </svg>
                </button>
                <button class="nav-button next">
                    <svg role="img" height="24" width="24" aria-hidden="true" viewBox="0 0 24 24" data-icon="chevron-right" class="Svg-sc-ytk21e-0 kPpFfn">
                        <path fill="#ffffff" d="M8.031 2.029a1.5 1.5 0 0 0-.472 1.94l5.696 9.87-5.696 9.87a1.5 1.5 0 0 0 2.41 1.39l6.5-11.25a1.5 1.5 0 0 0 0-1.39l-6.5-11.25a1.5 1.5 0 0 0-1.938-.47z"></path>
                    </svg>
                </button>
                <div class="card-container">
                    <!-- Mẫu Card Bảng xếp hạng -->
                    @foreach($charts as $chart)
                    <div class="card" style="background-color: {{ $chart->background_color }};">
                        @if($chart->image_path)
                        <img src="{{ asset($chart->image_path) }}" alt="Chart Image">
                        @endif
                        <h3>{{ $chart->name }}</h3>
                        <p>{{ $chart->description }}</p>
                        <div class="play-button">
                            <svg role="img" height="24" width="24" aria-hidden="true" viewBox="0 0 24 24" data-icon="play" class="Svg-sc-ytk21e-0 kPpFfn">
                                <path d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.782V4.218a.7.7 0 0 1 1.05-.612z"></path>
                            </svg>
                        </div>
                    </div>
                    @endforeach
                    <!-- Thêm các card khác với màu khác nhau -->
                </div>
            </div>
        </section>

        <section>
            <h2>Nâng đỡ bên thềm, nhạc đổ vào tim</h2>
            <div class="carousel-wrapper">
                <!-- Navigation Buttons -->
                <button class="nav-button prev">
                    <svg role="img" height="24" width="24" aria-hidden="true" viewBox="0 0 24 24" data-icon="chevron-left" class="Svg-sc-ytk21e-0 kPpFfn">
                        <path fill="#ffffff" d="m15.969 2.029a1.5 1.5 0 0 1 .472 1.94l-5.696 9.87 5.696 9.87a1.5 1.5 0 0 1-2.41 1.39l-6.5-11.25a1.5 1.5 0 0 1 0-1.39l6.5-11.25a1.5 1.5 0 0 1 1.938-.47z"></path>
                    </svg>
                </button>
                <button class="nav-button next">
                    <svg role="img" height="24" width="24" aria-hidden="true" viewBox="0 0 24 24" data-icon="chevron-right" class="Svg-sc-ytk21e-0 kPpFfn">
                        <path fill="#ffffff" d="M8.031 2.029a1.5 1.5 0 0 0-.472 1.94l5.696 9.87-5.696 9.87a1.5 1.5 0 0 0 2.41 1.39l6.5-11.25a1.5 1.5 0 0 0 0-1.39l-6.5-11.25a1.5 1.5 0 0 0-1.938-.47z"></path>
                    </svg>
                </button>
                <div class="card-container">
                    <!-- Mẫu Card Gợi ý -->
                    @foreach($suggestions as $suggestion)
                    <div class="card">
                        <img src="{{ asset($suggestion->image_path) }}" alt="Suggestion Image">
                        <h3>{{ $suggestion->name }}</h3>
                        <p>{{ $suggestion->description }}</p>
                        <div class="play-button">
                            <svg role="img" height="24" width="24" aria-hidden="true" viewBox="0 0 24 24" data-icon="play" class="Svg-sc-ytk21e-0 kPpFfn">
                                <path d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.782V4.218a.7.7 0 0 1 1.05-.612z"></path>
                            </svg>
                        </div>
                    </div>
                    @endforeach
                    <!-- Thêm các card khác -->
                </div>
            </div>
        </section>
    </main>

    <!-- Custom Auth Modal -->
    <div id="authModal" class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <div class="modal-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-music"><path d="M9 18V5l12-2v13"></path><circle cx="6" cy="18" r="3"></circle><circle cx="18" cy="16" r="3"></circle></svg>
            </div>
            <h2>Đăng nhập để tiếp tục</h2>
            <p>Bạn cần đăng nhập để có thể nghe nhạc. Chuyển đến trang đăng nhập?</p>
            <div class="modal-buttons">
                <button id="confirmLogin" class="btn btn-primary">Đăng nhập</button>
                <button id="cancelLogin" class="btn btn-secondary">Hủy</button>
            </div>
        </div>
    </div>

    <footer>
        <div class="social-icons">
            <a href="https://www.instagram.com/phattien2108/" class="social-icon instagram"></a>
            <a href="https://x.com/26_tien" class="social-icon twitter"></a>
            <a href="https://www.facebook.com/otienphat.846672/" class="social-icon facebook"></a>
            <!-- Thêm các biểu tượng mạng xã hội khác nếu cần -->
        </div>
        <p>&copy; {{ date('Y') }} Thế Giới Âm Nhạc. All rights reserved.</p>
    </footer>

    <script src="{{ asset('js/guest/script.js') }}"></script>
</body>
</html> 