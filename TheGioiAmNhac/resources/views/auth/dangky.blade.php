<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="{{ asset('css/auth/dangky.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="auth-body">
    <div class="auth-box">
        <div class="auth-logo"><i class="fa-solid fa-music"></i> WorldFi</div>
        <div class="auth-slogan">Tham gia cộng đồng âm nhạc hiện đại nhất</div>
        <div class="auth-title">Đăng ký</div>
        <form class="auth-form" method="POST" action="{{ route('user.postUser') }}">
            @csrf
            <div class="input-icon">
                <i class="fa-solid fa-user"></i>
                <input type="text" name="name" placeholder="Tên người dùng" required autofocus>
            </div>
            <div class="input-icon">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-icon">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="Mật khẩu" required>
            </div>
            <button type="submit">Đăng ký</button>
        </form>
        <div class="auth-link">Đã có tài khoản? <a href="/dangnhap">Đăng nhập</a></div>
    </div>
</body>
</html>
