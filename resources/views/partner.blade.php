<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TemanJawara - Cari Partner</title>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style5.css') }}">
<style>
  
</style>
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
          <div class="major">{{ Auth::user()->email }}, Informatika</div>
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
      <a class="nav-item" href="{{route('homepage')}}">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
    Halaman Utama
  </a>
  <a class="nav-item active" href="{{ route('partner') }}">
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
   

  <!-- MAIN -->
  <main class="main">

    <!-- Search -->
    <div class="search-wrap">
      <span class="s-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="11" cy="11" r="8"/>
          <line x1="21" y1="21" x2="16.65" y2="16.65"/>
        </svg>
      </span>
      <input type="text" id="searchInput" placeholder="Search">
    </div>

    <!-- Heading -->
    <div class="page-heading">Pilih <span>Partnermu!</span></div>

    <!-- Category Filter -->
    <div class="category-row" id="categoryRow">
      <button class="cat-btn" data-cat="semua" onclick="filterCat(this)">
        <span class="cat-icon">
           <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polygon points="12 2 15 9 22 9 17 14 19 22 12 18 5 22 7 14 2 9 9 9"/>
           </svg>
        </span>
        <span class="cat-label">Semua</span>
      </button>
      <button class="cat-btn active" data-cat="karya-tulis" onclick="filterCat(this)">
        <span class="cat-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
    <polyline points="14 2 14 8 20 8"/>
    <line x1="8" y1="13" x2="16" y2="13"/>
    <line x1="8" y1="17" x2="13" y2="17"/>
  </svg>
        </span>
        <span class="cat-label">Karya Tulis</span>
      </button>
      <button class="cat-btn" data-cat="bisnis" onclick="filterCat(this)">
        <span class="cat-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="12" y1="20" x2="12" y2="10"/>
          <line x1="18" y1="20" x2="18" y2="4"/>
          <line x1="6" y1="20" x2="6" y2="16"/>
        </svg>
        </span>
        <span class="cat-label">Bisnis</span>
      </button>
      <button class="cat-btn" data-cat="teknologi" onclick="filterCat(this)">
        <span class="cat-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="2" y="3" width="20" height="14" rx="2"/>
          <line x1="8" y1="21" x2="16" y2="21"/>
          <line x1="12" y1="17" x2="12" y2="21"/>
        </svg>
        </span>
        <span class="cat-label">Teknologi</span>
      </button>
      <button class="cat-btn" data-cat="desain" onclick="filterCat(this)">
        <span class="cat-icon">
           <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
       stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="13.5" cy="6.5" r=".5"/>
          <circle cx="17.5" cy="10.5" r=".5"/>
          <circle cx="8.5" cy="7.5" r=".5"/>
          <circle cx="6.5" cy="12.5" r=".5"/>
          <path d="M12 22a10 10 0 1 1 0-20c4 0 7 3 7 7 0 2-1 3-3 3h-2a2 2 0 0 0 0 4h1a3 3 0 0 1 0 6z"/>
        </svg>
        </span>
        <span class="cat-label">Desain</span>
      </button>
      <button class="cat-btn" data-cat="public-speaking" onclick="filterCat(this)">
        <span class="cat-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    
    <!-- kepala -->
    <circle cx="9" cy="8" r="3"/>

    <!-- badan -->
    <path d="M4 19c0-3 2.5-5 5-5s5 2 5 5"/>

    <!-- suara -->
    <path d="M17 8c1.5 1 1.5 3 0 4"/>
    <path d="M20 6c3 2 3 6 0 8"/>
    
  </svg>
        </span>
        <span class="cat-label">Public Speaking</span>
      </button>
      <button class="cat-btn" data-cat="engineering" onclick="filterCat(this)">
        <span class="cat-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    
    <circle cx="12" cy="12" r="3"/>

    <path d="M12 2v3"/>
    <path d="M12 19v3"/>

    <path d="M2 12h3"/>
    <path d="M19 12h3"/>

    <path d="M5 5l2 2"/>
    <path d="M17 17l2 2"/>

    <path d="M5 19l2-2"/>
    <path d="M17 7l2-2"/>

  </svg>
        </span>
        <span class="cat-label">Engineering</span>
      </button>
    </div>

    <!-- Partner List -->
    <div class="partner-list" id="partnerList">

      <div class="partner-card" data-cat="karya-tulis" data-name="Elias D Alger"
           onclick="openProfile('Elias D Alger','Sastra Indonesia','Esai','Puisi, Cerpen, Esai',3,'ed','karya-tulis')">
        <div class="card-photo-placeholder" style="background:linear-gradient(135deg,#8B6914,#C4A84A);">ED</div>
        <div class="card-info">
          <div class="card-name">Nama: Elias D Alger</div>
          <div class="card-row">Jurusan: <span>Sastra Indonesia</span></div>
          <div class="card-row">Minat Bidang: <span>Esai</span></div>
          <div class="card-row">Keahlian: <span>Puisi, Cerpen, Esai</span></div>
          <div class="card-stars">★★★</div>
        </div>
      </div>

      <div class="partner-card" data-cat="desain teknologi" data-name="Jeniffer Lopez"
           onclick="openProfile('Jeniffer Lopez','Informatika','UI/UX','Desain, Coding Website',5,'jl','desain')">
        <div class="card-photo-placeholder" style="background:linear-gradient(135deg,#2d4a8a,#1A2E5A);">JL</div>
        <div class="card-info">
          <div class="card-name">Nama: Jeniffer Lopez</div>
          <div class="card-row">Jurusan: <span>Informatika</span></div>
          <div class="card-row">Minat Bidang: <span>UI/UX</span></div>
          <div class="card-row">Keahlian: <span>Desain, Coding Website</span></div>
          <div class="card-stars">★★★★★</div>
        </div>
      </div>

      <div class="partner-card" data-cat="bisnis" data-name="Mira Mirai"
           onclick="openProfile('Mira Mirai','Akuntansi','Bisnis','Business Plan, Counting',4.5,'mm','bisnis')">
        <div class="card-photo-placeholder" style="background:linear-gradient(135deg,#9b3a6e,#c9547a);">MM</div>
        <div class="card-info">
          <div class="card-name">Nama: Mira Mirai</div>
          <div class="card-row">Jurusan: <span>Akuntansi</span></div>
          <div class="card-row">Minat Bidang: <span>Bisnis</span></div>
          <div class="card-row">Keahlian: <span>Business Plan, Counting</span></div>
          <div class="card-stars">★★★★<span class="half">★</span></div>
        </div>
      </div>

      <div class="partner-card" data-cat="desain" data-name="Hoshina Hoshi"
           onclick="openProfile('Hoshina Hoshi','Animasi','Short Animation','Desain, Membuat Animasi',4,'hh','desain')">
        <div class="card-photo-placeholder" style="background:linear-gradient(135deg,#1a1a2e,#444488);">HH</div>
        <div class="card-info">
          <div class="card-name">Nama: Hoshina Hoshi</div>
          <div class="card-row">Jurusan: <span>Animasi</span></div>
          <div class="card-row">Minat Bidang: <span>Short Animation</span></div>
          <div class="card-row">Keahlian: <span>Desain, Membuat Animasi</span></div>
          <div class="card-stars">★★★★</div>
        </div>
      </div>

      <div class="partner-card" data-cat="public-speaking" data-name="Columbina Moore"
           onclick="openProfile('Columbina Moore','Bahasa Inggris','Debat Bahasa Inggris','Debat, Public Speaking',2,'cm','public-speaking')">
        <div class="card-photo-placeholder" style="background:linear-gradient(135deg,#2e7d32,#66bb6a);">CM</div>
        <div class="card-info">
          <div class="card-name">Nama: Columbina Moore</div>
          <div class="card-row">Jurusan: <span>Bahasa Inggris</span></div>
          <div class="card-row">Minat Bidang: <span>Debat Bahasa Inggris</span></div>
          <div class="card-row">Keahlian: <span>Debat, Public Speaking</span></div>
          <div class="card-stars">★★</div>
        </div>
      </div>

    </div>

    <div class="no-result" id="noResult">
      <span class="emoji">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
       stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <circle cx="11" cy="11" r="8"/>
    <line x1="21" y1="21" x2="16.65" y2="16.65"/>
  </svg>
      </span>
      Tidak ada partner yang ditemukan
    </div>

  </main>
</div>

<!-- PROFILE MODAL -->
<div class="modal-overlay" id="modalOverlay" onclick="closeOnOverlay(event)">
  <div class="profile-modal" id="profileModal">
    <div class="modal-top">
      <button class="modal-close" onclick="closeModal()">✕</button>
      <div class="modal-name" id="modalName">Jeniffer Lopez 🏅</div>
      <div class="modal-avatar" id="modalAvatar">JL</div>
      <div class="modal-stars" id="modalStars">★★★★★</div>
      <div class="modal-actions">
        <button class="btn-follow">Follow</button>
        <button class="btn-message">  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
       stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <line x1="22" y1="2" x2="11" y2="13"/>
    <polygon points="22 2 15 22 11 13 2 9 22 2"/>
  </svg>Kirim Pesan</button>
      </div>
    </div>
    <div class="modal-body">
      <p class="modal-bio" id="modalBio">
        Hii, saya adalah mahasiswa aktif Universitas Sultan Ageng Tirtayasa yang passionate di bidang UI/UX Design. Saya berasal dari Fakultas Teknik dan Jurusan Informatika. Saya percaya bahwa desain yang baik bukan hanya soal estetika, tapi juga tentang bagaimana pengguna merasakan pengalaman yang mudah dan menyenangkan. Saya aktif mengikuti kompetisi teknologi dan desain sebagai cara untuk mengasah skill sekaligus memperluas jaringan. Saat ini saya sedang mendalami design thinking, prototyping di Figma, dan riset pengguna.
      </p>

      <div class="tag-row" id="modalTags">
        <span class="tag">UI/UX</span>
        <span class="tag">Informatika</span>
        <span class="tag">Teknik</span>
        <span class="tag">Figma</span>
        <span class="tag">Desain</span>
        <span class="tag">Coding</span>
        <span class="tag">Website</span>
        <span class="tag">Mobile</span>
        <span class="tag avail">Available</span>
      </div>

      <div class="section-title">🏅 Pencapaian 🏅</div>
      <div class="cert-grid">
        <div class="cert-card gold-cert">
          <div class="cert-label">Sertifikat</div>
          <div class="cert-name" id="certName1">Jeniffer Lopez</div>
        </div>
        <div class="cert-card dark-cert">
          <div class="cert-label">Sertifikat Penghargaan</div>
          <div class="cert-name" id="certName2">Jeniffer Lopez</div>
        </div>
        <div class="cert-card full" style="background:linear-gradient(135deg,#2d1a00,#8B5E2A); border-color:#8B5E2A; flex-direction:column; gap:4px;">
          <div class="cert-label" style="color:rgba(255,255,255,0.6);">Sertifikat</div>
          <div class="cert-name" style="color:var(--gold);" id="certName3">Juara Pertama</div>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
  // Profile chip dropdown
  const chip = document.getElementById('profileChip');
  chip.addEventListener('click', e => { e.stopPropagation(); chip.classList.toggle('open'); });
  document.addEventListener('click', () => chip.classList.remove('open'));

  // Partner data
  const partners = [
    { name:'Elias D Alger', jurusan:'Sastra Indonesia', minat:'Esai', keahlian:'Puisi, Cerpen, Esai', stars:3, init:'ED', cat:'karya-tulis',
      bio:'Saya Elias, mahasiswa Sastra Indonesia Untirta yang aktif menulis esai dan cerpen. Saya sering mengikuti lomba karya tulis ilmiah dan sastra tingkat nasional.',
      tags:['Esai','Cerpen','Puisi','Sastra','Karya Tulis'], avail:true },
    { name:'Jeniffer Lopez', jurusan:'Informatika', minat:'UI/UX', keahlian:'Desain, Coding Website', stars:5, init:'JL', cat:'desain',
      bio:'Hii, saya adalah mahasiswa aktif Universitas Sultan Ageng Tirtayasa yang passionate di bidang UI/UX Design. Saya berasal dari Fakultas Teknik dan Jurusan Informatika. Saya percaya bahwa desain yang baik bukan hanya soal estetika, tapi juga tentang bagaimana pengguna merasakan pengalaman yang mudah dan menyenangkan.',
      tags:['UI/UX','Informatika','Teknik','Figma','Desain','Coding','Website','Mobile','Available'], avail:true },
    { name:'Mira Mirai', jurusan:'Akuntansi', minat:'Bisnis', keahlian:'Business Plan, Counting', stars:4.5, init:'MM', cat:'bisnis',
      bio:'Saya Mira, mahasiswa Akuntansi yang tertarik di bidang bisnis dan kewirausahaan. Saya berpengalaman menyusun business plan dan analisis keuangan untuk kompetisi.',
      tags:['Bisnis','Akuntansi','Business Plan','Keuangan','Startup'], avail:false },
    { name:'Hoshina Hoshi', jurusan:'Animasi', minat:'Short Animation', keahlian:'Desain, Membuat Animasi', stars:4, init:'HH', cat:'desain',
      bio:'Saya Hoshina, mahasiswa Animasi yang fokus pada pembuatan short animation dan motion graphic. Aktif mengikuti kompetisi kreatif dan desain visual.',
      tags:['Animasi','Motion Graphic','After Effects','Desain','Kreatif'], avail:true },
    { name:'Columbina Moore', jurusan:'Bahasa Inggris', minat:'Debat Bahasa Inggris', keahlian:'Debat, Public Speaking', stars:2, init:'CM', cat:'public-speaking',
      bio:'Saya Columbina, mahasiswa Bahasa Inggris yang aktif dalam organisasi debat kampus. Saya senang berlatih public speaking dan argumentasi dalam Bahasa Inggris.',
      tags:['Debat','Public Speaking','Bahasa Inggris','Komunikasi'], avail:true },
  ];

  let activeCat = 'karya-tulis';

  function starsHTML(n) {
    let h = '';
    for(let i=1;i<=5;i++) {
      if(i <= Math.floor(n)) h += '★';
      else if(i === Math.ceil(n) && n % 1 !== 0) h += '<span class="half">★</span>';
      else h += '<span style="color:var(--gray-200)">★</span>';
    }
    return h;
  }

  // Render list dynamically
  function renderList(filteredNames) {
    const list = document.getElementById('partnerList');
    list.innerHTML = '';
    const noResult = document.getElementById('noResult');

    const toShow = filteredNames
      ? partners.filter(p => filteredNames.includes(p.name))
      : partners;

    if(toShow.length === 0) {
      noResult.style.display = 'block';
      return;
    }
    noResult.style.display = 'none';

    toShow.forEach(p => {
      const colors = {
        'ED': 'linear-gradient(135deg,#8B6914,#C4A84A)',
        'JL': 'linear-gradient(135deg,#2d4a8a,#1A2E5A)',
        'MM': 'linear-gradient(135deg,#9b3a6e,#c9547a)',
        'HH': 'linear-gradient(135deg,#1a1a2e,#444488)',
        'CM': 'linear-gradient(135deg,#2e7d32,#66bb6a)',
      };
      const div = document.createElement('div');
      div.className = 'partner-card';
      div.onclick = () => openProfileObj(p);
      div.innerHTML = `
        <div class="card-photo-placeholder" style="background:${colors[p.init]||'var(--navy)'};">${p.init}</div>
        <div class="card-info">
          <div class="card-name">Nama: ${p.name}</div>
          <div class="card-row">Jurusan: <span>${p.jurusan}</span></div>
          <div class="card-row">Minat Bidang: <span>${p.minat}</span></div>
          <div class="card-row">Keahlian: <span>${p.keahlian}</span></div>
          <div class="card-stars">${starsHTML(p.stars)}</div>
        </div>`;
      list.appendChild(div);
    });
  }

  function filterCat(el) {
    document.querySelectorAll('.cat-btn').forEach(b => b.classList.remove('active'));
    el.classList.add('active');
    activeCat = el.dataset.cat;
    applyFilters();
  }

  function applyFilters() {
    const q = document.getElementById('searchInput').value.trim().toLowerCase();
    let filtered = partners;
    if(activeCat !== 'semua') {
      filtered = filtered.filter(p => p.cat.includes(activeCat));
    }
    if(q) {
      filtered = filtered.filter(p => p.name.toLowerCase().includes(q));
    }
    renderList(filtered.map(p=>p.name));
  }

  document.getElementById('searchInput').addEventListener('input', applyFilters);

  function openProfileObj(p) {
    document.getElementById('modalName').innerHTML = p.name + ' 🏅';
    document.getElementById('modalAvatar').textContent = p.init;
    document.getElementById('modalAvatar').style.background = getColor(p.init);
    document.getElementById('modalStars').innerHTML = starsHTML(p.stars);
    document.getElementById('modalBio').textContent = p.bio;

    const tagRow = document.getElementById('modalTags');
    tagRow.innerHTML = '';
    p.tags.forEach(t => {
      const span = document.createElement('span');
      span.className = 'tag' + (t==='Available'?' avail':'');
      span.textContent = t;
      tagRow.appendChild(span);
    });

    document.getElementById('certName1').textContent = p.name;
    document.getElementById('certName2').textContent = p.name;
    document.getElementById('certName3').textContent = 'Juara Pertama';

    document.getElementById('modalOverlay').classList.add('open');
    document.body.style.overflow = 'hidden';
  }

  function getColor(init) {
    const m = {'ED':'linear-gradient(135deg,#8B6914,#C4A84A)','JL':'linear-gradient(135deg,#2d4a8a,#1A2E5A)',
      'MM':'linear-gradient(135deg,#9b3a6e,#c9547a)','HH':'linear-gradient(135deg,#1a1a2e,#444488)',
      'CM':'linear-gradient(135deg,#2e7d32,#66bb6a)'};
    return m[init] || 'linear-gradient(135deg,var(--gold),var(--navy))';
  }

  function closeModal() {
    document.getElementById('modalOverlay').classList.remove('open');
    document.body.style.overflow = '';
  }
  function closeOnOverlay(e) {
    if(e.target === document.getElementById('modalOverlay')) closeModal();
  }

  // Initial render
  applyFilters();
</script>
</body>
</html>
