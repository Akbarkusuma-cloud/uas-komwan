# 📘 Proyek UAS Cloud Computing - Aplikasi Data Mahasiswa

Proyek ini merupakan tugas UAS Mata Kuliah **Komputasi Awan (Cloud Computing)** yang dikembangkan oleh **Akbar Kusuma (2212501122)**. Aplikasi ini dibangun menggunakan **PHP Native**, **MySQL**, dan dijalankan secara containerized menggunakan **Docker Compose**. Fungsinya sederhana: melakukan input data mahasiswa dan menampilkannya dalam tabel. Tampilan dibuat responsif menggunakan **Bootstrap 5**.

---

## 🛠 Teknologi yang Digunakan

- PHP 8.1 (Apache)
- MySQL 5.7
- Docker & Docker Compose
- Bootstrap 5 (CDN)

---

## 📁 Struktur Folder

```
uas-cloud-2212501122/
│
├── app/
│   ├── index.php           # Halaman input dan tampilan data mahasiswa
│   ├── dbconn.php          # File koneksi ke database
│
├── db/
│   └── 00000073909.sql     # SQL schema database & tabel mahasiswa
│
├── docker-compose.yml      # Konfigurasi Docker Compose
├── Dockerfile              # Dockerfile untuk PHP Apache
```

---

## ⚙️ Cara Menjalankan (Lokal via Docker)

1. Pastikan Docker & Docker Compose sudah terinstal.
2. Clone repository ini:
   ```bash
   git clone https://github.com/username/uas-cloud-2212501122.git
   cd uas-cloud-2212501122
   ```
3. Jalankan aplikasi:
   ```bash
   docker-compose up --build
   ```
4. Buka browser dan akses:
   ```
   http://localhost:8080
   ```

---

## 🧩 Fitur Aplikasi

- Form input data mahasiswa (NIM, Nama, Email)
- Validasi sederhana menggunakan HTML
- Tabel daftar mahasiswa dari database
- Desain responsif dengan Bootstrap 5

---

## 🗃 Struktur Tabel MySQL

```sql
CREATE DATABASE IF NOT EXISTS uas_cloud;

USE uas_cloud;

CREATE TABLE IF NOT EXISTS mahasiswa (
  nim VARCHAR(10) PRIMARY KEY,
  nama VARCHAR(50),
  email VARCHAR(50)
);
```

---

## 👨‍💻 Developer

- **Nama:** Akbar Kusuma
- **NIM:** 2212501122
- **Mata Kuliah:** Komputasi Awan (Cloud Computing)

---

## 📌 Catatan

- Fitur edit dan hapus belum tersedia.
- Maksimal panjang NIM adalah 10 karakter.
- Untuk mereset database:
   ```bash
   docker-compose down -v
   docker-compose up --build
   ```