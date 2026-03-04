<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class inventarisbarang extends Model
{
    use HasFactory;
    protected $Fillable=[
        'jenis Iphone','ketersediaan','kondisi barang',
    ];
}
