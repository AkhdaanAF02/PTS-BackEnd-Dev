<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
     use HasFactory;
    protected $Fillable=[
        'nama','email','password','KTP','alamat','nomor telepon'
        ];
}
