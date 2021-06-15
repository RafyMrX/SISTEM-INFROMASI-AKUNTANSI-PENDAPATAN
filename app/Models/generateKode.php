<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class generateKode extends Model
{
    public function KodeLayanan()
    {
        $layanan = Layanan::orderBy('id_layanan', 'desc')->first();

        if (empty($layanan)) {
            $format = "L0001";
        } else {
            $kode = $layanan->id_layanan;
            $num = substr($kode, 1, 4);
            $add = (int) $num + 1;
            if (strlen($add) == 1) {
                $format = "L000" . $add;
            } else if (strlen($add) == 2) {
                $format = "L00" . $add;
            } else if (strlen($add) == 3) {
                $format = "L0" . $add;
            } else {
                $format = "L" . $add;
            }
        }
        return $format;
    }

    public function KodeAnggota()
    {
        $anggota = Anggota::orderBy('id_anggota', 'desc')->first();

        if (empty($anggota)) {
            $format = "A0001";
        } else {
            $kode = $anggota->id_anggota;
            $num = substr($kode, 1, 4);
            $add = (int) $num + 1;
            if (strlen($add) == 1) {
                $format = "A000" . $add;
            } else if (strlen($add) == 2) {
                $format = "A00" . $add;
            } else if (strlen($add) == 3) {
                $format = "A0" . $add;
            } else {
                $format = "A" . $add;
            }
        }
        return $format;
    }
}
