# Sistem Perpustakaan Laravel

Project ini dibuat untuk memenuhi tugas praktikum Laravel.

## Identitas Mahasiswa

* Nama: ANIS NADHIROTUL MUSTAFIDA
* NIM: 60324043
* Kelas: B
* Mata Kuliah: Pemrograman Web II

---

# Fitur Project

## 1. Routing dan View Anggota

### Route:

* `/anggota`
* `/anggota/{id}`

### Fitur:

* Menampilkan daftar anggota perpustakaan
* Menampilkan detail anggota
* Menggunakan Bootstrap 5
* Menggunakan Blade Template

---

## 2. Controller Kategori Buku (MVC)

### Route:

* `/kategori`
* `/kategori/{id}`
* `/kategori/search/{keyword}`

### Fitur:

* Menampilkan daftar kategori
* Detail kategori beserta daftar buku
* Pencarian kategori
* Menggunakan Controller Laravel
* Implementasi MVC

---

# Struktur Folder Penting

```bash
app/Http/Controllers/
resources/views/
routes/web.php
```

---

# Teknologi yang Digunakan

* Laravel 12
* PHP 8
* Bootstrap 5
* Blade Template

---

# Cara Menjalankan Project

## 1. Clone Repository

```bash
git clone [LINK-REPOSITORY]
```

## 2. Masuk ke Folder Project

```bash
cd nama-project
```

## 3. Install Dependency

```bash
composer install
```

## 4. Copy File Environment

```bash
cp .env.example .env
```

## 5. Generate Application Key

```bash
php artisan key:generate
```

## 6. Jalankan Server

```bash
php artisan serve
```

Akses di browser:

```bash
http://127.0.0.1:8000
```

---

# Screenshot Hasil

## Halaman Daftar Anggota
<img width="1920" height="1020" alt="TGAS 91" src="https://github.com/user-attachments/assets/5f608eee-f52e-46bf-ae3a-7d7ee713c13a" />


## Halaman Detail Anggota
<img width="1920" height="1020" alt="Screenshot 2026-05-18 200048" src="https://github.com/user-attachments/assets/2f23a1d3-60bb-49e9-9320-763b147822fe" />


## Halaman Daftar Kategori
<img width="1920" height="1020" alt="Screenshot 2026-05-18 200543" src="https://github.com/user-attachments/assets/81696933-a29d-4405-8365-b50a92135aa7" />


## Halaman Detail Kategori
<img width="1920" height="1020" alt="Screenshot 2026-05-18 200637" src="https://github.com/user-attachments/assets/0970e6a1-8bc6-4554-a4e4-5c569fe2cd55" />


## Halaman Search Kategori

<img width="1920" height="1020" alt="Screenshot 2026-05-18 200905" src="https://github.com/user-attachments/assets/27833585-3156-4973-8a76-b056b6d776cc" />

