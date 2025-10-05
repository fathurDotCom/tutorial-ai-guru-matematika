# Tutorial AI Guru Matematika

Deskripsi singkat: proyek Laravel sederhana yang memperlihatkan integrasi AI untuk membantu proses belajar matematika — contoh: menjawab soal, menjelaskan langkah penyelesaian, dan menampilkan hasil di antarmuka web.

## Fitur

- Halaman input soal matematika (`/`) dan halaman hasil (`/result`).
- Integrasi layanan AI (menggunakan API OpenAI) untuk menghasilkan penjelasan langkah demi langkah.
- Struktur Laravel standar (models, controllers, views).

## Persyaratan

- PHP 8.1+ (sesuaikan dengan versi Laravel yang digunakan)
- Composer
- Node.js & npm (opsional, hanya bila ingin membangun asset frontend)

## Instalasi

1. Clone repository:

   git clone https://github.com/fathurDotCom/tutorial-ai-guru-matematika.git
   cd tutorial-ai-guru-matematika

2. Instal dependensi PHP:

   composer install

3. Salin file environment dan generate app key:

   cp .env.example .env
   php artisan key:generate

4. Instal dependensi frontend (opsional jika ingin membangun asset):

   npm install
   npm run build

## Menambahkan OPENAI_API_KEY ke .env

Proyek ini menggunakan OpenAI (atau layanan API yang kompatibel) untuk menjawab dan menjelaskan soal matematika. Untuk menambahkan kunci API, ikuti langkah berikut:

1. Dapatkan API key dari OpenAI di https://platform.openai.com/account/api-keys.

2. Buka file `.env` di root proyek (jika belum ada, setelah langkah install di atas Anda harus sudah menyalin `.env.example` ke `.env`).

3. Tambahkan baris berikut ke `.env`:

   OPENAI_API_KEY=sk-<kunci-anda>

   Contoh:

   OPENAI_API_KEY=sk-abcdefgh1234567890

4. (Opsional) Jika Anda meng-cache konfigurasi, jalankan perintah berikut agar Laravel memuat ulang konfigurasi:

   php artisan config:cache

5. Pastikan kode mengambil nilai env ini. Contoh penggunaan di Laravel (biasanya ada di service atau controller):

   // ...existing code...
   $apiKey = env('OPENAI_API_KEY');
   // Buat client OpenAI dengan $apiKey atau gunakan package pihak ketiga

Catatan: jangan commit kunci API ke repository publik. Pastikan `.env` ada di `.gitignore` (Laravel default sudah mengabaikan `.env`).

## Menjalankan aplikasi (development)

1. Jalankan server lokal Laravel:

   php artisan serve

2. Buka browser ke http://127.0.0.1:8000 untuk mencoba fitur AI matematika.

## Struktur penting

- `app/Http/Controllers` — controller untuk menerima input soal dan memanggil service AI.
- `resources/views/math.blade.php` — form input soal.
- `resources/views/math_result.blade.php` — halaman hasil dan penjelasan.
- `routes/web.php` — route untuk halaman dan aksi submit.

## Catatan keamanan

- Jangan commit kunci API ke repository publik.
- Berikan batasan penggunaan (rate limit) dan validasi input sebelum meneruskan ke API eksternal.

## Kontribusi

Silakan buat pull request atau issue jika ingin menambah fitur, memperbaiki bug, atau meningkatkan dokumentasi.

## Lisensi

Proyek ini mengikuti lisensi MIT (lihat file `LICENSE` jika ada).
