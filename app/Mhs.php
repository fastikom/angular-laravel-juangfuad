<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mhs extends Model
{
    protected $fillable = array('id', 'NIM', 'nama', 'alamat');
}
