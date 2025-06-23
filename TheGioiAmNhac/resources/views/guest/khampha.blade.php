<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khám Phá - Thế Giới Âm Nhạc</title>
    <link rel="stylesheet" href="/css/guest/khampha.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            background: linear-gradient(120deg, #232526 0%, #414345 100%);
        }
        .khampha-container {
            background: rgba(30,34,45,0.98);
            color: #fff;
            box-shadow: 0 8px 32px rgba(0,255,255,0.10);
            border: 2px solid #00fff7;
            animation: fadeInUp 1.2s cubic-bezier(.39,.575,.56,1.000);
        }
        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(60px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .music-wave {
            width: 120px; height: 40px; margin: 0 auto 18px auto; display: flex; align-items: flex-end; gap: 3px;
        }
        .music-wave span {
            display: block; width: 10px; background: linear-gradient(120deg, #00fff7 0%, #007cf0 100%); border-radius: 4px;
            animation: wave 1.2s infinite ease-in-out;
        }
        .music-wave span:nth-child(1) { height: 18px; animation-delay: 0s; }
        .music-wave span:nth-child(2) { height: 28px; animation-delay: 0.2s; }
        .music-wave span:nth-child(3) { height: 38px; animation-delay: 0.4s; }
        .music-wave span:nth-child(4) { height: 28px; animation-delay: 0.6s; }
        .music-wave span:nth-child(5) { height: 18px; animation-delay: 0.8s; }
        @keyframes wave {
            0%, 100% { transform: scaleY(1); }
            50% { transform: scaleY(1.7); }
        }
        .music-quote {
            font-style: italic; color: #00fff7; margin-bottom: 24px; font-size: 1.1rem;
        }
        .khampha-feature-card i {
            font-size: 2.2rem; margin-bottom: 10px; display: block;
            color: #00fff7; text-shadow: 0 0 8px #00fff7;
            animation: iconPulse 1.5s infinite alternate;
        }
        @keyframes iconPulse {
            0% { transform: scale(1); filter: brightness(1); }
            100% { transform: scale(1.15); filter: brightness(1.3); }
        }
        .khampha-extra {
            margin-top: 40px; padding: 32px 18px; background: rgba(0,255,255,0.07); border-radius: 18px;
            box-shadow: 0 4px 24px rgba(0,255,255,0.10);
            animation: fadeInUp 1.2s 0.5s backwards;
        }
        .khampha-extra-title {
            font-size: 1.5rem; color: #00fff7; font-weight: bold; margin-bottom: 12px; text-shadow: 0 0 8px #00fff7;
        }
        .khampha-strengths {
            display: flex; flex-wrap: wrap; gap: 24px; justify-content: center; margin-top: 18px;
        }
        .khampha-strength {
            background: linear-gradient(120deg, #007cf0 0%, #00fff7 100%);
            color: #232526;
            border-radius: 12px;
            padding: 18px 22px;
            min-width: 180px;
            font-weight: 500;
            box-shadow: 0 2px 12px rgba(0,255,255,0.10);
            display: flex; align-items: center; gap: 10px;
            font-size: 1.08rem;
            animation: fadeInUp 1.2s 0.7s backwards;
        }
        .khampha-strength i {
            font-size: 1.5rem; color: #fff; text-shadow: 0 0 8px #fff;
            animation: iconPulse 1.5s infinite alternate;
        }
        .khampha-slogan {
            margin-top: 24px; font-size: 1.15rem; color: #fff; font-style: italic; text-align: center;
            text-shadow: 0 0 8px #00fff7;
            animation: fadeInUp 1.2s 0.9s backwards;
        }
    </style>
</head>
<body>
<div class="khampha-container">
    <div class="music-wave">
        <span></span><span></span><span></span><span></span><span></span>
    </div>
    <div class="khampha-title"><i class="fa-solid fa-music"></i> Khám phá Thế Giới Âm Nhạc</div>
    <div class="music-quote">“Âm nhạc là ngôn ngữ của cảm xúc, là nhịp cầu kết nối tâm hồn.”</div>
    <div class="khampha-desc">
        Nơi bạn tìm thấy những bản nhạc hot nhất, playlist cá nhân hóa và trải nghiệm âm nhạc tuyệt vời!
    </div>
    <div class="khampha-features">
        <div class="khampha-feature-card">
            <i class="fa-solid fa-headphones"></i>
            <div class="khampha-feature-title">Playlist Đề Xuất</div>
            <div class="khampha-feature-desc">Khám phá playlist phù hợp với tâm trạng và sở thích của bạn.</div>
        </div>
        <div class="khampha-feature-card">
            <i class="fa-solid fa-ranking-star"></i>
            <div class="khampha-feature-title">BXH Âm Nhạc</div>
            <div class="khampha-feature-desc">Cập nhật bảng xếp hạng ca khúc, nghệ sĩ hot nhất mỗi ngày.</div>
        </div>
        <div class="khampha-feature-card">
            <i class="fa-solid fa-radio"></i>
            <div class="khampha-feature-title">Radio & Gợi Ý</div>
            <div class="khampha-feature-desc">Thưởng thức radio, nhận gợi ý nhạc mới dựa trên gu của bạn.</div>
        </div>
    </div>
    <div class="khampha-extra">
        <div class="khampha-extra-title"><i class="fa-solid fa-star"></i> Tại sao nên chọn Thế Giới Âm Nhạc?</div>
        <div class="khampha-strengths">
            <div class="khampha-strength"><i class="fa-solid fa-bolt"></i> Giao diện hiện đại, tốc độ mượt mà</div>
            <div class="khampha-strength"><i class="fa-solid fa-user-gear"></i> Cá nhân hóa trải nghiệm nghe nhạc</div>
            <div class="khampha-strength"><i class="fa-solid fa-heart"></i> Kết nối cộng đồng yêu nhạc</div>
            <div class="khampha-strength"><i class="fa-solid fa-magic"></i> Gợi ý thông minh, playlist đa dạng</div>
            <div class="khampha-strength"><i class="fa-solid fa-shield-halved"></i> Bảo mật & riêng tư tuyệt đối</div>
        </div>
        <div class="khampha-slogan">“Chạm vào cảm xúc, sống cùng âm nhạc!”</div>
    </div>
</div>
<script src="/js/guest/khampha.js"></script>
</body>
</html>
