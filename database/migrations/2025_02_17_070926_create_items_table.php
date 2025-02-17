<?php

use Illuminate\Database\Migrations\Migration; // digunakan untuk mengimpor kelas Migration dari namespace Illuminate\Database\Migrations.
use Illuminate\Database\Schema\Blueprint; // berfungsi untuk mengimpor kelas Blueprint dari namespace Illuminate\Database\Schema.
use Illuminate\Support\Facades\Schema; // berfungsi untuk mengimpor kelas Schema dari namespace Illuminate\Support\Facades.

return new class extends Migration // membuat instance dari kelas Migration.
{
    /**
     * Run the migrations.
     */
    public function up(): void // method up() akan dijalankan ketika migrasi dijalankan.
    {
        Schema::create('items', function (Blueprint $table) { // membuat tabel items.
            $table->id(); // membuat kolom id yang berfungsi sebagai primary key.
            $table->string('name'); // membuat kolom name dengan tipe data string.
            $table->text('description'); // membuat kolom description dengan tipe data text.
            $table->timestamps(); // membuat kolom created_at dan updated_at yang berfungsi untuk menyimpan waktu ketika data dibuat dan diupdate.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void // method down() akan dijalankan ketika migrasi di-rollback.
    {
        Schema::dropIfExists('items'); // menghapus tabel items.
    }
};
