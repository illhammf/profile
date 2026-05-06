<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pelanggan;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Pelanggan::firstOrCreate([
            'nama' => 'Budi Santoso',
            'email' => 'budi.santoso@gmail.com',
            'alamat' => 'Jl. Sudirman No. 456',
            'no_telepon' => '081234567891',
            'kebutuhan' => 'Pembelian produk',
        ]);
    }
}
