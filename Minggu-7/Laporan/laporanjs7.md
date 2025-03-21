<div style="text-align: center;">
  <img src="image/LogoPolinema.jpg" width="200">
</div>

<h1 style="text-align: center;">JOBSHEET 07 - 
Authentication dan Authorization di Laravel</h1>

<p style="text-align: center;">Nama: Achmad Maulana Hamzah</p>
<p style="text-align: center;">NIM: 2341720172</p>
<p style="text-align: center;">Kelas: TI 2A</p>

# Praktikum 1 – Implementasi Authentication
1. Kita buka project laravel PWL_POS kita, dan kita modifikasi konfigurasi aplikasi kita di
config/auth.php
Pada bagian ini kita sesuaikan dengan Model untuk tabel m_user yang sudah kita buat
2. Selanjutnya kita modifikasi sedikit pada UserModel.php untuk bisa melakukan proses
otentikasi
3. Selanjutnya kita buat AuthController.php untuk memproses login yang akan kita
lakukan
4. Setelah kita membuat AuthController.php, kita buat view untuk menampilkan halaman
login. View kita buat di auth/login.blade.php , tampilan login bisa kita ambil dari
contoh login di template AdminLTE seperti berikut (pada contoh login ini, kita
gunakan page login-V2 di AdminLTE)
5. Kemudian kita modifikasi route/web.php agar semua route masuk dalam auth
6. Ketika kita coba mengakses halaman localhost/PWL_POS/public makan akan tampil
halaman awal untuk login ke aplikasi