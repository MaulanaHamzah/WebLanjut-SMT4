<!DOCTYPE html> <!-- Menentukan bahwa halaman ini merupakan halaman HTML -->
<html>
    <head>
        <title>Item List</title> <!-- Menentukan judul halaman yang akan ditampilkan di tab browser -->
    </head>
    <body>
        <h1>Items</h1> <!-- Menampilkan judul halaman -->
        @if(session('success')) <!-- Menampilkan pesan sukses jika ada -->
            <p>{{ session('success') }}</p> <!-- Menampilkan pesan sukses -->
        @endif <!-- Akhir dari menampilkan pesan sukses jika ada -->
        <a href="{{ route('items.create') }}">Add Item</a> <!-- Menampilkan link untuk menambahkan item -->
        <ul> <!-- Membuat list -->
            @foreach ($items as $item) <!-- Melakukan perulangan untuk menampilkan data item -->
                <li> <!-- Membuat list item -->
                    {{ $item->name }} - <!-- Menampilkan nama item -->
                    <a href="{{ route('items.edit', $item) }}">Edit</a> <!-- Menampilkan link untuk mengedit item -->
                    <form action="{{ route('items.destroy', $item) }}" method="POST" style="display:inline;"> <!-- Membuat form untuk menghapus item -->
                        @csrf <!-- Membuat token untuk validasu form -->
                        @method ('DELETE') <!-- Menentukan method form -->
                        <button type="submit">Delete</button> <!-- Membuat tombol untuk menghapus item -->
                    </form>
                </li>
            @endforeach <!-- Akhir dari perulangan untuk menampilkan data item -->
        </ul>
    </body>
</html>