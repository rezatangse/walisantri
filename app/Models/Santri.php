<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'nis',
        'kelas',
        'angkatan',
        'tanggal_lahir',
        'alamat',
        'nama_wali',
        'kontak_wali',
        'status',
    ];
}
