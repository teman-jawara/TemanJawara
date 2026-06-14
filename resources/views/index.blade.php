<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>TemanJawara – Dari Untirta, Menuju Juara</title>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
</head>
<body>

<!-- ── NAVBAR ── -->
<nav>
  <a href="{{ route('index') }}" class="logo">
 <img src="{{ asset('image/logo.png') }}" alt="logo-img" class="logo-img">

  <div class="logo-text">
    <strong>TemanJawara</strong>
    <span>Dari Untirta, Menuju Juara</span>
  </div>
</a>

  <ul class="nav-links">
    <li><a href="{{ route('homepage') }}">Beranda</a></li>
    <li><a href="{{ route('features') }}">Fitur</a></li>
    <li><a href="{{ route('guidelines') }}">Pedoman</a></li>
    
  </ul>

  <div class="nav-actions">
    <a href="{{ route('login') }}" class="btn-ghost">Masuk</a>
    <a href="{{ route('register') }}" class="btn-primary">Daftar Sekarang</a>
  </div>
</nav>

<!-- ── HERO ── -->
<section class="hero">
  <h1 class="fade-up">Temukan Partner Lomba<br>Sesama Mahasiswa Untirta</h1>
  <p class="fade-up delay-1">
    Platform yang membantu mahasiswa Untirta menemukan rekan tim berdasarkan minat,
    keahlian, dan bidang kompetisi untuk meraih prestasi bersama.
  </p>
  <a href="{{ route('login') }}" class="btn-cta fade-up delay-2">Cari Partnermu!</a>
</section>

<!-- ── CATEGORIES ── -->
<section class="categories">
  <h2 class="section-title">
    Lomba Untuk <span class="highlight">Semua Bidang</span>
  </h2>

  <div class="category-slider">
    <div class="category-track">

      <!-- SET 1 -->
      <div class="cat-card"><div class="cat-icon">📚</div><span>Karya Tulis</span></div>
      <div class="cat-card"><div class="cat-icon">📊</div><span>Bisnis</span></div>
      <div class="cat-card"><div class="cat-icon">💻</div><span>Teknologi</span></div>
      <div class="cat-card"><div class="cat-icon">🎨</div><span>Desain</span></div>
      <div class="cat-card"><div class="cat-icon">🎤</div><span>Public Speaking</span></div>
      <div class="cat-card"><div class="cat-icon">⚖️</div><span>Debat</span></div>
      <div class="cat-card"><div class="cat-icon">📱</div><span>UI/UX</span></div>
      <div class="cat-card"><div class="cat-icon">🤖</div><span>AI</span></div>
      <div class="cat-card"><div class="cat-icon">📈</div><span>Data Science</span></div>
      <div class="cat-card"><div class="cat-icon">🎬</div><span>Video Kreatif</span></div>

      <!-- DUPLIKAT BIAR LOOPING MULUS -->
      <div class="cat-card"><div class="cat-icon">📚</div><span>Karya Tulis</span></div>
      <div class="cat-card"><div class="cat-icon">📊</div><span>Bisnis</span></div>
      <div class="cat-card"><div class="cat-icon">💻</div><span>Teknologi</span></div>
      <div class="cat-card"><div class="cat-icon">🎨</div><span>Desain</span></div>
      <div class="cat-card"><div class="cat-icon">🎤</div><span>Public Speaking</span></div>
      <div class="cat-card"><div class="cat-icon">⚖️</div><span>Debat</span></div>
      <div class="cat-card"><div class="cat-icon">📱</div><span>UI/UX</span></div>
      <div class="cat-card"><div class="cat-icon">🤖</div><span>AI</span></div>
      <div class="cat-card"><div class="cat-icon">📈</div><span>Data Science</span></div>
      <div class="cat-card"><div class="cat-icon">🎬</div><span>Video Kreatif</span></div>

    </div>
  </div>
</section>

<!-- ── FEATURES ── -->
<section class="features" id="fitur">
  <h2 class="section-title">Fitur Unggulan</h2>
  <p class="section-sub">
    Platform pencarian partner lomba bagi mahasiswa Untirta untuk membangun tim yang solid dan berprestasi.
  </p>
  <div class="feat-grid">
    <div class="feat-card">
      <div class="feat-icon">🔍</div>
      <h3>Cari Partner Lomba Sesama Untirta</h3>
      <p>Temukan rekan tim dari berbagai fakultas dan program studi di Untirta.</p>
    </div>
    <div class="feat-card">
      <div class="feat-icon">💡</div>
      <h3>Temukan Skill yang Kamu Butuhkan</h3>
      <p>Cari programmer, designer, penulis, hingga public speaker dalam satu platform.</p>
    </div>
    <div class="feat-card">
      <div class="feat-icon">🔗</div>
      <h3>Terhubung dengan Mudah</h3>
      <p>Hubungi calon partner secara langsung dan lanjutkan diskusi melalui platform komunikasi pilihanmu.</p>
    </div>
    <div class="feat-card">
      <div class="feat-icon">👤</div>
      <h3>Tampilkan Profil dan Pengalaman</h3>
      <p>Perkenalkan dirimu melalui informasi skill, minat, dan pengalaman yang dimiliki.</p>
    </div>
    <div class="feat-card">
      <div class="feat-icon">🤝</div>
      <h3>Perluas Relasi Antar Mahasiswa</h3>
      <p>Terhubung dengan mahasiswa dari berbagai jurusan yang aktif dan tertarik mengikuti kompetisi.</p>
    </div>
    <div class="feat-card">
      <div class="feat-icon">🏅</div>
      <h3>Temukan Peluang Berprestasi</h3>
      <p>Buka kesempatan mengikuti berbagai kompetisi bersama mahasiswa lain yang memiliki semangat yang sama.</p>
    </div>
  </div>
</section>

<!-- ── CTA BANNER ── -->
<section class="cta-banner">
  <h2>
    Siap Menjadi
    <span class="highlight">Juwara</span>
    Berikutnya?
  </h2>

  <p>
    Mahasiswa dari berbagai jurusan telah bergabung.
    Daftarkan dirimu sekarang dan temukan partner lomba
    yang tepat untuk perjalanan kompetisimu!
  </p>

  <a href="{{ route('login') }}" class="btn-gold">
    Cari Partnermu!
  </a>
</section>

<!-- ── FOOTER ── -->
<footer>
  <p>©2026 TemanJawara. All right reserved</p>
  <div class="footer-links">
    <a href="#">Kebijakan Privasi</a>
    <a href="#">Syarat</a>
    <a href="#">Ketentuan</a>
  </div>
</footer>

</body>
</html>