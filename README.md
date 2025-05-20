# TP10DPBO2025C1
Ini proyek DPBO/OOP dengan gaya arsitektur **MVVM (Model-View-ViewModel)**. Ada 3 class yang ada di proyek ini lengkap beserta CRUD-nya.

## Janji
Saya Faisal Nur Qolbi dengan NIM 2311399 mengerjakan Tugas Praktikum 10 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Desain Program

  * **Pake Struktur MVVM**: Biar urusan data (Model), tampilan (View), sama logika penengahnya (ViewModel) kepisah jelas, jadi enak buat di-maintenance dan test.
  * **Objek Kelas**:
      * `kategoribarang`: Nyimpen jenis-jenis kategori barang
      * `pemasok`: Data supplier barang kita
      * `barang`: Daftar barang lengkap dengan stok, kategori, dan pemasoknya. Ada relasi PK-FK ke dua tabel lainnya
  * **Fitur**:
      * **CRUD** buat semua entitas (barang, kategori, pemasok)
      * Koneksi database pake **PDO** plus ***Prepared Statements*** biar aman
      * Ada konsep "**Data Binding**" MVVM

## Alur Program

1.  **User Buka Halaman**: `index.php` nerima request
2.  **`index.php` Nentuin Rute-nya**: cek parameter URL (`entity` & `action`) buat manggil **ViewModel** yang pas
3.  **ViewModel**: Minta data ke **Model**, olah dikit, terus disiapin buat **View**. Kalo ada input dari user, ViewModel juga yang nerusin ke Model
4.  **Model Ngurus Data**: Semua urusan sama database (ambil, simpan, ubah, hapus) dipegang Model pake PDO
5.  **View Nampilin**: `index.php` nge-load file View yang sesuai, terus View nampilin data dari ViewModel pake HTML
6.  **Input User Diproses**: Data dari form dikirim ke `index.php`, dioper ke ViewModel, terus ke Model buat disimpan. Abis itu di-redirect balik

## Prerequisite

  * Text Editor
  * XAMPP / Yang mirip
    * PHP (8.0+)
    * MariaDB (10.0+)
    * Apache (2.0+)
  * Browser

## Cara Pasang & Jalanin (Kalau Pake XAMPP)

1.  **XAMPP Nyalain**: Pastiin Apache & MySQL (MariaDB) di XAMPP udah ijo.
2.  **Taruh Kode**: Simpen folder proyek ini di `htdocs` XAMPP.
3.  **Bikin Database**: Lewat phpMyAdmin langsung import database sql `database/db_toko_atk.sql` (udah include buat db).
5.  **Buka di Browser**: Akses `localhost/nama-folder-proyek/`.

## Dokumentasi

https://github.com/user-attachments/assets/36953d91-3857-4728-8306-5a7a5237f6a8
