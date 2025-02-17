<!DOCTYPE html>
<html>
<head>
<title>Add Item</title> <!-- Menentukan judul halaman yang akan ditampilkan di tab browser -->
</head>
<body>
<h1>Add Item</h1> <!-- Menampilkan judul halaman -->
<form action="{{ route('items.store') }}" method="POST"> <!-- Membuat form untuk menambahkan item -->
@csrf <!-- Membuat token untuk validasi form -->
<label for="name">Name : <!-- Menampilkan label untuk input name -->
<input type="text" name="name" required> <!-- Membuat input text untuk name -->
<br>
<label for="description">Description : <!-- Menampilkan label untuk input description -->
<textarea name="description" required></textarea> <!-- Membuat input textarea untuk description -->
<br>
<button type="submit">Add Item</button> <!-- Membuat tombol untuk menambahkan item -->
</form>
<a href="{{ route('items.index') }}">Back to List</a> <!-- Menampilkan link untuk kembali ke halaman list item -->
</body>
</html>