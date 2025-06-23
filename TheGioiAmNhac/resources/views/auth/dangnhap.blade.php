<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="{{ asset('css/auth/dangnhap.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="auth-body">
    <div class="auth-box">
        <div class="auth-logo"><i class="fa-solid fa-music"></i> WorldFi</div>
        <div class="auth-slogan">Khám phá thế giới âm nhạc không giới hạn</div>
        <div class="auth-title">Đăng nhập</div>
        <form class="auth-form" method="POST" action="{{ route('user.authUser') }}">
            @csrf
            <div class="input-icon">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" required autofocus>
            </div>
            <div class="input-icon">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="Mật khẩu" required>
            </div>
            <button type="submit">Đăng nhập</button>
        </form>
        <div class="auth-link">Chưa có tài khoản? <a href="/dangky">Đăng ký</a></div>
    </div>
</body>
</html>
