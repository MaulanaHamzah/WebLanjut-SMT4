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

<img src="image/p1.1.png">

2. Selanjutnya kita modifikasi sedikit pada UserModel.php untuk bisa melakukan proses
otentikasi

<img src="image/p1.2.png">

3. Selanjutnya kita buat AuthController.php untuk memproses login yang akan kita
lakukan

<img src="image/p1.3.png">

4. Setelah kita membuat AuthController.php, kita buat view untuk menampilkan halaman
login. View kita buat di auth/login.blade.php , tampilan login bisa kita ambil dari
contoh login di template AdminLTE seperti berikut (pada contoh login ini, kita
gunakan page login-V2 di AdminLTE)

<img src="image/p1.4.png">

5. Kemudian kita modifikasi route/web.php agar semua route masuk dalam auth

<img src="image/p1.5.png">

6. Ketika kita coba mengakses halaman localhost/PWL_POS/public makan akan tampil
halaman awal untuk login ke aplikasi

<img src="image/p1.6.png">

# Praktikum 2 – Implementasi Authorizaton di Laravel dengan Middleware
1. Kita modifikasi UserModel.php dengan menambahkan kode berikut

<img src="image/p2.1.png">

2. Kemudian kita buat middleware dengan nama AuthorizeUser.php. Kita bisa buat
middleware dengan mengetikkan perintah pada terminal/CMD
php artisan make:middleware AuthorizeUser
File middleware akan dibuat di app/Http/Middleware/AuthorizeUser.php
3. Kemudian kita edit middleware AuthorizeUser.php untuk bisa mengecek apakah
pengguna yang mengakses memiliki Level/Role/Group yang sesuai

<img src="image/p2.3.png">

4. Kita daftarkan ke app/Http/Kernel.php untuk middleware yang kita buat barusan

<img src="image/p2.4.png">

5. Sekarang kita perhatikan tabel m_level yang menjadi tabel untuk menyimpan
level/group/role dari user ada
6. Untuk mencoba authorization yang telah kita buat, maka perlu kita modiifikasi
route/web.php untuk menentukan route mana saja yang akan diberi hak akses sesuai
dengan level user

<img src="image/p2.6.png">

Pada kode yang ditandai merah, terdapat authorize:ADM . Kode ADM adalah nilai dari
level_kode pada tabel m_level. Yang artinya, user yang bisa mengakses route untuk
manage data level, adalah user yang memiliki level sebagai Administrator.

7. Untuk membuktikannya, sekarang kita coba login menggunakan akun selain level
administrator, dan kita akses route menu level tersebut

<img src="image/p2.7.png">

# Praktikum 3 – Implementasi Multi-Level Authorizaton di Laravel dengan Middleware
1. Kita modifikasi UserModel.php untuk mendapatkan level_kode dari user yang sudah
login. Jadi kita buat fungsi dengan nama getRole()

<img src="image/p2.1.png">

2. Selanjutnya, Kita modifikasi middleware AuthorizeUser.php dengan kode berikut

<img src="image/p2.3.png">

3. Setelah itu tinggal kita perbaiki route/web.php sesuaikan dengan role/level yang
diinginkan. Contoh

<img src="image/p2.6.png">

4. Sekarang kita sudah bisa memberikan hak akses menu/route ke beberapa level user