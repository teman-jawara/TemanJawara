<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TemanJawara - Homepage</title>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style4.css') }}">
</head>
<body>

<!-- TOPBAR -->
<header class="topbar">
  <div class="topbar-left">
    <div class="topbar-kit">
    <div class="logo-wrap">
      <div class="logo-image">
        <img src="{{ asset('image/logo.png') }}" alt="TemanJawara Logo" class="logo-img">
      </div>
      <div class="logo-text">
        <h1>TemanJawara</h1>
        <p>Dari Untirta, Menuju Juara</p>
      </div>
    </div>
    <button class="hamburger" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
</div>
  </div>
  <div class="topbar-right">
    <button class="notif-btn" aria-label="Notifikasi">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
       stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <path d="M18 8a6 6 0 0 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"/>
    <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
  </svg>
      <span class="notif-badge"></span>
    </button>
    <div class="profile-chip" id="profileChip" tabindex="0">
      <img src="{{ asset('image/angel.jpg') }}" alt="{{ Auth::user()->name }}" class="profile-avatar">
      <span class="pname">{{ Auth::user()->name }}</span>
      <span class="medal">🏅</span>
      <span class="chevron">▾</span>

      <div class="profile-dropdown" id="profileDropdown">
        <div class="dropdown-header">
          <div class="full-name">{{ Auth::user()->name }}</div>
          <div class="major">{{ Auth::user()->email }}, {{ Auth::user()->prodi }}</div>
          <span class="badge-tag">🏅 Langganan Jawara</span>
        </div>
        <div class="dropdown-menu">
          <div class="dropdown-item">
            <span class="icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="2">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                <circle cx="12" cy="7" r="4"/>
              </svg>
            </span> Profil Saya
            <a class="dropdown-item profile" href="{{ route('profile') }}"></a>
          </div>
          <div class="dropdown-item">
            <span class="icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                   stroke-width="2">
                <path d="M18 8a6 6 0 0 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"/>
                <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
              </svg>
            </span> Notifikasi
          </div>
          <form method="POST" action="{{ route('logout') }}">
    @csrf

    <button type="submit" class="dropdown-item logout">
        <span class="icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                <polyline points="16 17 21 12 16 7"/>
                <line x1="21" y1="12" x2="9" y2="12"/>
            </svg>
        </span>
        Keluar
    </button>
</form>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- LAYOUT -->
<div class="layout">

 <!-- SIDEBAR -->
  <div class="sidebar-col">
    <nav class="sidebar">
      <a class="nav-item active" href="{{route('homepage')}}">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
    Halaman Utama
  </a>
  <a class="nav-item" href="{{ route('partner') }}">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
    Cari Partner
  </a>
  <a class="nav-item" href="{{ route('postpage') }}">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
    Posting
  </a>
  <a class="nav-item " href="{{ route('profile') }}">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
    Profil Saya
  </a>
  <a class="nav-item" href="{{ route('message') }}">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
    Pesan
      </a>
    </nav>
</div>

  <!-- FEED -->
  <main class="feed">

    <!-- Search -->
    <div class="search-bar">
      <span class="search-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="11" cy="11" r="8"/>
          <line x1="21" y1="21" x2="16.65" y2="16.65"/>
        </svg>
      </span>
      <input type="text" placeholder="Search">
    </div>

    <!-- Post Card -->
    <div class="post-card">
      <div class="post-header">
        <div class="post-avatar">
          <img src="{{ asset('image/angel.jpg') }}" alt="{{ Auth::user()->name }}" class="post-avatar">
        </div>
        <div class="post-meta">
          <div class="post-name">Angelie Karin<span>🏅</span></div>
          <div class="post-sub">UI UX Design · Informatika · Kompetisi Teknologi</div>
          <div class="post-time">3 jam yang lalu</div>
        </div>
      </div>
      <div class="post-body">
        <p>Alhamdulillah, segala proses dan usaha selama ini akhirnya membuahkan hasil. Setelah menjalaani bimbingan selama 3 bulan, saya bersama tim berhasil meraih Juara 1 UI/UX Inovasi pada IMAS National Competition. 🏆</p>
        <br>
        <p>Terima kasih kepada teman-teman LKM, teman-teman peserta, serta para juri yang super asik dan memberikan banyak insight berharga selama kompetisi ini. Banyak pelajaran yang saya dapatkan, mulai dari bagaimana melakukan pitching yang efektif, menyusun business understanding yang kuat, hingga merancang alur UI yang mudah dipahami oleh pengguna. Pengalaman yang sangat berkesan dan penuh pembelajaran. Sampai jumpa di Misi berikutnya guys! 🎯</p>
      </div>

      <!-- Competition Banner -->
      <div class="comp-banner">
        <div class= "post-image">
          <img src="{{ asset('image/juara.png') }}" alt="IMAS Banner" class="post-image-img">
        </div>
      </div>

      <div class="post-footer">
        <button class="action-btn liked" aria-label="Like">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
            <path d="M7 10v12"/>
            <path d="M15 5.88L14 10h5.83a2 2 0 0 1 1.92 2.56l-1.2 4A2 2 0 0 1 18.63 18H7V10l5-5a2 2 0 0 1 3 .88z"/>
          </svg>
        </button>
        <button class="action-btn" aria-label="Komentar">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
          </svg>
        </button>
        <button class="action-btn" aria-label="Simpan">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2">
          <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/>
        </svg>
        </button>
        <button class="action-btn" aria-label="Bagikan">
           <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
            <circle cx="18" cy="5" r="3"/>
            <circle cx="6" cy="12" r="3"/>
            <circle cx="18" cy="19" r="3"/>
            <line x1="8.6" y1="13.5" x2="15.4" y2="17.5"/>
            <line x1="15.4" y1="6.5" x2="8.6" y2="10.5"/>
          </svg>
        </button>
      </div>
    </div>

    <!-- Second Post (lighter) -->
    <div class="post-card">
      <div class="post-header">
        <div class="post-avatar" style="background: linear-gradient(135deg, #2d4a8a, #F5C518);">
          <img src="{{ asset('image/morgan.jpg') }}" alt="Rizky Morgan" class="post-avatar">
        </div>
        <div class="post-meta">
          <div class="post-name">Rizky Morgan <span>🏅</span></div>
          <div class="post-sub">Data Science · Teknik Informatika · Kompetisi Riset</div>
          <div class="post-time">5 jam yang lalu</div>
        </div>
      </div>
      <div class="post-body">
        <p>Siapa yang mau join tim buat GEMASTIK tahun ini? Lagi nyari partner yang jago di bidang machine learning atau data analytics. DM kalau tertarik! 🔥</p>
      </div>
      <div class="post-footer">
        <button class="action-btn liked" aria-label="Like">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
            <path d="M7 10v12"/>
            <path d="M15 5.88L14 10h5.83a2 2 0 0 1 1.92 2.56l-1.2 4A2 2 0 0 1 18.63 18H7V10l5-5a2 2 0 0 1 3 .88z"/>
          </svg>
        </button>
        <button class="action-btn" aria-label="Komentar">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
          </svg>
        </button>
        <button class="action-btn" aria-label="Simpan">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2">
          <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/>
        </svg>
        </button>
        <button class="action-btn" aria-label="Bagikan">
           <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
            <circle cx="18" cy="5" r="3"/>
            <circle cx="6" cy="12" r="3"/>
            <circle cx="18" cy="19" r="3"/>
            <line x1="8.6" y1="13.5" x2="15.4" y2="17.5"/>
            <line x1="15.4" y1="6.5" x2="8.6" y2="10.5"/>
          </svg>
        </button>
      </div>
    </div>

  </main>

  <!-- RIGHT PANEL -->
  <aside class="right-panel">

    <!-- News -->
    <div class="panel-card">
      <div class="panel-title">TemanJawara News <span class="ptag">TOP</span></div>
      <div class="news-subtitle">Top News</div>

      <div class="news-item">
        <div class="news-img">💻</div>
        <div class="news-body">
          <div class="news-title-text">Syududu lolos ICT International C...</div>
          <div class="news-meta">15m yang lalu · 👁 150 ribu view</div>
        </div>
      </div>

      <div class="news-item">
        <div class="news-img" style="background: linear-gradient(135deg,#e67e22,#f39c12);">🍟</div>
        <div class="news-body">
          <div class="news-title-text">KeripikTempe lolos seleksi IISMA k...</div>
          <div class="news-meta">25m yang lalu · 👁 200 ribu view</div>
        </div>
      </div>

      <div class="news-item">
        <div class="news-img" style="background: linear-gradient(135deg,#8e44ad,#3498db);">🌀</div>
        <div class="news-body">
          <div class="news-title-text">Asep Spiral raih juara 1 Gemastik...</div>
          <div class="news-meta">40m yang lalu · 👁 250 ribu view</div>
        </div>
      </div>

      <div class="news-item">
        <div class="news-img" style="background: linear-gradient(135deg,#27ae60,#2ecc71);">🏸</div>
        <div class="news-body">
          <div class="news-title-text">Angelie sang atlet Padel FH raih j...</div>
          <div class="news-meta">50m yang lalu · 👁 350 ribu view</div>
        </div>
      </div>
    </div>

    <!-- Suggestions -->
    <div class="panel-card">
      <div class="panel-title">Disarankan untuk anda</div>

      <div class="suggest-item">
        <div class="suggest-avatar" style="background: linear-gradient(135deg,#8e44ad,#3498db);">
           <img src="{{ asset('image/asep.jpg') }}" alt="Asep Morgan" class="suggest-avatar">
        </div>
        <div class="suggest-info">
          <div class="suggest-name">Asep Morgan <span>🏅</span></div>
          <div class="suggest-handle">@asepganteng</div>
        </div>
        <button class="follow-btn">Follow</button>
      </div>

      <div class="suggest-item">
        <div class="suggest-avatar" style="background: linear-gradient(135deg,var(--gold),var(--navy));">
          <img src="{{ asset('image/ivee.jpg') }}" alt="Ivee Clarissa" class="suggest-avatar">
        </div>
        <div class="suggest-info">
          <div class="suggest-name">Ivee Clarissa <span>🏅</span></div>
          <div class="suggest-handle">@iveeclar</div>
        </div>
        <button class="follow-btn">Follow</button>
      </div>

      <div class="suggest-item">
        <div class="suggest-avatar" style="background: linear-gradient(135deg,#27ae60,#16a085);">
          <img src="{{ asset('image/rizky.jpg') }}" alt="Rizky Daumar" class="suggest-avatar">
        </div>
        <div class="suggest-info">
          <div class="suggest-name">Rizky Daumar <span>🏅</span></div>
          <div class="suggest-handle">@daumanriz</div>
        </div>
        <button class="follow-btn">Follow</button>
      </div>

      <a href="#" class="show-more">Show more...</a>
    </div>

  </aside>
</div>

<script>
  // Toggle profile dropdown
  const chip = document.getElementById('profileChip');
  chip.addEventListener('click', (e) => {
    e.stopPropagation();
    chip.classList.toggle('open');
  });
  document.addEventListener('click', () => chip.classList.remove('open'));

  // Like button toggle
  document.querySelectorAll('.action-btn').forEach(btn => {
    if (btn.getAttribute('aria-label') === 'Like') {
      btn.addEventListener('click', () => btn.classList.toggle('liked'));
    }
  });
</script>

</body>
</html>
