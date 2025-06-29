# Dokumentasi Panel Admin Assalam

## Pendahuluan

Panel admin Assalam adalah sistem backend berbasis Laravel yang digunakan oleh admin untuk mengelola seluruh data penting pada website Assalam. Panel ini dirancang agar admin dapat dengan mudah mengelola berita, data pendaftar PPDB, dan feedback dari pengunjung website.

## Fitur Utama Panel Admin

### 1. Login Admin

-   **Fungsi:** Hanya admin yang memiliki akun dapat mengakses panel admin.
-   **Manfaat:** Menjaga keamanan data dan hanya user yang berwenang yang dapat mengelola konten website.

### 2. Dashboard

-   **Fungsi:** Menampilkan ringkasan jumlah pendaftar PPDB, feedback, dan berita.
-   **Manfaat:** Admin dapat memantau statistik utama secara cepat.

### 3. Kelola Data PPDB

-   **Fungsi:**
    -   Melihat daftar pendaftar PPDB.
    -   Mengekspor data pendaftar ke Excel.
-   **Manfaat:** Memudahkan admin dalam memantau dan mengelola proses penerimaan siswa baru.

### 4. Kelola Feedback

-   **Fungsi:**
    -   Melihat pesan/feedback yang dikirim pengunjung website.
    -   Mengekspor data feedback ke Excel.
-   **Manfaat:** Admin dapat menanggapi masukan, pertanyaan, atau kritik dari pengunjung website.

### 5. Kelola Berita

-   **Fungsi:**
    -   Menambah, mengedit, dan menghapus berita yang akan ditampilkan di halaman utama website.
    -   Upload gambar untuk setiap berita.
-   **Manfaat:**
    -   Admin dapat menginformasikan kegiatan, pengumuman, atau berita penting lainnya secara real-time ke seluruh pengunjung website.
    -   Berita yang dikelola admin akan langsung muncul di halaman user.

### 6. Logout

-   **Fungsi:** Mengakhiri sesi admin dengan aman.
-   **Manfaat:** Menjaga keamanan akun admin.

## Struktur Menu Sidebar

-   **Dashboard:** Ringkasan statistik utama.
-   **Data PPDB:** Daftar pendaftar dan ekspor data.
-   **Data Feedback:** Daftar pesan dari pengunjung dan ekspor data.
-   **Kelola Berita:** CRUD berita (tambah, edit, hapus, upload gambar).
-   **Logout:** Keluar dari panel admin.

## Kenapa Admin Bisa Mengelola Berita, PPDB, dan Feedback?

-   **Akses Admin Terbatas Lewat Sistem Login dan Middleware Auth:**

    -   Hanya user yang berhasil login sebagai admin yang bisa mengakses seluruh halaman admin. Ini diatur melalui middleware `auth` pada route admin di file `routes/web.php`.
    -   Jika user belum login, maka akan otomatis diarahkan ke halaman login admin.

-   **Pengelolaan Data Lewat Controller:**

    -   Semua aksi pengelolaan data (tambah, edit, hapus berita/PPDB/feedback) dilakukan melalui fungsi-fungsi di `AdminController`.
    -   Controller ini hanya bisa diakses oleh admin yang sudah login, sehingga keamanan data tetap terjaga.

-   **Model Laravel:**

    -   Data berita, PPDB, dan feedback dikelola menggunakan model Eloquent Laravel (`Berita`, `Ppdb`, `Feedback`).
    -   Model ini berfungsi sebagai penghubung antara database dan controller, sehingga admin bisa melakukan CRUD data dengan mudah dan aman.

-   **Keamanan dan Hak Akses:**
    -   Semua route dan fitur admin dilindungi oleh sistem autentikasi Laravel, sehingga hanya admin yang berhak yang bisa mengelola data penting website.
    -   User biasa/pengunjung tidak bisa mengakses halaman admin atau mengubah data apapun.

Dengan kombinasi sistem login, middleware auth, controller khusus admin, dan model Eloquent, hanya admin yang bisa mengelola berita, data PPDB, dan feedback di website Assalam. Semua perubahan yang dilakukan admin akan langsung berdampak pada tampilan website user.

## Manfaat Panel Admin

-   Memudahkan pengelolaan konten website secara mandiri oleh admin.
-   Meningkatkan interaksi antara sekolah dan pengunjung website.
-   Mempercepat proses update informasi tanpa perlu akses ke backend server secara langsung.
-   Menjaga keamanan data dengan sistem login dan logout.

---

**Catatan:**

-   Hanya admin yang sudah login yang dapat mengakses seluruh fitur panel admin.
-   Semua perubahan yang dilakukan admin (berita, data PPDB, feedback) akan langsung berdampak pada tampilan website user.
