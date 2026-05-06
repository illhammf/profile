<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Karyawan;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Karyawan::firstOrCreate([
            'nama' => 'Achmad Rafli',
            'email' => 'achmad.rafli@gmail.com',
            'alamat' => 'Jl. Merdeka No. 123',
            'no_telepon' => '081234567890',
            'jabatan' => 'Marketing Executive',
        ]);
    }
}
