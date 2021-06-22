<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanan';
    protected $guarded = ['created_at', 'updated_at'];

    public function Layanan(){
    	return $this->belongsTo(Layanan::class,'id_layanan','id_layanan');
    }

    public function Transaksi(){

    	return $this->belongsTo(Transaksi::class,'id_pemesanan','id_pemesanan');

    }

}
