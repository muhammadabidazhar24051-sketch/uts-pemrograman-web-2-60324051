# Aplikasi Manajemen Kategori Buku - UTS Pemrograman Web 2

## Identitas
- **Nama**: Muhammad Abid Azhar
- **NIM**: 60324051
- **Mata Kuliah**: Pemrograman Web II
- **Universitas**: UIN Gusdur Pekalongan

## Deskripsi Aplikasi
Aplikasi CRUD (Create, Read, Update, Delete) untuk mengelola data kategori buku pada sistem perpustakaan. Dibangun menggunakan PHP native dengan database MySQL dan tampilan Bootstrap 5.

## Teknologi yang Digunakan
- PHP 8.x
- MySQL / MariaDB
- Bootstrap 5.3
- XAMPP (local server)

## Cara Instalasi & Menjalankan

### Prasyarat
- XAMPP sudah terinstall (PHP + MySQL + Apache)

### Langkah Instalasi
1. Clone repository ini:

       git clone https://github.com/[username]/uts-pemrograman-web-2-60324051.git

2. Pindahkan folder ke direktori htdocs XAMPP:

       C:/xampp/htdocs/uts-pemrograman-web-2-60324051/

3. Buka phpMyAdmin di browser: http://localhost/phpmyadmin
4. Buat database baru dengan nama: uts_perpustakaan_60324051
5. Import file SQL:
   - Pilih database yang baru dibuat
   - Klik tab **Import**
   - Pilih file `database/uts_perpustakaan_60324051.sql`
   - Klik **Go**
6. Buka aplikasi di browser: http://localhost/uts-pemrograman-web-2-60324051/

## Struktur Folder

    uts-pemrograman-web-2-60324051/
    ├── config/
    │   └── database.php
    ├── uts_perpustakaan_60324051.sql
    ├── index.php
    ├── create.php
    ├── edit.php
    ├── delete.php
    └── README.md

## Fitur Aplikasi
- Menampilkan daftar kategori buku
- Menambah kategori baru dengan validasi lengkap
- Mengedit data kategori yang sudah ada
- Menghapus kategori dengan konfirmasi
- Notifikasi sukses/error setiap operasi

## Link Repository
https://github.com/[username]/uts-pemrograman-web-2-60324051
