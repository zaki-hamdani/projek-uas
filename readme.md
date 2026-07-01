# 📚 Sistem Informasi Absensi Mahasiswa

Sistem Absensi Mahasiswa merupakan aplikasi berbasis web yang dibangun menggunakan **CodeIgniter 3**, **PHP 8.2**, **Bootstrap 5**, dan **MySQL**. Aplikasi ini bertujuan untuk membantu proses pengelolaan data akademik serta pencatatan absensi mahasiswa secara terkomputerisasi.

---

## Fitur Sistem

### Admin
- Login
- Dashboard Admin
- CRUD Data Mahasiswa
- CRUD Data Dosen
- CRUD Data Mata Kuliah

### Dosen
- Login
- Dashboard Dosen
- CRUD Data Absensi
- Rekap Absensi Mahasiswa

### Mahasiswa
- Login
- Dashboard Mahasiswa
- Melihat Riwayat Absensi

---

## Teknologi yang Digunakan

| Teknologi       | Versi              |
|-----------      |--------            |
| PHP             | 8.2                |
| Framework       | CodeIgniter 3.1.13 |
| CSS Framework   | Bootstrap 5        |
| Database        | MySQL              |
| Web Server      | Apache (XAMPP)     |
| Version Control | Git & GitHub       |

---

## Struktur Database

Database terdiri dari 5 tabel:

- users
- mahasiswa
- dosen
- matakuliah
- absensi

---

## Cara Menjalankan Project

### 1. Clone Repository

```bash
git clone https://github.com/zaki-hamdani/projek-uas.git
```

### 2. Masuk ke Folder Project

```bash
cd projek-uas
```

### 3. Pindahkan ke Folder XAMPP

Salin folder project ke:

```
C:\xampp\htdocs\
```

### 4. Import Database

- Buka phpMyAdmin
- Import file

```
database.sql
```

### 5. Konfigurasi Database

Buka file:

```
application/config/database.php
```

Contoh konfigurasi:

```php
$db['default'] = array(
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'sistem_absensi_mahasiswa',
    'dbdriver' => 'mysqli'
);
```

### 6. Konfigurasi Base URL

Buka:

```
application/config/config.php
```

```php
$config['base_url'] = 'http://localhost/projek-uas/';
```

### 7. Jalankan Aplikasi

```
http://localhost/projek-uas
```

---

# Login

## Admin

```
Username : admin
Password : admin123
```

## Dosen

```
Username : dosen
Password : dosen123
```

## Mahasiswa

```
Username : zaki
Password : zaki123
```
```
Username : dopan
Password : dopan123
```
```
Username : rizqy
Password : rizqy123
```
```
Username : edwin
Password : edwin123
```

---

## Hak Akses

### Admin

- Mengelola Data Mahasiswa
- Mengelola Data Dosen
- Mengelola Data Mata Kuliah

### Dosen

- Mengelola Data Absensi Mahasiswa
- Melihat Rekap Absensi

### Mahasiswa

- Melihat Dashboard
- Melihat Riwayat Absensi

---

## Tampilan Sistem

Beberapa halaman utama pada sistem:

- Login
- Dashboard Admin
- Dashboard Dosen
- Dashboard Mahasiswa
- Data Mahasiswa
- Data Dosen
- Data Mata Kuliah
- Data Absensi
- Rekap Absensi
- Riwayat Absensi

---

## Arsitektur Aplikasi

Aplikasi menerapkan pola **MVC (Model-View-Controller)** dari CodeIgniter 3.

- **Model** → Mengelola akses database.
- **View** → Menampilkan antarmuka pengguna.
- **Controller** → Menghubungkan Model dan View serta mengelola logika aplikasi.

---

## Keamanan

Sistem telah menerapkan:

- Session Login
- Role Based Access Control (RBAC)
- Form Validation
- Password Verification
- Flash Message
- Foreign Key Database

---

## Pengembangan Selanjutnya

Beberapa fitur yang dapat ditambahkan:

- QR Code Absensi
- Export PDF
- Export Excel
- Grafik Kehadiran Mahasiswa
- Reset Password
- Upload Foto Profil
- Jadwal Perkuliahan
- Notifikasi Kehadiran

---

## Tim Pengembang

| Nama                  | Peran               |
|-----------------------|---------------------|
| Muhammad Zaki Hamdani | Fitur Admin         |
| Rizqy Alfian Maulana  | Fitur Dosen         |
| Lalu Danoval Anshori  | Fitur Mahasiswa     |
| Edwin Ivansah         | Backend Developer   |

---

## Lisensi

Proyek ini dibuat untuk memenuhi tugas Ujian Akhir Semester (UAS) dan digunakan sebagai media pembelajaran pengembangan aplikasi berbasis web menggunakan CodeIgniter 3.