# 🤝 TemanJawara

TemanJawara adalah platform yang dirancang untuk membantu mahasiswa menemukan dan membentuk rekan tim berdasarkan kebutuhan, kompetensi, keterampilan, minat, dan peran yang dibutuhkan dalam sebuah tim.

Platform ini ditujukan untuk membantu mahasiswa yang ingin mengikuti kompetisi, perlombaan, project, maupun kegiatan lainnya tetapi masih membutuhkan anggota tim dengan kemampuan tertentu.

---

## ✨ Fitur Utama

- Manajemen profil pengguna
- Informasi skill dan minat pengguna
- Pencarian rekan tim
- Pembuatan dan manajemen tim
- Pencarian anggota berdasarkan kebutuhan tim
- Sistem rekomendasi rekan tim
- Pencocokan kandidat berdasarkan kompetensi dan kebutuhan tim

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

### Recommendation System
Rencana pengembangan sistem rekomendasi menggunakan:

- Python
- TF-IDF
- Cosine Similarity

Sistem rekomendasi digunakan untuk membantu mencocokkan kebutuhan suatu tim dengan profil, skill, dan kompetensi kandidat.

---

# 📋 Prerequisites

Sebelum menjalankan project, pastikan perangkat telah memiliki:

- PHP
- Composer
- MySQL
- Git

Untuk fitur recommendation system di masa pengembangan selanjutnya, diperlukan:

- Python
- pip

Cek instalasi:

```bash
php -v
composer -V
git --version
python --version
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

Jalankan:

```bash
composer install
```

---

## 2. Buat File Environment

Copy file `.env.example` menjadi `.env`.

### Windows

```bash
copy .env.example .env
```

### Linux / macOS

```bash
cp .env.example .env
```

---

## 3. Generate Application Key

Jalankan:

```bash
php artisan key:generate
```

---

# 🗄️ Setup Database

Buat database baru di MySQL.

Contoh:

```text
teman_jawara
```

Kemudian buka file `.env` dan sesuaikan konfigurasi database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=teman_jawara
DB_USERNAME=root
DB_PASSWORD=
```

Sesuaikan konfigurasi dengan MySQL pada perangkat masing-masing.

---

## Jalankan Migration

```bash
php artisan migrate
```

Jika project memiliki seeder:

```bash
php artisan db:seed
```

Atau:

```bash
php artisan migrate --seed
```

---

# ▶️ Menjalankan Project

Jalankan Laravel development server:

```bash
php artisan serve
```

Kemudian buka:

```text
http://127.0.0.1:8000
```

---

# 🤖 Recommendation System

TemanJawara direncanakan memiliki sistem rekomendasi untuk membantu pengguna menemukan kandidat rekan tim yang sesuai.

Proses pencocokan direncanakan menggunakan:

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

Contoh:

Sebuah tim membutuhkan:

```text
Frontend Developer
JavaScript
CSS
UI/UX
```

Sistem akan membandingkan kebutuhan tersebut dengan profil dan kompetensi kandidat untuk menghasilkan rekomendasi kandidat yang memiliki tingkat kesesuaian tertinggi.

---

# 🌿 Git Workflow

Project ini menggunakan workflow berbasis branch dan Pull Request.

## ⚠️ Jangan melakukan push langsung ke branch `master`.

Sebelum mulai mengerjakan fitur:

```bash
git checkout master
git pull origin master
```

Kemudian buat branch baru:

```bash
git checkout -b feature/nama-fitur
```

Contoh:

```bash
git checkout -b feature/user-profile
```

---

## Format Branch

Gunakan format berikut:

### Fitur

```text
feature/nama-fitur
```

Contoh:

```text
feature/user-profile
feature/team-matching
feature/recommendation-system
```

### Bug Fix

```text
fix/nama-bug
```

Contoh:

```text
fix/login-validation
```

### UI

```text
ui/nama-halaman
```

Contoh:

```text
ui/profile-page
```

---

# 💾 Commit

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
fix: resolve login validation
style: update profile page
docs: update project documentation
```

---

# ⬆️ Push Branch

Push branch ke GitHub:

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

1. Push branch ke GitHub.
2. Buka repository TemanJawara.
3. Klik **Compare & pull request**.
4. Pastikan branch tujuan adalah:

```text
master
```

5. Isi deskripsi perubahan.
6. Klik **Create pull request**.
7. Tunggu proses review dan approval.

Perubahan akan masuk ke branch `master` setelah melalui proses review.

---

# 📖 Contribution

Sebelum melakukan kontribusi, harap membaca:

[CONTRIBUTING.md](CONTRIBUTING.md)

Dokumen tersebut berisi aturan lengkap mengenai:

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
- Selalu lakukan `git pull origin master` sebelum mulai bekerja.
- Jangan mengerjakan fitur yang sama dengan anggota lain tanpa koordinasi.
- Jangan menghapus kode anggota lain tanpa diskusi.
- Jangan melakukan perubahan database tanpa koordinasi.
- Jangan commit file `.env`.
- Jangan membagikan API key, password, atau credential.
- Pastikan fitur telah diuji sebelum membuat Pull Request.

---

# 👥 Kontribusi

TemanJawara dikembangkan secara kolaboratif.

Setiap anggota diharapkan mengikuti workflow dan aturan kontribusi yang telah ditentukan agar pengembangan project dapat berjalan dengan terstruktur.

🤝 Happy Contributing!
