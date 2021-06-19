<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksi";
    protected $guarded = ['created_at', 'updated_at'];

    public function layanan(){
    	return $this->belongsTo(layanan::class,'id_layanan','id_layanan');
    }

}
