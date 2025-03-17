<div style="text-align: center;">
  <img src="image/LogoPolinema.jpg" width="200">
</div>

<h1 style="text-align: center;">Laporan Jobsheet 6 - Ajax Form (AdminLTE) dan Client Validation</h1>

<p style="text-align: center;">Nama: Achmad Maulana Hamzah</p>
<p style="text-align: center;">NIM: 2341720172</p>
<p style="text-align: center;">Kelas: TI 2A</p>

# Praktikum 1. Modal Ajax Tambah Data (Data User)
1. Kita buat form tambah data baru dengan menerapkan modal dan proses ajax.
2. Pertama yang kita siapkan adalah menambahkan library jQuery Validation dan
Sweetalert ke aplikasi web kita. Caranya kita tambahkan link kedua library tersebut ke
template.blade.php, library sudah disediakan oleh adminLTE.
3. Selanjutnya Kita modifikasi view user/index.blade.php, kita tambahkan tombol untuk
membuat form popup ajax.
Kita tambahkan kode berikut, untuk membuat form modal tambah data user dengan ajax
4. Selanjutnya kita tambahkan kode berikut pada akhir @section(‘content’) pada view
user/index.blade.php
5. Kemudian kita tambahkan kode berikut pada awal @push(‘js’) pada view
user/index.blade.php
Sehingga tampilan kode program akan seperti berikut
6. Selanjutkan Kita modifikasi route/web.php untuk mengakomodir operasi ajax
7. Kemudian Kita tambahkan fungsi create_ajax() pada file UserController.php
8. Setelah itu, kita buat view baru user/create_ajax.blade.php untuk menampilkan form
dengan ajax
9. Kemudian untuk mengakomodir proses simpan data melalui ajax, kita buat fungsi
store_ajax() pada UserController.php
10. OK, sekarang kita coba melakukan proses tambah data user menggunakan form ajax.
Amati apa yang terjadi dan laporankan pada laporan jobsheet dan commit di github
kalian!!!