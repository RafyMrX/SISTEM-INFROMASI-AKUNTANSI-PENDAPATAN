<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class AdmPemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //DB Pemesanan
        $pemesanan = Pemesanan::All();
        return view('admin.pemesanan.index', compact('pemesanan'));
    }
    public function detail($id)
    {
        //DB Pemesanan
        $detail = Pemesanan::where('id_pemesanan', $id)->get();
        return view('admin.pemesanan.detail', compact('detail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bukti($id)
    {
        $data = Transaksi::where('id_transaksi',$id)->get();
        return view('admin.pemesanan.bukti', compact('data'));
    }

      public function confirm($id)
    {
         $pemesanan = Pemesanan::where("id_pemesanan", $id)->update(
            [
                'status_pemesanan' => 1,
            ]
            );

          return redirect('/admpemesanan')->with('success', 'Berhasil Konfirmasi');  
    }

          public function tolak($id)
    {
         $pemesanan = Pemesanan::where("id_pemesanan", $id)->update(
            [
                'status_pemesanan' => 3,
            ]
            );

          return redirect('/admpemesanan')->with('success', 'Pesanan Ditolak');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
