<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //protected $fillable=['nama','alamat','tlp'];
    //izin semua bisa isi
    protected $guarded=[];
}
