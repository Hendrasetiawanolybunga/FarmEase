# FarmEase: Solusi Manajemen Pertanian Lahan Kering untuk Petani Kupang 🌿💧

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![Laravel v11.x](https://img.shields.io/badge/Laravel-v11.x-FF2D20?style=flat-square&logo=laravel)](https://laravel.com/)
[![Bootstrap v5.3](https://img.shields.io/badge/Bootstrap-v5.3-7952B3?style=flat-square&logo=bootstrap)](https://getbootstrap.com/)
[![Font Awesome](https://img.shields.io/badge/Font_Awesome-6.x-528DD7?style=flat-square&logo=fontawesome)](https://fontawesome.com/)

## Tentang Proyek

FarmEase adalah sistem informasi manajemen pertanian berbasis website yang dirancang khusus untuk memberdayakan **petani kecil penggarap lahan kering** di **Kabupaten Kupang, Nusa Tenggara Timur**. Menjawab tantangan iklim dan produktivitas di wilayah tersebut, FarmEase hadir sebagai alat digital yang intuitif untuk membantu petani mengoptimalkan produksi, mengelola input, dan membuat keputusan yang lebih cerdas.

Proyek ini dibangun sebagai bagian dari [Sebutkan nama kompetisi atau tujuan lain jika ada, misal: "Kompetisi Inovasi Teknologi Pertanian 2025" atau "Tugas Akhir Mata Kuliah Web Development"].

## ✨ Fitur Utama

FarmEase menyediakan modul-modul esensial untuk mendukung aktivitas pertanian harian:

1.  **🌱 Perencanaan Musim Tanam Adaptif:**
    * Membantu petani mencatat dan memantau jadwal tanam-panen utama.
    * Memberikan rekomendasi sederhana (misal: jenis tanaman cocok lahan kering, perkiraan panen) untuk optimalisasi berdasarkan pola iklim lokal.

2.  **💰 Pencatatan Input Pertanian & Biaya:**
    * Memfasilitasi pencatatan digital penggunaan pupuk, pestisida, benih, dan biaya operasional lainnya.
    * Membantu petani melacak pengeluaran dan menganalisis efisiensi biaya.

3.  **☁️ Informasi Cuaca & Agroklimat Lokal:**
    * Menyajikan data cuaca penting seperti curah hujan dan suhu yang relevan untuk wilayah Kupang.
    * *(Catatan: Untuk prototipe ini, data disimulasikan. Pengembangan lanjut akan mengintegrasikan API cuaca real-time.)*

4.  **📈 Akses Data Harga Pasar Komoditas Utama:**
    * Memberikan informasi harga terkini untuk komoditas pertanian pokok di pasar lokal Kupang.
    * *(Catatan: Untuk prototipe ini, data disimulasikan. Pengembangan lanjut akan mengintegrasikan API harga pasar real-time.)*

## 🚀 Teknologi yang Digunakan

* **Backend:** [PHP](https://www.php.net/) dengan [Laravel 11](https://laravel.com/)
* **Database:** [SQLite](https://www.sqlite.org/index.html) (mode pengembangan), siap untuk [MySQL](https://www.mysql.com/)
* **Frontend:**
    * [HTML5](https://developer.mozilla.org/en-US/docs/Web/HTML)
    * [CSS3](https://developer.mozilla.org/en-US/docs/Web/CSS)
    * [JavaScript](https://developer.mozilla.org/en-US/docs/Web/JavaScript) (Vanilla JS untuk interaktivitas UI sederhana)
    * [Bootstrap 5.3](https://getbootstrap.com/) (untuk desain responsif dan komponen UI)
    * [Font Awesome 6](https://fontawesome.com/) (untuk ikonografi modern)
    * [Google Fonts: Poppins](https://fonts.google.com/specimen/Poppins) (untuk tipografi yang bersih dan modern)
    * [Animate.css](https://animate.style/) (opsional, untuk sentuhan animasi UI)

## 🎯 Tujuan Proyek

* **Meningkatkan Literasi Digital:** Memperkenalkan petani pada penggunaan teknologi untuk manajemen pertanian.
* **Optimasi Produksi:** Membantu perencanaan yang lebih baik untuk hasil panen yang maksimal di kondisi lahan kering.
* **Efisiensi Biaya:** Memberikan gambaran jelas tentang pengeluaran untuk pengambilan keputusan finansial.
* **Akses Informasi:** Memudahkan petani mendapatkan data penting (cuaca, harga) secara cepat.
* **Dukungan Komunitas:** Menjadi alat pendukung bagi kelompok tani atau penyuluh pertanian.

## 📦 Instalasi & Penggunaan

Untuk menjalankan proyek ini di lingkungan lokal Anda:

1.  **Kloning Repositori:**
    ```bash
    git clone [https://github.com/USERNAME_ANDA/FarmEase.git](https://github.com/USERNAME_ANDA/FarmEase.git)
    cd FarmEase
    ```
2.  **Instal Dependensi Composer:**
    ```bash
    composer install
    ```
3.  **Buat File `.env` & Generate Key:**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
4.  **Konfigurasi Database (SQLite/MySQL):**
    * Untuk **SQLite** (direkomendasikan untuk pengembangan cepat):
        Pastikan di `.env` Anda memiliki:
        ```dotenv
        DB_CONNECTION=sqlite
        # DB_DATABASE=/path/to/database.sqlite (Opsional, Laravel akan membuat default di database/database.sqlite)
        ```
        Kemudian jalankan:
        ```bash
        touch database/database.sqlite
        php artisan migrate # Belum ada migration saat ini, tapi ini praktik baik
        ```
    * Untuk **MySQL:**
        Konfigurasi `.env` Anda dengan detail database MySQL:
        ```dotenv
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=farmease_db
        DB_USERNAME=your_mysql_user
        DB_PASSWORD=your_mysql_password
        ```
        Buat database `farmease_db` secara manual di MySQL, lalu jalankan:
        ```bash
        php artisan migrate
        ```
5.  **Jalankan Aplikasi:**
    ```bash
    php artisan serve
    ```
    Akses aplikasi di browser Anda: `http://127.0.0.1:8000`

## 🛣️ Roadmap Pengembangan

* Implementasi penuh fitur CRUD (Create, Read, Update, Delete) untuk semua modul.
* Sistem otentikasi pengguna (login/register).
* Integrasi API cuaca real-time (misal: OpenWeatherMap) dan API harga pasar (jika tersedia dan gratis).
* Fitur notifikasi (misal: pengingat panen, perubahan cuaca).
* Laporan & Analisis Sederhana (grafik biaya, prediksi panen).
* Modul Komunikasi/Penyuluhan.

## 🤝 Kontribusi

Kontribusi dalam bentuk ide, pelaporan bug, atau *pull request* sangat disambut baik!
Silakan buka *issue* baru jika Anda menemukan masalah atau memiliki saran.


## ✉️ Kontak

Jika ada pertanyaan, silakan hubungi:

[BlueCode46]
[setia170104@gmail.com]
[https://www.linkedin.com/in/hendra-setiawan17/]

---
_Dibuat dengan ❤️ untuk Petani Kecil Kabupaten Kupang_