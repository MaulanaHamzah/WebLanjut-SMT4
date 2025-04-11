<div style="text-align: center;">
  <img src="image/LogoPolinema.jpg" width="200">
</div>

<h1 style="text-align: center;">JOBSHEET 07 - 
Authentication dan Authorization di Laravel</h1>

<p style="text-align: center;">Nama: Achmad Maulana Hamzah</p>
<p style="text-align: center;">NIM: 2341720172</p>
<p style="text-align: center;">Kelas: TI 2A</p>

# Praktikum 1 – Implementasi Upload File untuk import data
1. Kita buka database yang sudah kita buat sebelumnya, dan kita cek tabel m_kategori dan
m_barang

<b>m_kategori:</b>

<img src="image/p1.1-2.png">

<b>m_barang:</b>

<img src="image/p1.1-1.png">

2. Disini kita akan mencoba untuk memasukkan data ke dalam sistem kita secara banyak.
Kita bisa menggunakan file excel untuk mencoba memasukkan data barang ke dalam
sistem kita. Kita buat template file excel yang akan kita gunakan untuk import data
barang. Contoh kita ingin mengimport 5 data barang sekaligus. Kita simpan ke file excel dengan
nama template_barang.xlsx, dan kita simpan pada folder public di project web kita.

<img src="image/p1.2.png">

3. Selanjutnya kita modifikasi view pada barang/index.blade.php untuk bisa
menambahkan tombol menambah form untuk upload untuk import data barang

<img src="image/p1.3.png">

4. Selanjutnya kita buat view untuk form upload/import file excel dan download file
template_barang.xlsx. Kita beri nama file dengan nama barang/import.blade.php

<img src="image/p1.4.png">

5. Kemudian kita modifikasi route/web.php untuk mengakomodir proses upload file pada
menu barang

<img src="image/p1.5.png">

6. Untuk bisa membaca/menulis file excel, maka kita butuhkan library untuk
membaca/menulis file excel. Jadi kita bisa memakai library phpoffice/phpspreadsheet.
Kita ketikkan perintah di terminal/CMD

composer require phpoffice/phpspreadsheet

7. Selanjutnya kita modifikasi file BarangController.php untuk memproses data

<img src="image/p1.7.png">

8. Sekarang kita coba jalankan browser dan klik tombol import pada menu Barang

<img src="image/p1.8.png">

9. Kita upload template data yang sudah kita siapkan, dan amati apa yang terjadi.

<img src="image/p1.9.png">

# Tugas 1 – Implementasi File Upload untuk Import Data:
1. Silahkan implementasikan praktikum 1 pada project kalian masing-masing untuk semua
menu
2. Amati dan jelaskan tiap tahapan yang kalian kerjakan, dan jabarkan dalam laporan
3. Submit kode untuk impementasi prakktikum 1 pada repository github kalian.

# Praktikum 2 – Export Data ke Excel
1. Kita modifikasi barang/index.blade.php dengan mengganti kode berikut
Kita ubah dengan
Hal ini kita lakukan karena tombol Tambah Data sudah tidak kita gunakan karena kita
sudah menggunakan tombol Tambah Data (Ajax).

<img src="image/p2.1.png">

2. Kemudian kita tambahkan route pada route/web.php untuk bisa memproses export excel

<img src="image/p2.2.png">

3. Selanjutnya kita tambahkan fungsi export_excel() pada file BarangController.php
4. Kita ambil data barang yang akan kita export ke excel (tentu dengan menyertakan relasi
kategori barang)
5. Kemudian kita load library Spreadsheet dan kita tentukan header data pada baris
pertama di excel
6. Selanjutnya, kita looping data yang telah kita dapatkan dari database, kemudian kita
masukkan ke dalam cell excel
7. Kita set lebar tiap kolom di excel untuk menyesuaikan dengan panjang karakter pada
masing-masing kolom
8. Bagian akhir proses export excel adalah kita set nama sheet, dan proses untuk dapat di
download oleh pengguna

<img src="image/p2.8.png">

9. Jika sudah selesai diimplementasikan, kita coba untuk melakukan Download file Export
tersebut.

<img src="image/p2.9.png">

# Tugas 2 – Implementasi File Export Excel:
1. Silahkan implementasikan praktikum 2 pada project kalian masing-masing untuk semua
menu
2. Amati dan jelaskan tiap tahapan yang kalian kerjakan, dan jabarkan dalam laporan
3. Submit kode untuk impementasi prakktikum 2 pada repository github kalian.

# Praktikum 3 – Implementasi Export PDF di Laravel dengan dompdf
1. Kita lakukan proses instalasi library dompdf terlebih dahulu dengan mengetikkan
perintah pada terminal/CMD
composer require barryvdh/laravel-dompdf
2. Setelah proses instalasi dompdf berhasil, selanjutnya Kita tambahkan kode berikut untuk
menambahkan tombol export ke pdf pada barang/index.blade.php

<img src="image/p3.2.png">

3. Setelah itu tinggal kita perbaiki route/web.php untuk proses export pdf

<img src="image/p3.3.png">

4. Selanjutnya, kita buat fungsi export_pdf() pada BarangController.php

<img src="image/p3.4.png">

5. Selanjutnya, kita buat view untuk dijadikan pdf dari layout html. File bisa kita buat
dengan nama barang/export_pdf.blade.php
6. Selanjutnya kita buat view untuk me-generate html untuk tampilan pdf yang akan kita
sajikan. View berada di barang/export_pdf.blade.php
7. Selanjutnya, Kita coba untuk melakukan proses download export pdf. Amati dan
pelajari…!!!

# Tugas 3 – Implementasi Export PDF pada Laravel :
1. Silahkan implementasikan export pdf pada project kalian masing-masing untuk semua
menu
2. Amati dan jelaskan tiap tahapan yang kalian kerjakan, dan jabarkan dalam laporan
3. Submit kode untuk impementasi export pdf pada repository github kalian.