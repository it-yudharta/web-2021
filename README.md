# Pemrograman Web 2021

## Installasi
- Download atau Clone Projek ini.
- Buka dengan visual code.
- jalankan perintah `composer install` untuk install library yang dibutuhkan aplikasi
- copy file `.env.example` menjadi `.env`
- jalankan perintah `php artisan key:generate` untuk membuat kunci aplikasi.

## Menjalankan Aplikasi
- jalankan perintah `php artisan serve`, kemudian buka [link](http://localhost:8000) di browser:

## Koneksi Database.
- Buat Database Baru di MySQL dengan nama `web2021`.
- setting pengaturan di `.env`, sesuaikan dengan database.
- Jalankan Migrasi dengan menjalankan perintah `php artisan migrate`.

### Membuat Controller, Model, factory dan seeder Database.
- Jalankan `php artisan make:model -a NamaKalian`.
- Ubah file migrasi yang berisi struktur data penduduk.

## Menjalankan phpmyadmin dari terminal
- masuk folder phpmyadmin.
- jalankan perintah `php -S localhost:8888`, port `8888` bisa diubah sesuai kebutuhan.