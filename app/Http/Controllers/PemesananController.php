<?php

namespace App\Http\Controllers;
use App\Models\generateKode;
use App\Models\Pemesanan;
use App\Models\Layanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $layanan = Layanan::where('id_layanan', $id)->get(); 
        return view('public.pemesanan.index', compact('layanan'));
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
        $generate = new generateKode();
        $kode = $generate->KodePemesanan();

            $nominal = $request->input('total');
            $sub = substr($nominal,-3);
            $sub2 = substr($nominal,-2);
            $sub3 = substr($nominal,-1);
 
            $total =  rand(0, 999);
            $total2 =  rand(0, 99);
            $total3 =  rand(0, 9);

                if($sub==0){
                    $hasil =  $nominal + $total; 

                }if($sub2 == 0){
                    $hasil = $nominal + $total2; 

                }if($sub3 == 0){
                    $hasil = $nominal + $total3; 

                }

        $request->validate(
            [
                'nama' => 'required',
                'alamat' => 'required',
                'tlp' => 'required',
            ]
        );

        $pemesanan = Pemesanan::create(
            [
                'id_pemesanan' => $kode,
                'id_konsumen' => $request->input('id_user'),
                'id_layanan' => $request->input('id_layanan'),
                'nama' => $request->input('nama'),
                'alamat_pemesanan' => $request->input('alamat'),
                'tlp' => $request->input('tlp'),
                'waktu_pemesanan' => $request->input('jam'),
                'waktu_kunjungan' => $request->input('tgl'),
                'status_pemesanan' => '0',
                'total' => $hasil,
            ]

        );
        return redirect('/nota-pemesanan/'.$kode.'')->with('success', 'Berhasil Melakukan Pemesanan');        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemesanan $pemesanan)
    {
        //
    }
}
