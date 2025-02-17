<!DOCTYPE html>
<html>
<head>
<title>Edit Item</title> <!-- Menentukan judul halaman yang akan ditampilkan di tab browser -->
</head>
<body>
<h1>Edit Item</h1> <!-- Menampilkan judul halaman -->
<form action="{{ route('items.update', $item) }}" method="POST"> <!-- Membuat form untuk mengedit item -->
@csrfc <!-- Membuat token untuk validasi form -->
@method('PUT') <!-- Menentukan method form -->
<label for="name">Name : <!-- Menampilkan label untuk input name -->
<input type="text" name="name" value="{{ $item->name }}" required> <!-- Membuat input text untuk name -->
<br>
<label for="description">Description : <!-- Menampilkan label untuk input description -->
<textarea name="description" required>{{ $item->description }}</textarea> <!-- Membuat input textarea untuk description -->
<br>
<button type="submit">Update Item</button> <!-- Membuat tombol untuk mengupdate item -->
</form>
<a href="{{ route('items.index') }}">Back to List</a> <!-- Menampilkan link untuk kembali ke halaman list item -->
</body>
</html>