<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table = "layanan";
    protected $fillable = ['id_layanan', 'nama_layanan', 'deskripsi_layanan', 'foto_layanan', 'harga_layanan'];
}
