<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rekap extends Model
{
    use HasFactory;
    protected $table = 'rekap';

    protected $fillable = [
        'jumlah',
        'status',
        'updated_at',
        'created_at'
    ];
}
