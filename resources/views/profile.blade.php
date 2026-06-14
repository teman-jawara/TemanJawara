<!DOCTYPE html>
<html lang="id">
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Profil Saya – TemanJawara</title>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="{{ asset('css/style7.css') }}"/>
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

<div class="layout">
<!-- SIDEBAR -->
  <div class="sidebar-col">
    <nav class="sidebar">
      <a class="nav-item " href="{{route('homepage')}}">
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
  <a class="nav-item active" href="{{ route('profile') }}">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
    Profil Saya
  </a>
  <a class="nav-item" href="{{ route('message') }}">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
    Pesan
      </a>
    </nav>
</div>

<!-- MAIN CONTENT -->
<main class="main">
  <h1 class="page-title">Profil Saya</h1>

  <!-- Card: Identitas -->
  <div class="card">
    <div class="profile-header">
      <div class="avatar-wrap">
        <div class="avatar">
          <img src="{{ asset('image/angel.jpg') }}" alt="Avatar {{ Auth::user()->name }}" class="avatar">
        </div>
        <div class="avatar-cam">
        <div class="avatar-plus">+</div>
        </div>
      </div>
      <div class="profile-info">
        <h2 id="displayNama">{{ Auth::user()->name }}</h2>
        <p class="tagline" id="displayTagline">{{ Auth::user()->tagline ?? 'Belum ada tagline' }}</p>
        <span class="badge">🏅 Langganan Juwara</span>
      </div>
      <button class="btn-edit">Edit <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">

    <path d="M12 20h9"/>
    <path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L7 19l-4 1 1-4 12.5-12.5z"/>

  </svg></button>
    </div>
  </div>

  <!-- Card: Seputar Saya -->
  <div class="card">
    <p class="card-title">Seputar Saya</p>
    <div class="about-text" id="aboutText">
      {{ Auth::user()->bio ?? 'Belum ada bio' }}
    </div>
    <button class="btn-edit-full">Edit</button>
  </div>

  <!-- Card: Pencapaian -->
  <div class="card">
    <p class="card-title">Pencapaian Saya</p>
    <div class="certs">

      @foreach(Auth::user()->achievements as $achievement)

<div class="cert-card {{ $achievement->style == 'dark' ? 'cert-2' : 'cert-1' }}">
    <div class="cert-label">
        🏆 Sertifikat Penghargaan
    </div>

    <div class="cert-title">
        {{ Auth::user()->name }}
    </div>

    <div class="cert-sub">
        {{ $achievement->title }}

        @if($achievement->description)
            <br>
            {{ $achievement->description }}
        @endif
    </div>
</div>

@endforeach

      <!-- Tambah -->
      <div class="cert-add" title="Tambah pencapaian">
        <div class="cert-add-icon ">
          <div class="avatar-plus">+</div>
        </div>
      </div>

    </div>
  </div>

  <!-- Card: Minat -->
<div class="card">
    <p class="card-title">Minat Saya</p>

    <div class="tags">

        @foreach(Auth::user()->interests as $interest)

        <span class="tag">
            {{ $interest->name }}
            <span class="remove">✕</span>
        </span>

        @endforeach

        <button class="tag-add">＋ Add Tag</button>

    </div>
</div>

</main>

<!-- ── MODAL: Edit Nama & Tagline ── -->
<div class="modal-overlay" id="modalNama">
  <div class="modal">
    <h3>Edit Identitas</h3>
    <label>Nama Lengkap</label>
    <input type="text" id="inputNama" placeholder="Nama lengkap kamu"/>
    <label>Tagline</label>
    <input type="text" id="inputTagline" placeholder="Misal: UI/UX Enthusiast | Kompetisi Teknologi"/>
    <div class="modal-actions">
      <button class="btn-cancel" onclick="closeModal('modalNama')">Batal</button>
      <button class="btn-save" onclick="saveNama()">Simpan</button>
    </div>
  </div>
</div>

<!-- ── MODAL: Edit Seputar Saya ── -->
<div class="modal-overlay" id="modalAbout">
  <div class="modal">
    <h3>Edit Seputar Saya</h3>
    <label>Bio</label>
    <textarea id="inputAbout" rows="6" placeholder="Ceritakan tentang diri kamu..."></textarea>
    <div class="modal-actions">
      <button class="btn-cancel" onclick="closeModal('modalAbout')">Batal</button>
      <button class="btn-save" onclick="saveAbout()">Simpan</button>
    </div>
  </div>
</div>

<!-- ── MODAL: Tambah Pencapaian ── -->
<div class="modal-overlay" id="modalCert">
  <div class="modal">
<form method="POST" action="{{ route('achievement.store') }}">
  @csrf

  <h3>Tambah Pencapaian</h3>

  <label>Gaya Sertifikat</label>

  <div class="style-picker">
    <div class="style-opt opt-gold selected"
         data-style="gold"
         onclick="pickStyle(this)">
      Terang
    </div>

    <div class="style-opt opt-dark"
         data-style="dark"
         onclick="pickStyle(this)">
      Gelap
    </div>
  </div>

  <input type="hidden" name="style" id="styleInput" value="gold">

  <div class="cert-modal-preview style-gold" id="certPreview">
    <div class="cert-label" id="prevLabel">
      SERTIFIKAT PENGHARGAAN
    </div>

    <div class="cert-title" id="prevName">
      Nama Kamu
    </div>

    <div class="cert-sub" id="prevDesc">
      Keterangan pencapaian
    </div>
  </div>

  <label>Nama pada Sertifikat</label>

  <input
      type="text"
      id="certName"
      placeholder="Nama kamu"
      oninput="updatePreview()"
  >

  <label>Judul / Keterangan</label>

  <input
      type="text"
      name="title"
      id="certDesc"
      placeholder="Misal: Juara 1 Hackathon Nasional 2025"
      oninput="updatePreview()"
  >

  <label>Deskripsi</label>

  <input
      type="text"
      name="description"
      placeholder="Deskripsi tambahan"
  >

  <div class="modal-actions">
    <button
        type="button"
        class="btn-cancel"
        onclick="closeModal('modalCert')">
      Batal
    </button>

    <button type="submit" class="btn-save">
      Tambahkan
    </button>
  </div>

</form>

  </div>
</div>

  </div>
</div>

<!-- ── MODAL: Tambah Minat ── -->
<div class="modal-overlay" id="modalTag">
  <div class="modal">

    <form method="POST" action="{{ route('interest.store') }}">
      @csrf

      <h3>Tambah Minat</h3>

      <label>Minat / Keahlian</label>

      <input
          type="text"
          name="name"
          id="inputTag"
          placeholder="Misal: Data Science"
      />

      <div class="modal-actions">

        <button
            type="button"
            class="btn-cancel"
            onclick="closeModal('modalTag')">
          Batal
        </button>

        <button type="submit" class="btn-save">
          Tambahkan
        </button>

      </div>

    </form>

  </div>
</div> <!-- end of layout -->

<script>
  /* ── HELPERS ── */
  function openModal(id)  { document.getElementById(id).classList.add('open'); }
  function closeModal(id) { document.getElementById(id).classList.remove('open'); }
  document.querySelectorAll('.modal-overlay').forEach(o => {
    o.addEventListener('click', e => { if (e.target === o) o.classList.remove('open'); });
  });

  /* ── NAMA & TAGLINE ── */
  document.querySelector('.btn-edit').addEventListener('click', () => {
    document.getElementById('inputNama').value    = document.getElementById('displayNama').textContent.trim();
    document.getElementById('inputTagline').value = document.getElementById('displayTagline').textContent.trim();
    openModal('modalNama');
  });
  async function saveNama() {

    const n = document.getElementById('inputNama').value.trim();
    const t = document.getElementById('inputTagline').value.trim();

    const response = await fetch('/profile/update', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document
                .querySelector('meta[name="csrf-token"]')
                .content
        },
        body: JSON.stringify({
            name: n,
            tagline: t,
            bio: document.getElementById('aboutText').textContent
        })
    });

    const data = await response.json();

    if(data.success){
        location.reload();
    }
}

  /* ── SEPUTAR SAYA ── */
  document.querySelector('.btn-edit-full').addEventListener('click', () => {
    document.getElementById('inputAbout').value = document.getElementById('aboutText').textContent.trim();
    openModal('modalAbout');
  });
  async function saveAbout() {

    const bio = document.getElementById('inputAbout').value.trim();

    const response = await fetch('/profile/update', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document
                .querySelector('meta[name="csrf-token"]')
                .content
        },
        body: JSON.stringify({
            name: document.getElementById('displayNama').textContent,
            tagline: document.getElementById('displayTagline').textContent,
            bio: bio
        })
    });

    const data = await response.json();

    if(data.success){
        location.reload();
    }
}

  /* ── PENCAPAIAN ── */
  let certStyle = 'gold';
  function pickStyle(el) {

  document.querySelectorAll('.style-opt')
    .forEach(o => o.classList.remove('selected'));

  el.classList.add('selected');

  certStyle = el.dataset.style;

  document.getElementById('styleInput').value = certStyle;

  document.getElementById('certPreview').className =
      'cert-modal-preview style-' + certStyle;
}
  function updatePreview() {
    document.getElementById('prevName').textContent = document.getElementById('certName').value || 'Nama Kamu';
    document.getElementById('prevDesc').textContent = document.getElementById('certDesc').value || 'Keterangan pencapaian';
  }
  document.querySelector('.cert-add').addEventListener('click', () => {
    document.getElementById('certName').value = '';
    document.getElementById('certDesc').value = '';
    updatePreview();
    openModal('modalCert');
  });
  // function saveCert() {
  //   const name = document.getElementById('certName').value.trim();
  //   const desc = document.getElementById('certDesc').value.trim();
  //   if (!name && !desc) { closeModal('modalCert'); return; }
  //   const cls  = certStyle === 'dark' ? 'cert-2' : 'cert-1';
  //   const card = document.createElement('div');
  //   card.className = 'cert-card ' + cls;
  //   card.innerHTML = `
  //     <div class="cert-label">🏆 Sertifikat Penghargaan</div>
  //     <div class="cert-title">${name || 'Nama'}</div>
  //     <div class="cert-sub">${desc || ''}</div>
  //     <button class="cert-del" title="Hapus">✕</button>`;
  //   card.querySelector('.cert-del').addEventListener('click', e => { e.stopPropagation(); card.remove(); });
  //   document.querySelector('.cert-add').before(card);
  //   closeModal('modalCert');
  // }
  // Delete button on existing certs
  document.querySelectorAll('.cert-card').forEach(c => {
    const btn = document.createElement('button');
    btn.className = 'cert-del'; btn.title = 'Hapus'; btn.textContent = '✕';
    btn.addEventListener('click', e => { e.stopPropagation(); c.remove(); });
    c.appendChild(btn);
  });

  /* ── MINAT / TAG ── */
  function makeTag(label) {
    const tag = document.createElement('span');
    tag.className = 'tag';
    tag.innerHTML = `${label} <span class="remove">✕</span>`;
    tag.querySelector('.remove').addEventListener('click', () => tag.remove());
    return tag;
  }
  document.querySelectorAll('.tag .remove').forEach(btn => {
    btn.addEventListener('click', () => btn.closest('.tag').remove());
  });
  document.querySelector('.tag-add').addEventListener('click', () => {
    document.getElementById('inputTag').value = '';
    openModal('modalTag');
    setTimeout(() => document.getElementById('inputTag').focus(), 100);
  });
  // function saveTag() {
  //   const v = document.getElementById('inputTag').value.trim();
  //   if (!v) return;
  //   document.querySelector('.tag-add').before(makeTag(v));
  //   closeModal('modalTag');
  // }
</script>
</body>
</html>
