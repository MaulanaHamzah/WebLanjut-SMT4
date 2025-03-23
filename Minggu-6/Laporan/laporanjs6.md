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

<img src="image/p1.2-1.png">

<img src="image/p1.2-2.png">

3. Selanjutnya Kita modifikasi view user/index.blade.php, kita tambahkan tombol untuk
membuat form popup ajax.
Kita tambahkan kode berikut, untuk membuat form modal tambah data user dengan ajax

<img src="image/p1.3.png">

4. Selanjutnya kita tambahkan kode berikut pada akhir @section(‘content’) pada view
user/index.blade.php

<img src="image/p1.4.png">

5. Kemudian kita tambahkan kode berikut pada awal @push(‘js’) pada view
user/index.blade.php
Sehingga tampilan kode program akan seperti berikut

<img src="image/p1.5.png">

6. Selanjutkan Kita modifikasi route/web.php untuk mengakomodir operasi ajax

<img src="image/p1.6.png">

7. Kemudian Kita tambahkan fungsi create_ajax() pada file UserController.php

<img src="image/p1.7.png">

8. Setelah itu, kita buat view baru user/create_ajax.blade.php untuk menampilkan form
dengan ajax

<img src="image/p1.8.png">

9. Kemudian untuk mengakomodir proses simpan data melalui ajax, kita buat fungsi
store_ajax() pada UserController.php

<img src="image/p1.9.png">

10. OK, sekarang kita coba melakukan proses tambah data user menggunakan form ajax.
Amati apa yang terjadi dan laporankan pada laporan jobsheet dan commit di github
kalian!!!

<img src="image/p1.10-1.png">

<img src="image/p1.10-2.png">

# Praktikum 2. Modal Ajax Edit Data (Data User)
1. Pada Praktikum 2 ini, kita akan melakukan koding untuk proses edit menggunakan ajax.
2. Pertama-tama, kita ubah dulu fungsi list() pada UserController.php untuk mengganti
tombol edit untuk bisa menggunakan modal

<img src="image/p2.2.png">

3. Selanjutnya kita modifikasi routes/web.php untuk mengakomodir request edit
menggunakan ajax

<img src="image/p2.3.png">

4. Kemudian, kita buat fungsi edit_ajax() pada UserController.php

<img src="image/p2.4.png">

5. Kita buat view baru pada user/edit_ajax.blade.php untuk menampilkan form view
ajax

<img src="image/p2.5.png">

6. Selanjutnya, kita buat fungsi update_ajax() pada UserController.php untuk
mengakomodir request update data user melalui ajax

<img src="image/p2.6.png">

7. Sekarang kita coba bagian edit user, amati proses nya. Jangan lupa laporkan dan commit
ke repository git kalian !

<img src="image/p2.7-1.png">

<img src="image/p2.7-2.png">

# Praktikum 3. Modal Ajax Hapus Data (Data User)
1. Pada Praktikum 3 ini, kita akan melakukan koding untuk proses hapus menggunakan ajax.
2. Pertama-tama, kita ubah dulu routes/web.php untuk mengakomodir request halaman
konfirmasi untuk menghapus data

<img src="image/p3.2.png">

3. Kemudian kita buat fungsi confirm_ajax() pada UserController.php

<img src="image/p3.3.png">

4. Selanjutnya kita view untuk konfirmasi hapus data dengan nama
user/confirm_ajax.blade.php

<img src="image/p3.4.png">

5. Kemudian kita buat fungsi delete_ajax() pada UserController.php untuk
mengakomodir request hapus data user

<img src="image/p3.5.png">

6. Setelah semua selesai, mari kita coba untuk melakukan percobaan dari koding yang telah
kita lakukan.

<img src="image/p3.6-1.png">

<img src="image/p3.6-2.png">

7. Jangan lupa laporkan ke laporan jobsheet dan lakukan commit pada repository git
kalian.!!!