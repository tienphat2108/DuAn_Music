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
            <h1>Thế Giới Âm Nhạc</h1>
        </div>
        <nav>
            <a href="#">Về chúng tôi</a>
            <a href="#">Khám phá</a>
            <a href="#">Đăng ký</a>
            <a href="#">Đăng nhập</a>
        </nav>
    </header>

    <main>
        <section>
            <h2>Bài hát thịnh hành</h2>
            <div class="card-container">
                <!-- Mẫu Card Bài hát -->
                <div class="card">
                    <img src="https://via.placeholder.com/150" alt="Album Art">
                    <h3>Tên bài hát</h3>
                    <p>Nghệ sĩ</p>
                </div>
                 <div class="card">
                    <img src="https://via.placeholder.com/150" alt="Album Art">
                    <h3>Tên bài hát</h3>
                    <p>Nghệ sĩ</p>
                </div>
                 <div class="card">
                    <img src="https://via.placeholder.com/150" alt="Album Art">
                    <h3>Tên bài hát</h3>
                    <p>Nghệ sĩ</p>
                </div>
                 <div class="card">
                    <img src="https://via.placeholder.com/150" alt="Album Art">
                    <h3>Tên bài hát</h3>
                    <p>Nghệ sĩ</p>
                </div>
                <!-- Thêm các card bài hát khác tại đây -->
            </div>
        </section>

        <section>
            <h2>Nghệ sĩ phổ biến</h2>
            <div class="card-container">
                <!-- Mẫu Card Nghệ sĩ -->
                <div class="card">
                    <img src="https://via.placeholder.com/150" alt="Artist Image" style="border-radius: 50%;">
                    <h3>Tên nghệ sĩ</h3>
                    <p>Nghệ sĩ</p>
                </div>
                 <div class="card">
                    <img src="https://via.placeholder.com/150" alt="Artist Image" style="border-radius: 50%;">
                    <h3>Tên nghệ sĩ</h3>
                    <p>Nghệ sĩ</p>
                </div>
                 <div class="card">
                    <img src="https://via.placeholder.com/150" alt="Artist Image" style="border-radius: 50%;">
                    <h3>Tên nghệ sĩ</h3>
                    <p>Nghệ sĩ</p>
                </div>
                 <div class="card">
                    <img src="https://via.placeholder.com/150" alt="Artist Image" style="border-radius: 50%;">
                    <h3>Tên nghệ sĩ</h3>
                    <p>Nghệ sĩ</p>
                </div>
                <!-- Thêm các card nghệ sĩ khác tại đây -->
            </div>
        </section>
    </main>

    <main>
        <section>
            <h2>Album và đĩa đơn nổi tiếng</h2>
            <div class="card-container">
                <!-- Mẫu Card Album/Đĩa đơn -->
                <div class="card">
                    <img src="https://via.placeholder.com/150" alt="Album/Single Art">
                    <h3>Tên Album/Đĩa đơn</h3>
                    <p>Nghệ sĩ</p>
                </div>
                <!-- Thêm các card khác -->
            </div>
        </section>

        <section>
            <h2>Radio phổ biến</h2>
            <div class="card-container">
                <!-- Mẫu Card Radio -->
                <div class="card">
                    <img src="https://via.placeholder.com/150" alt="Radio Image" style="border-radius: 50%;">
                    <h3>Tên Radio</h3>
                    <p>Mô tả</p>
                </div>
                <!-- Thêm các card khác -->
            </div>
        </section>

        <section>
            <h2>Bảng xếp hạng Nổi bật</h2>
            <div class="card-container">
                <!-- Mẫu Card Bảng xếp hạng -->
                <div class="card" style="background-color: #e91e63;"> <!-- Ví dụ màu hồng -->
                    <img src="https://via.placeholder.com/150" alt="Chart Image">
                    <h3>Tên Bảng xếp hạng</h3>
                    <p>Mô tả</p>
                </div>
                 <div class="card" style="background-color: #00bcd4;"> <!-- Ví dụ màu xanh dương -->
                    <img src="https://via.placeholder.com/150" alt="Chart Image">
                    <h3>Tên Bảng xếp hạng</h3>
                    <p>Mô tả</p>
                </div>
                <!-- Thêm các card khác với màu khác nhau -->
            </div>
        </section>

        <section>
            <h2>Nâng đỡ bên thềm, nhạc đổ vào tim</h2>
            <div class="card-container">
                <!-- Mẫu Card Gợi ý -->
                <div class="card">
                    <img src="https://via.placeholder.com/150" alt="Suggestion Image">
                    <h3>Tên Gợi ý</h3>
                    <p>Mô tả</p>
                </div>
                <!-- Thêm các card khác -->
            </div>
        </section>
    </main>

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