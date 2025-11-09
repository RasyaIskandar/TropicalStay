# TropicalStay

TropicalStay adalah aplikasi manajemen hotel berbasis web yang memungkinkan admin untuk mengelola data kamar dan pemesanan, serta memudahkan pengunjung dalam melihat ketersediaan kamar. Sistem ini dikembangkan menggunakan Laravel dan Bootstrap/Tailwind, dengan struktur CRUD yang jelas dan alur pemesanan yang sederhana.

---

## ✨ Fitur Utama

- Manajemen kamar (Tambah, Edit, Hapus, Lihat Detail)
- Manajemen pemesanan (Booking, Pembatalan, Pengembalian)
- Status ketersediaan kamar otomatis berdasarkan jumlah stok
- Halaman dashboard sederhana untuk pengelolaan hotel
- Tampilan clean dan mudah digunakan

---

## 🧱 Teknologi yang Digunakan

| Teknologi | Fungsi |
|----------|--------|
| Laravel | Backend & Routing |
| Blade Template | Frontend Render |
| Bootstrap / Tailwind CSS | UI Styling |
| MySQL / MariaDB | Database |
| Laravel Eloquent ORM | Query Database |

---

## 📦 Instalasi & Cara Menjalankan

### 1. Clone Repository
git clone https://github.com/RasyaIskandar/TropicalStay.git
cd TropicalStay

shell
Salin kode

### 2. Install Dependencies
composer install
npm install

shell
Salin kode

### 3. Copy & Konfigurasi Environment
cp .env.example .env

markdown
Salin kode
- Edit `.env`, sesuaikan:
DB_DATABASE=tropicalstay
DB_USERNAME=root
DB_PASSWORD=

shell
Salin kode

### 4. Generate Key
php artisan key:generate

shell
Salin kode

### 5. Migrasi & Seed Database (Opsional jika ada seeder)
php artisan migrate --seed

shell
Salin kode

### 6. Jalankan Aplikasi
php artisan serve

java
Salin kode

Jika menggunakan Vite (Tailwind/JS bundling):
npm run dev

yaml
Salin kode

---

## 🗂️ Struktur Folder (Singkat)

app/
Http/Controllers/
RoomController.php
BookingController.php
resources/views/
rooms/
bookings/
public/
database/migrations/

yaml
Salin kode

---

## 👤 Developer
**Rasya Iskandar**

---
