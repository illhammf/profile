<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    // Untuk mengizinkan mass assignment pada kolom-kolom berikut
    // mass assignment adalah fitur yang memungkinkan kita untuk mengisi beberapa kolom sekaligus dengan menggunakan array
    protected $fillable = [
        'nama',
        'email',
        'alamat',
        'no_telepon',
        'jabatan',
    ];

    // Untuk melindungi kolom 'id' agar tidak bisa diisi secara massal
    protected $guarded = ['id'];
}
