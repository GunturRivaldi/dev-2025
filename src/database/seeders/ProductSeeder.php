<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Product::firstOrCreate(
        //     ['sku' => 'PRD-001'],
        //     [
        //         'nama_produk' => 'Meja Belajar Minimalis',
        //         'kategori' => 'Furniture',
        //         'stok' => 20,
        //         'harga' => 350000.00,
        //         'deskripsi' => 'Meja belajar kayu jati ukuran 120x60 cm, warna coklat natural.',
        //     ]
        // );
    }
}
