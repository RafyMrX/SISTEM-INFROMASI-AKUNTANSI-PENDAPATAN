<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Transaksi;
use App\Models\generateKode;

class KonfirmasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $pemesanan = Pemesanan::where('id_pemesanan', $id)->get();
        return view('public.transaksi.konfirmasi', compact('pemesanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kode = new generateKode();
        $kodetransaksi = $kode->KodeTransaksi();
         $file = $request->file('bukti');
         $id_pemesanan = $request->input('id_pemesanan');
         if($file->getClientOriginalExtension() == "jpg"){
            $transaksi = Transaksi::create(
                [
                    'id_transaksi' => $kodetransaksi,
                    'id_pemesanan' => $request->input('id_pemesanan'),
                    'waktu_transaksi' => date('d-M-Y, H:i:s'),
                    'bukti_transaksi' => $file->store('image'),

                ]

            );

            $pemesanan = Pemesanan::where("id_pemesanan", $id_pemesanan)->update(
            [
                'status_pemesanan' => 2,
            ]

            );
            return redirect('/transaksi')->with('success', 'Berhasil');  
         }else{

            // KURANG INI
             return redirect('/konfirmasi/'.$id_pemesanan.'')->with('warning', 'Ekstensi File Harus JPG');  
         }
              
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pemesanan = Pemesanan::where('id_pemesanan', $id)->get();

        return view('public.pemesanan.nota', compact('pemesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
