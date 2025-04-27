<div style="text-align: center;">
  <img src="image/LogoPolinema.jpg" width="200">
</div>

<h1 style="text-align: center;">JOBSHEET 10 - RESTFUL API</h1>

<p style="text-align: center;">Nama: Achmad Maulana Hamzah</p>
<p style="text-align: center;">NIM: 2341720172</p>
<p style="text-align: center;">Kelas: TI 2A</p>

# Praktikum 1 – Implementasi Eloquent Accessor
1. Sebelum memulai pastikan REST API, terlebih dahulu pastikan sudah ter instal aplikasi
Postman.

<img src="image/p1.1.png" width="500">

2. Kita akan memodifikasi Table m_user dengan menambahkan column : image, buka
terminal lalu ketikkan
php artisan make:migration add_image_to_m_user_table

<img src="image/p1.2.png">

3. Buka file migrasi tersebut lalu modifikasi seperti ini lalu simpan:

<img src="image/p1.3.png">

4. Lakukan jalankan update migrasi dengan cara:
php artisan migrate

<img src="image/p1.4.png">

5. Lalu lakukan modifikasi models pada App/Models/UserModel.php

<img src="image/p1.5-1.png">

<img src="image/p1.5-2.png">

6. Lakukan modifikasi pada Controllers/Api/RegisterController

<img src="image/p1.6.png">

7. Anda dapat menambahkan detail untuk spesifikasi image pada validator

<img src="image/p1.7.png">

8. Ubah atau tambahkan register1 pada routes/api.php

<img src="image/p1.8.png">

9. Simpan dan akses pada aplikasi Postman, atur pada Body isi manual Key dan Valuenya
pada Key image tambahkan value File dan upload gambar
http://127.0.0.1:8000/api/register1 dengan method POST dan klik send

<img src="image/p1.9.png">

10. Pada Controllers/Api/RegisterController bagian create user ganti dengan
11. Uji coba dan screenshot hasilnya apa perbedaan dari yang sebelumnya