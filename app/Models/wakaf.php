<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wakaf extends Model
{
    use HasFactory;

    protected $table = 'wakaf';

    protected $fillable = [
        'nama',
        'email',
        'id_user',
        'nama_barang',
        'deskripsi_barang',
        'tanggal_pemberian',
        'nomer_dihubungi',
        'bukti',
        'status',
        'updated_at',
        'created_at'
    ];
}
