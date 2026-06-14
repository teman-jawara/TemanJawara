<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pesan – TemanJawara</title>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="{{ asset('css/style8.css') }}"/>
</head>
<body>

<!-- ── ICON RAIL ── -->
<nav class="icon-rail">
  <a href="{{ route('homepage') }}" class="rail-icon" title="Halaman Utama">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
  </a>
<a href="{{ route('partner') }}" class="rail-icon" title="Cari Partner">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
  </a>
  <a href="{{ route('postpage') }}" class="rail-icon" title="Posting">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
  </a>
  <a href="{{ route('profile') }}" class="rail-icon" title="Profil">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
  </a>
  <a href="{{ route('message') }}" class="rail-icon active" title="Pesan">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
  </a>
  <div style="flex:1"></div>
  <div class="rail-icon" title="Menu">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
  </div>
</nav>

<!-- ── CONTACT LIST ── -->
<div class="list-panel">
  <div class="list-header">
    <div class="list-avatar">
        <img src="{{ asset('image/angel.jpg') }}" alt="Avatar" class="c-avatar"/>
    </div>
    <div class="list-header-name">{{ Auth::user()->name }} 🏅</div>
  </div>
  <div class="search-wrap">
    <div class="search-box">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
      <input type="text" placeholder="Search" id="searchInput" oninput="filterContacts()"/>
    </div>
  </div>
  <div class="list-label">Pesan</div>
  <div class="contacts" id="contactList"></div>
</div>

<!-- ── CHAT PANEL ── -->
<div class="chat-panel" id="chatPanel">
  <div class="empty-chat" id="emptyState">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
    <p>Pilih percakapan untuk mulai chat</p>
  </div>
</div>

<script>
/* ══════════════════════════════════════
   DATA
══════════════════════════════════════ */
const ME = '{{ Auth::user()->name }}';

const contacts = [
  {
    id: 1, name: 'Asep Morgan', photo: "{{ asset('image/asep.jpg') }}", badge: true, time: '1 jam',
    preview: 'CONGRATSS NGEL, next gas hackat...',
    status: 'Aktif 30 menit lalu',
    messages: [
      { from: 'them', text: 'so how about the result ngel?', time: '09.00' },
      { from: 'me',   text: 'belum tauu, ini lagi nunggu hasilnya', time: '09.30' },
      { from: 'them', text: 'CONGRATSS NGEL, next gas hackathon bareng yuk', time: '10.10' },
      
    ]
  },
  {
    id: 2, name: 'Ivee Clarissa', photo: "{{ asset('image/ivee.jpg') }}", badge: true, time: '2 jam',
    preview: 'You: beuh cakep banget , otw jadi preman gemastik 🤯😏😋',
    status: 'Aktif 1 jam lalu',
    messages: [
      { from: 'them', text: 'ngel, project gemastik udah acc?', time: '09.00' },
      { from: 'me',   text: 'wait belum gue review', time: '09.02' },
      { from: 'them', text: 'ini nii', time: '09.05' },
      { from: 'them', image: "{{ asset('image/project.png') }}", time: '09.05' },
      { from: 'them', text: 'aneh ga warnanya?', time: '09.06' },
      { from: 'me',   text: 'beuh cakep banget , otw jadi preman gemastik 🤯😏😋', time: '09.10' },
    ]
  },
  {
    id: 3, name: 'Jeje Monica', photo: "{{ asset('image/jeje.jpg') }}", badge: true, time: '3 jam',
    preview: 'You: wkwk, oh iya prototypenya uda...',
    status: 'Aktif 3 jam yang lalu',
    messages: [
      { from: 'me',   text: 'Diskusi kapan lagi nih?', time: '11.00' },
      { from: 'me',   text: 'Besok gas, balik kelas', time: '13.00' },
      { from: 'them', text: 'Gaskan, oiya ini fitur ngecek presentase buaya maksudnya gimana dah?', time: '14.00' },
      { from: 'me',   text: 'WKWK itu fitur fun aja sih 😅\nJadi sistem analisis pola percakapan dan beberapa indikator tertentu, terus ngeluarin skor persentase sebagai gambaran seberapa besar kemungkinan seseorang punya red flag atau "modus". Bukan hasil yang absolut ya, lebih ke insight yang seru buat pengguna.', time: '14.30' },
      { from: 'them', text: 'YAAMPUN ADA ADA AJA IDE LO NGEL 😭😭😭😭😭', time: '14.35' },
      { from: 'me',   text: 'wkwk 😅, oh iya prototype udah gua kirim ya, coba di cek dulu takut ada yang mau lu tambahin', time: '15.00' },
    ]
  },
  {
    id: 4, name: 'Rizky Daumar', photo: "{{ asset('image/rizky.jpg') }}", badge: true, time: '3 jam',
    preview: 'hmm slogannya ketipisan itu fontnya, coba di bold lagi',
    status: 'Aktif 2 jam lalu',
    messages: [
      { from: 'me',   text: 'bang landing page aman ga?', time: '12.02' },
      { from: 'me',   image: "{{ asset('image/landing.png') }}", time: '12.02' },
      { from: 'them', text: 'hmm slogannya ketipisan itu fontnya, coba di bold lagi', time: '12.05' },
    ]
  },
  {
    id: 5, name: 'Hanum Bening Sari', photo: "{{ asset('image/hanum.jpg') }}", badge: true, time: '3 jam',
    preview: 'hi kak! aku butuh ui ux designer nih...',
    status: 'Aktif 3 jam lalu',
    messages: [
      { from: 'them', text: 'hi kak! aku butuh ui ux designer nih buat project lomba, kak angel mau gak?', time: '11.30' },
    ]
  },
  {
    id: 6, name: 'Larasati Indah', photo: "{{ asset('image/larasati.jpg') }}", badge: false, time: '3 jam',
    preview: 'sure angel, mau kapan kita diskusi...',
    status: 'Aktif 1 jam lalu',
    messages: [
      { from: 'me',   text: 'laras kita diskusi kapan nih soal proposal?', time: '10.45' },
      { from: 'them', text: 'sure angel, mau kapan kita diskusi? besok bisa aku', time: '10.50' },
    ]
  },
  {
    id: 7, name: 'Gerald Buwono', photo: "{{ asset('image/gerald.jpg') }}", badge: true, time: '4 jam',
    preview: 'hi! need ui ux designer nih, want to...',
    status: 'Aktif 4 jam lalu',
    messages: [
      { from: 'them', text: 'hi! need ui ux designer nih, want to collaborate?', time: '09.45' },
    ]
  },
];

let activeId = 3; // default open: Jeje Monica

/* ══════════════════════════════════════
   RENDER CONTACT LIST
══════════════════════════════════════ */
function renderContacts(filter = '') {
  const list = document.getElementById('contactList');
  list.innerHTML = '';
  const avatarColors = [
    'linear-gradient(135deg,#a8edea,#fed6e3)',
    'linear-gradient(135deg,#f093fb,#f5576c)',
    'linear-gradient(135deg,#4facfe,#00f2fe)',
    'linear-gradient(135deg,#43e97b,#38f9d7)',
    'linear-gradient(135deg,#fa709a,#fee140)',
    'linear-gradient(135deg,#a18cd1,#fbc2eb)',
    'linear-gradient(135deg,#fccb90,#d57eeb)',
  ];
  contacts
    .filter(c => c.name.toLowerCase().includes(filter.toLowerCase()))
    .forEach((c, i) => {
      const div = document.createElement('div');
      div.className = 'contact' + (c.id === activeId ? ' active' : '');
      div.dataset.id = c.id;
      div.innerHTML = `
        <div class="c-avatar">
          <img src="${c.photo}" alt="${c.name}">
        </div>
        <div class="c-info">
          <div class="c-name">${c.name}${c.badge ? ' 🏅' : ''}</div>
          <div class="c-preview">${c.preview}</div>
        </div>
        <div class="c-meta">
          <span class="c-time">${c.time}</span>
          ${c.badge ? '<div class="c-dot"></div>' : ''}
        </div>`;
      div.addEventListener('click', () => openChat(c.id));
      list.appendChild(div);
    });
}

function filterContacts() {
  renderContacts(document.getElementById('searchInput').value);
}

/* ══════════════════════════════════════
   OPEN CHAT
══════════════════════════════════════ */
function openChat(id) {
  activeId = id;
  renderContacts(document.getElementById('searchInput').value);

  const c = contacts.find(x => x.id === id);
  const panel = document.getElementById('chatPanel');

  panel.innerHTML = `
    <div class="chat-header">
      <div class="chat-header-avatar">
        <img src="${c.photo}" alt="${c.name}" class="c-avatar"/>
      </div>
      <div class="chat-header-info">
        <h3>${c.name}${c.badge ? ' 🏅' : ''}</h3>
        <span>${c.status}</span>
      </div>
    </div>
    <div class="messages" id="msgList">
      <div class="date-divider"><span>Hari ini</span></div>
      ${c.messages.map(m => renderBubble(m)).join('')}
      <div class="typing-indicator" id="typingIndicator">
        <div class="typing-dot"></div>
        <div class="typing-dot"></div>
        <div class="typing-dot"></div>
      </div>
    </div>
    <div class="input-bar">
      <div class="input-wrap">
        <textarea id="msgInput" rows="1" placeholder="Tulis pesan..." onkeydown="handleKey(event)" oninput="autoResize(this)"></textarea>
      </div>
      <button class="btn-send" onclick="sendMessage()" title="Kirim">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
      </button>
    </div>`;

  scrollToBottom();
  document.getElementById('msgInput').focus();
}

function renderBubble(m) {
  const dir = m.from === 'me' ? 'out' : 'in';

  return `
  <div class="msg-row ${dir}">
    <div class="bubble">

      ${m.text ? m.text.replace(/\n/g,'<br>') : ''}

      ${m.image ? `
        <img src="${m.image}" class="chat-image">
      ` : ''}

      <span class="msg-time">${m.time}</span>
    </div>
  </div>`;
}

/* ══════════════════════════════════════
   SEND MESSAGE
══════════════════════════════════════ */
function sendMessage() {
  const input = document.getElementById('msgInput');
  const text  = input.value.trim();
  if (!text) return;

  const now = new Date();
  const time = now.getHours().toString().padStart(2,'0') + '.' + now.getMinutes().toString().padStart(2,'0');

  // Add to data
  const c = contacts.find(x => x.id === activeId);
  const msg = { from: 'me', text, time };
  c.messages.push(msg);
  c.preview = 'You: ' + text.slice(0, 28) + (text.length > 28 ? '...' : '');
  c.time = 'baru saja';

  // Render bubble
  const list = document.getElementById('msgList');
  const typing = document.getElementById('typingIndicator');
  const div = document.createElement('div');
  div.innerHTML = renderBubble(msg);
  list.insertBefore(div.firstElementChild, typing);

  input.value = '';
  input.style.height = 'auto';
  scrollToBottom();
  renderContacts(document.getElementById('searchInput').value);

  // Simulate reply after delay
  simulateReply(c, typing, list, time);
}

function simulateReply(c, typingEl, list, sentTime) {
  typingEl.classList.add('show');
  scrollToBottom();

  const replies = [
    'Siap ngel! 😄', 'Wah oke banget tuh!', 'Haha iya bener juga',
    'Noted! Makasih ya', 'Ooh gitu, oke deh', 'Gas gas gas! 💪',
    'Wkwk iya bener', 'Hmm oke aku coba dulu', 'Keren banget idenya!',
    'Aku pikirin dulu ya hehe', 'Sure, besok kita diskusi lagi!',
  ];
  const replyText = replies[Math.floor(Math.random() * replies.length)];
  const delay = 1200 + Math.random() * 1000;

  setTimeout(() => {
    typingEl.classList.remove('show');
    const now = new Date();
    const time = now.getHours().toString().padStart(2,'0') + '.' + now.getMinutes().toString().padStart(2,'0');
    const msg = { from: 'them', text: replyText, time };
    c.messages.push(msg);
    c.preview = replyText.slice(0, 30) + (replyText.length > 30 ? '...' : '');
    c.time = 'baru saja';

    const div = document.createElement('div');
    div.innerHTML = renderBubble(msg);
    list.insertBefore(div.firstElementChild, typingEl);
    scrollToBottom();
    renderContacts(document.getElementById('searchInput').value);
  }, delay);
}

/* ══════════════════════════════════════
   UTILS
══════════════════════════════════════ */
function handleKey(e) {
  if (e.key === 'Enter' && !e.shiftKey) { e.preventDefault(); sendMessage(); }
}
function autoResize(el) {
  el.style.height = 'auto';
  el.style.height = Math.min(el.scrollHeight, 120) + 'px';
}
function scrollToBottom() {
  const list = document.getElementById('msgList');
  if (list) list.scrollTop = list.scrollHeight;
}

/* ══════════════════════════════════════
   INIT
══════════════════════════════════════ */
renderContacts();
openChat(3);
console.log(contacts);
</script>
</body>
</html>
