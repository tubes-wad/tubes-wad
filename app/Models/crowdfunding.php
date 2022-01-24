<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crowdfunding extends Model
{
    use HasFactory;

    protected $table = 'crowdfunding';

    protected $fillable = [
        'nama',
        'deskripsi',
        'deadline',
        'tujuan',
        'kategori',
        'gambar',
        'jumlah_uang',
        'status',
        'updated_at',
        'created_at'
    ];
}
