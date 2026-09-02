# 🤝 TemanJawara

TemanJawara adalah platform yang dirancang untuk membantu mahasiswa menemukan dan membentuk rekan tim berdasarkan kebutuhan, kompetensi, keterampilan, minat, dan peran yang dibutuhkan dalam sebuah tim.

Platform ini ditujukan untuk mahasiswa yang ingin mengikuti kompetisi, perlombaan, project, maupun kegiatan lainnya tetapi masih membutuhkan anggota tim dengan kemampuan tertentu.

---

## ✨ Fitur Utama

- Manajemen profil pengguna
- Informasi skill dan minat pengguna
- Pencarian rekan tim
- Pembuatan dan manajemen tim
- Pencarian anggota berdasarkan kebutuhan tim
- Pencocokan kandidat berdasarkan kompetensi dan kebutuhan tim
- Pengembangan sistem rekomendasi rekan tim

---

## 🛠️ Tech Stack

### Backend
- PHP
- Laravel

### Frontend
- Blade
- CSS
- JavaScript

### Database
- MySQL

### Frontend Build Tools
- Node.js
- npm

### Recommendation System (Planned Development)
- Python
- TF-IDF
- Cosine Similarity

> Sistem rekomendasi masih dalam tahap rencana pengembangan.

---

# 📋 Prerequisites

Sebelum menjalankan project, pastikan perangkat telah memiliki:

- PHP
- Composer
- MySQL
- Git
- Node.js dan npm

Untuk pengembangan fitur recommendation system di masa mendatang, diperlukan:

- Python
- pip

Cek instalasi:

```bash
php -v
composer -V
mysql --version
git --version
node -v
npm -v
```

---

# 📥 Clone Project

Clone repository TemanJawara:

```bash
git clone https://github.com/teman-jawara/TemanJawara.git
```

Masuk ke folder project:

```bash
cd TemanJawara
```

---

# ⚙️ Setup Project

## 1. Install PHP Dependencies

```bash
composer install
```

## 2. Install Frontend Dependencies

```bash
npm install
```

## 3. Buat File Environment

Copy `.env.example` menjadi `.env`.

### Windows

```bash
copy .env.example .env
```

### Linux / macOS

```bash
cp .env.example .env
```

> ⚠️ Jangan pernah melakukan commit atau push file `.env` ke repository.

## 4. Generate Application Key

```bash
php artisan key:generate
```

Command ini akan membuat `APP_KEY` yang digunakan Laravel untuk kebutuhan keamanan aplikasi.

---

# 🗄️ Setup Database

## 1. Buat Database

Buat database baru melalui MySQL.

Contoh:

```text
temanjawara_db
```

## 2. Konfigurasi `.env`

Buka file `.env`, lalu sesuaikan konfigurasi database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=temanjawara_db
DB_USERNAME=root
DB_PASSWORD=
```

Sesuaikan username dan password dengan konfigurasi MySQL pada perangkat masing-masing.

## 3. Jalankan Migration dan Seeder

Project TemanJawara memiliki `DatabaseSeeder` yang saat ini digunakan untuk membuat data dummy user.

```bash
php artisan migrate --seed
```

Command tersebut akan:

1. Membuat tabel berdasarkan migration.
2. Menjalankan seeder.
3. Menambahkan data dummy untuk testing.

Jika hanya ingin membuat tabel tanpa menjalankan seeder:

```bash
php artisan migrate
```

---

# ▶️ Menjalankan Project

Gunakan dua terminal selama development.

## Terminal 1 — Laravel

```bash
php artisan serve
```

Laravel biasanya berjalan di:

```text
http://127.0.0.1:8000
```

## Terminal 2 — Frontend Development Server

```bash
npm run dev
```

Pastikan kedua terminal tetap berjalan jika project membutuhkan frontend asset bundling.

---

# 🤖 Recommendation System

TemanJawara direncanakan memiliki sistem rekomendasi untuk membantu pengguna menemukan kandidat rekan tim yang sesuai.

Rencana proses pencocokan:

```text
Kebutuhan Tim
      ↓
TF-IDF
      ↓
Representasi Vector
      ↓
Cosine Similarity
      ↓
Perhitungan Tingkat Kesesuaian
      ↓
Ranking Kandidat
```

Contoh kebutuhan tim:

```text
Frontend Developer
JavaScript
CSS
UI/UX
```

Sistem nantinya akan membandingkan kebutuhan tersebut dengan profil, skill, dan kompetensi kandidat untuk menghasilkan ranking kandidat berdasarkan tingkat kesesuaian.

---

# 🌿 Git Workflow

Project ini menggunakan workflow berbasis:

- Branch
- Commit
- Push
- Pull Request
- Code Review

## ⚠️ Jangan melakukan push langsung ke branch `master`

Branch `master` merupakan branch utama project dan dilindungi menggunakan ruleset.

Semua perubahan harus dikerjakan melalui branch masing-masing dan diajukan melalui Pull Request.

---

# 🔄 Sebelum Mulai Mengerjakan

Pastikan branch `master` lokal sudah memiliki perubahan terbaru:

```bash
git checkout master
git pull origin master
```

Setelah itu buat branch baru.

---

# 🌱 Membuat Branch

```bash
git checkout -b feature/nama-fitur
```

Contoh:

```bash
git checkout -b feature/user-profile
```

## Format Branch

### Fitur Baru

```text
feature/nama-fitur
```

Contoh:

```text
feature/user-profile
feature/team-matching
feature/recommendation-system
```

### Perbaikan Bug

```text
fix/nama-bug
```

Contoh:

```text
fix/login-validation
```

### Perubahan UI

```text
ui/nama-halaman
```

Contoh:

```text
ui/profile-page
```

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

Gunakan commit message yang jelas.

Contoh:

```text
feat: add user profile
feat: add team search feature
fix: resolve login validation
fix: correct profile update
style: update profile page
docs: update project documentation
```

Hindari commit message seperti:

```text
update
fix
test
coba
wkwk
```

---

# ⬆️ Push Branch

```bash
git push -u origin feature/nama-fitur
```

Contoh:

```bash
git push -u origin feature/user-profile
```

---

# 🔀 Pull Request

Setelah fitur selesai:

1. Pastikan perubahan telah diuji.
2. Push branch ke GitHub.
3. Buka repository TemanJawara.
4. Klik **Compare & pull request**.
5. Pastikan branch tujuan adalah `master`.
6. Isi judul dan deskripsi Pull Request dengan jelas.
7. Klik **Create pull request**.
8. Tunggu proses review.

Perubahan hanya boleh masuk ke `master` melalui Pull Request dan merge.

---

# 📖 Contribution

Sebelum melakukan kontribusi, harap membaca:

[CONTRIBUTING.md](CONTRIBUTING.md)

Dokumen tersebut berisi aturan lebih lengkap mengenai:

- Cara melakukan kontribusi
- Aturan branch
- Commit convention
- Pull Request
- Code review
- Aturan kolaborasi tim

---

# ⚠️ Aturan Penting

- Jangan push langsung ke `master`.
- Selalu buat branch baru sebelum mengerjakan fitur.
- Selalu update branch `master` sebelum mulai bekerja.
- Jangan mengerjakan fitur yang sama dengan anggota lain tanpa koordinasi.
- Jangan menghapus atau mengubah kode anggota lain tanpa diskusi.
- Jangan melakukan perubahan database tanpa koordinasi dengan tim.
- Jangan commit file `.env`.
- Jangan membagikan API key, password, atau credential.
- Pastikan fitur telah diuji sebelum membuat Pull Request.
- Gunakan commit message yang jelas.
- Buat Pull Request untuk setiap perubahan yang akan masuk ke `master`.

---

# 👥 Kontribusi

TemanJawara dikembangkan secara kolaboratif.

Setiap anggota diharapkan mengikuti workflow dan aturan kontribusi agar pengembangan project dapat berjalan dengan terstruktur, mengurangi konflik kode, dan memudahkan proses review.

🤝 Happy Contributing!
