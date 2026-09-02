# 🤝 Contributing to TemanJawara

Terima kasih telah berkontribusi dalam pengembangan **TemanJawara**.

Dokumen ini berisi panduan dan aturan kontribusi yang perlu diikuti oleh seluruh anggota tim agar proses pengembangan berjalan lebih terstruktur dan branch utama tetap stabil.

---

# 🚨 Aturan Utama

- Jangan melakukan push langsung ke branch `master`.
- Semua perubahan harus dikerjakan melalui branch masing-masing.
- Setiap perubahan yang akan masuk ke `master` harus melalui Pull Request.
- Selalu update branch `master` sebelum mulai mengerjakan fitur.
- Jangan mengerjakan fitur yang sama dengan anggota lain tanpa koordinasi.
- Jangan mengubah atau menghapus kode anggota lain tanpa komunikasi.

Workflow yang digunakan:

```text
Update master
      ↓
Buat branch baru
      ↓
Kerjakan fitur
      ↓
Testing
      ↓
Commit
      ↓
Push
      ↓
Pull Request
      ↓
Review
      ↓
Merge ke master
```

---

# 🔄 Sebelum Mulai Mengerjakan

Pastikan branch `master` lokal sudah menggunakan versi terbaru.

```bash
git checkout master
git pull origin master
```

Setelah itu, buat branch baru untuk pekerjaan yang akan dilakukan.

> ⚠️ Jangan langsung mengerjakan fitur baru di branch `master`.

---

# 🌱 Membuat Branch

Buat branch baru:

```bash
git checkout -b feature/nama-fitur
```

Contoh:

```bash
git checkout -b feature/user-profile
```

---

# 📂 Aturan Penamaan Branch

## ✨ Fitur Baru

Format:

```text
feature/nama-fitur
```

Contoh:

```text
feature/user-profile
feature/team-management
feature/team-matching
feature/recommendation-system
```

## 🐛 Bug Fix

Format:

```text
fix/nama-bug
```

Contoh:

```text
fix/login-validation
fix/profile-update
```

## 🎨 UI

Format:

```text
ui/nama-halaman
```

Contoh:

```text
ui/profile-page
ui/dashboard-page
```

## 📝 Dokumentasi

Format:

```text
docs/nama-dokumentasi
```

Contoh:

```text
docs/update-readme
docs/add-contribution-guide
```

---

# 💻 Saat Mengerjakan

Selama mengerjakan fitur:

- Kerjakan fitur sesuai pembagian tugas.
- Jangan mengubah kode anggota lain tanpa komunikasi.
- Jangan menghapus kode tanpa mengetahui fungsinya.
- Hindari mengubah file yang tidak berhubungan dengan tugas.
- Pastikan perubahan tidak merusak fitur yang sudah berjalan.
- Jika menemukan bug pada fitur lain, informasikan kepada tim.
- Jika melakukan perubahan besar, komunikasikan terlebih dahulu.

---

# 🗄️ Perubahan Database

Jika pekerjaan membutuhkan perubahan pada database:

1. Buat migration baru.
2. Jangan mengubah migration lama yang sudah digunakan oleh anggota lain.
3. Jangan mengubah struktur database secara manual.
4. Informasikan perubahan database kepada anggota lain.

Contoh membuat migration:

```bash
php artisan make:migration create_teams_table
```

Kemudian jalankan:

```bash
php artisan migrate
```

> ⚠️ Gunakan migration untuk setiap perubahan struktur database.

---

# 🧪 Testing

Sebelum melakukan Pull Request, pastikan perubahan telah diuji.

Project TemanJawara menggunakan Laravel dan Vite.

Jalankan Laravel:

```bash
php artisan serve
```

Jalankan Vite:

```bash
npm run dev
```

Pastikan:

- Project dapat dijalankan.
- Halaman yang diubah dapat dibuka.
- Tidak ada error yang diketahui.
- CSS berjalan dengan benar.
- JavaScript berjalan dengan benar.
- Perubahan tidak merusak fitur lain.
- Migration berjalan dengan baik jika terdapat perubahan database.

---

# 💾 Commit Changes

Cek perubahan:

```bash
git status
```

Tambahkan perubahan:

```bash
git add .
```

Buat commit:

```bash
git commit -m "feat: add user profile"
```

---

# 📝 Commit Convention

Gunakan format:

```text
type: deskripsi perubahan
```

## ✨ Feature

```text
feat: add user profile
feat: add team matching
feat: add team search
```

## 🐛 Fix

```text
fix: resolve login validation
fix: correct profile update
```

## 🎨 Style / UI

```text
style: update profile page
style: improve dashboard layout
```

## 📝 Documentation

```text
docs: update readme
docs: add contribution guide
```

## ♻️ Refactor

```text
refactor: improve user controller
```

## 🚫 Hindari Commit Message Seperti

```text
update
fix
test
coba
wkwk
123
```

Gunakan deskripsi yang menjelaskan perubahan yang dilakukan.

---

# ⬆️ Push Branch

Push branch pertama kali:

```bash
git push -u origin nama-branch
```

Contoh:

```bash
git push -u origin feature/user-profile
```

Untuk push berikutnya pada branch yang sama:

```bash
git push
```

---

# 🔄 Update Branch Sebelum Pull Request

Sebelum membuat Pull Request, pastikan branch pekerjaan sudah menggunakan perubahan terbaru dari `master`.

Masuk ke branch `master`:

```bash
git checkout master
git pull origin master
```

Kembali ke branch pekerjaan:

```bash
git checkout feature/nama-fitur
```

Gabungkan perubahan terbaru dari `master`:

```bash
git merge master
```

Jika terdapat conflict, selesaikan conflict tersebut terlebih dahulu.

Setelah selesai:

```bash
git add .
git commit
git push
```

---

# 🔀 Pull Request

Setelah fitur selesai:

1. Pastikan fitur telah diuji.
2. Push branch ke GitHub.
3. Buka repository TemanJawara.
4. Klik **Compare & pull request**.
5. Pastikan base branch adalah `master`.
6. Isi judul Pull Request dengan jelas.
7. Jelaskan perubahan yang dilakukan.
8. Klik **Create pull request**.
9. Tunggu proses review.

Perubahan hanya boleh masuk ke `master` melalui Pull Request dan proses merge.

---

# 📋 Format Pull Request

Gunakan judul yang menjelaskan perubahan.

Contoh:

```text
feat: add user profile page
fix: resolve login validation
ui: improve dashboard layout
```

Gunakan deskripsi Pull Request seperti berikut:

```md
## Perubahan

- Menambahkan ...
- Memperbaiki ...
- Mengubah ...

## Testing

- [ ] Fitur telah diuji
- [ ] Tidak ada error yang diketahui
- [ ] Tidak merusak fitur lain
```

---

# 👀 Code Review

Setiap Pull Request akan melalui proses review sebelum di-merge.

Reviewer dapat:

- Approve perubahan.
- Memberikan komentar.
- Meminta perubahan.
- Menolak Pull Request jika perubahan belum sesuai.

Jika reviewer meminta perubahan:

```text
Review
   ↓
Perbaiki kode
   ↓
Commit
   ↓
Push
   ↓
Pull Request otomatis ter-update
```

Tidak perlu membuat Pull Request baru.

---

# 🔥 Setelah Pull Request Di-Merge

Setelah Pull Request berhasil di-merge:

```bash
git checkout master
git pull origin master
```

Jika branch fitur sudah tidak diperlukan, hapus branch lokal:

```bash
git branch -d feature/nama-fitur
```

---

# ⚠️ File yang Tidak Boleh Di-Commit

Jangan melakukan commit terhadap:

```text
.env
```

File `.env` dapat berisi informasi seperti:

- Database credential
- API key
- Application secret
- Password
- Konfigurasi lokal

Gunakan `.env.example` sebagai contoh konfigurasi.

---

# 🤝 Aturan Kolaborasi

Agar proses pengembangan berjalan dengan nyaman:

- Komunikasikan pekerjaan sebelum mulai.
- Hindari mengubah file yang sedang dikerjakan anggota lain.
- Informasikan jika membuat perubahan besar.
- Diskusikan perubahan struktur database.
- Jangan menghapus kode tanpa mengetahui fungsinya.
- Gunakan Pull Request untuk masuk ke `master`.
- Hargai proses review dan masukan dari anggota lain.

---

# 🆘 Jika Mengalami Masalah

Jika mengalami:

- Merge conflict
- Error saat migration
- Error dependency
- Branch bermasalah
- Pull Request conflict
- Perubahan kode anggota lain

Jangan langsung menghapus atau mengganti file secara sembarangan.

Diskusikan dengan tim terlebih dahulu agar perubahan anggota lain tidak hilang.

---

# 🎯 Ringkasan Workflow

Setiap kali ingin mengerjakan fitur:

```text
1. Update master
        ↓
2. Buat branch baru
        ↓
3. Kerjakan fitur
        ↓
4. Testing
        ↓
5. Commit
        ↓
6. Push
        ↓
7. Pull Request
        ↓
8. Review
        ↓
9. Merge ke master
```

Contoh workflow lengkap:

```bash
# Update master
git checkout master
git pull origin master

# Buat branch baru
git checkout -b feature/user-profile

# Setelah selesai coding dan testing
git status
git add .
git commit -m "feat: add user profile"

# Push branch
git push -u origin feature/user-profile
```

Setelah Pull Request di-merge:

```bash
git checkout master
git pull origin master
```

---

Terima kasih sudah berkontribusi untuk **TemanJawara**! 🚀

Mari jaga repository tetap rapi, branch `master` tetap stabil, dan proses kolaborasi tetap nyaman untuk semua anggota.
