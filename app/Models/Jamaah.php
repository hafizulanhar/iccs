<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jamaah extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kk',
        'alamat',
        'jumlahjiwa',
        'golongan',
        'tanggal',
    ];
}
