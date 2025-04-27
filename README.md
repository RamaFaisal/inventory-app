# Inventory App - UTS Backend

## Deskripsi

Project ini dibuat untuk memenuhi tugas UTS Backend Development dengan Laravel 10, MySQL, dan Docker.

## Fitur

• Create + Read untuk data item
• Create + Read untuk data kategori
• Create + Read untuk data supplier
• Menampilkan ringkasan stok barang termasuk stok total, total nilai stok (harga x 
jumlah), dan rata-rata harga barang.
• Menampilkan daftar barang yang stoknya di bawah ambang batas tertentu (misalkan 
di bawah 5 unit)

## Step Pengerjaan

1. Inisialisasi project Laravel:
   - `laravel new inventory-app`
2. Membuat Dockerfile dan docker-compose.yml
3. Setup Laravel agar compatible di Docker (document root public)
4. Setup `.env` agar connect ke database `db`
5. Membuat migration tabel `items`, `categories`, `admins`, `suppliers`
6. Membuat model `Item`, `categories`, `admins`, `suppliers`
7. Membuat seeder `ItemSeeder`, `CategorySeeder`, `AdminSeeder`, `SupplierSeeder`
8. Membuat controller untuk fitur yang diinginkan
9. Menulis routing api sederhana untuk menampilkan semua items
10. Build docker container:
   - `docker-compose up --build`
11. Jalankan migration dan seeder:
   - `docker-compose exec app php artisan migrate --seed`
12. Testing aplikasi di `http://localhost:8000`
13. Testing phpmyadmin di `http://localhost:8080`
14. Karena menggunakan json, jadi saya menggunakan Postman untuk test fiturnya

## Struktur Container

- app: Laravel PHP
- db: MySQL database
- phpmyadmin: GUI database

## Beberapa perintah docker yang saya gunakan

`docker-compose up -d` -> Digunakan untuk menjalankan service docker
`docker-compose exec app php artisan migrate --seed` -> Digunakan untuk menjalankan migrasi dan seeder di laravel docker

## Push Github

Saya menggunakan extension source control di VScode karena lebih mudah jadi tidak ada perintah git init dll.