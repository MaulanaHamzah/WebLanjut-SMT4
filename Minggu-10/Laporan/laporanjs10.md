<div style="text-align: center;">
  <img src="image/LogoPolinema.jpg" width="200">
</div>

<h1 style="text-align: center;">JOBSHEET 10 - RESTFUL API</h1>

<p style="text-align: center;">Nama: Achmad Maulana Hamzah</p>
<p style="text-align: center;">NIM: 2341720172</p>
<p style="text-align: center;">Kelas: TI 2A</p>

# Praktikum 1 – Membuat RESTful API Register
1. Sebelum memulai membuat REST API, terlebih dahulu download aplikasi Postman di
https://www.postman.com/downloads.

<img src="image/p1.1.png">

Aplikasi ini akan digunakan untuk mengerjakan semua tahap praktikum pada Jobsheet
ini.
2. Lakukan instalasi JWT dengan mengetikkan perintah berikut:
composer require tymon/jwt-auth:2.1.1
Pastikan Anda terkoneksi dengan internet.

<img src="image/p1.2.png">

3. Setelah berhasil menginstall JWT, lanjutkan dengan publish konfigurasi file dengan
perintah berikut:
php artisan vendor:publish --
provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"

<img src="image/p1.3.png">

4. Jika perintah di atas berhasil, maka kita akan mendapatkan 1 file baru yaitu
config/jwt.php. Pada file ini dapat dilakukan konfigurasi jika memang diperlukan.

<img src="image/p1.4.png">

5. Setelah itu jalankan peintah berikut untuk membuat secret key JWT.
php artisan jwt:secret
Jika berhasil, maka pada file .env akan ditambahkan sebuah baris berisi nilai key
JWT_SECRET.

<img src="image/p1.5.png">

6. Selanjutnya lakukan konfigurasi guard API. Buka config/auth.php. Ubah bagian
‘guards’ menjadi seperti berikut.

<img src="image/p1.6.png">

7. Kita akan menambahkan kode di model UserModel, ubah kode seperti berikut:

<img src="image/p1.7.png">

8. Berikutnya kita akan membuat controller untuk register dengan menjalankan peintah
berikut.
php artisan make:controller Api/RegisterController
Jika berhasil maka akan ada tambahan controller pada folder Api dengan nama
RegisterController.

<img src="image/p1.8.png">

9. Buka file tersebut, dan ubah kode menjadi seperti berikut.

<img src="image/p1.9.png">

10. Selanjutnya buka routes/api.php, ubah semua kode menjadi seperti berikut.

<img src="image/p1.10.png">

11. Jika sudah, kita akan melakukan uji coba REST API melalui aplikasi Postman.
Buka aplikasi Postman, isi URL localhost/PWL_POS/public/api/register serta method
POST. Klik Send.

<img src="image/p1.11.png">

12. Jika berhasil akan muncul error validasi seperti gambar di atas.
Lakukan percobaan yang sama dan berikan screenshoot hasil percobaan Anda.
Setelah klik tombol Send, jika berhasil maka akan keluar pesan sukses seperti gambar
di atas.

<img src="image/p1.12.png">

Lakukan percobaan yang sama dan berikan screenshoot hasil percobaan Anda.
13. Lakukan commit perubahan file pada Github.