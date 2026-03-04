<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaksipenyewaan extends Model
{
    use HasFactory;
    protected $Fillable=[
        'penyewa','tanggal sewa','durasi sewa','pembayaran',
    ];
}
