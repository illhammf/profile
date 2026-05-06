<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    //
    protected $fillable = [
        'nama',
        'email',
        'alamat',
        'no_telepon',
        'kebutuhan',
    ];

    protected $guarded = ['id'];

}
