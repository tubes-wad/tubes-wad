<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksiCrowdfunding extends Model
{
    use HasFactory;

    protected $table = 'transaksiCrowdfunding';

    protected $fillable = [
        'nama',
        'email',
        'id_user',
        'jumlah',
        'status',
        'bukti',
        'anon',
        'id_crowdfunding',
        'message',
        'updated_at',
        'created_at'
    ];
}
