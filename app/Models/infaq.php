<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infaq extends Model
{
    use HasFactory;

    protected $table = 'infaq';

    protected $fillable = [
        'nama',
        'email',
        'id_user',
        'jumlah',
        'status',
        'bukti',
        'anon',
        'updated_at',
        'created_at'
    ];
}
