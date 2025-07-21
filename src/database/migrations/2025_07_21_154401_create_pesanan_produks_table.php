<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pesanan_produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pembeli');
            $table->foreignId('produk_id')->constrained('products')->onDelete('cascade');
            $table->integer('qty');
            $table->decimal('total_harga', 12, 2);
            $table->date('tanggal');
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pesanan_produks');
    }
};
