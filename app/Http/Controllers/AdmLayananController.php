<?php

namespace App\Http\Controllers;

use App\Models\generateKode;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdmLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //DB Layanan
        $layanan = Layanan::All();
        $count = Layanan::All()->count();

        return view('admin.layanan.index', compact('layanan', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generateKode = new generateKode();
        $kode =  $generateKode->KodeLayanan();

        //DB Layanan
        $layanan = Layanan::All();

        return view('admin.layanan.tambah', compact('kode', 'layanan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namalayanan' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]);

        Layanan::create([
            'id_layanan' => $request->input('kode'),
            'nama_layanan' => $request->input('namalayanan'),
            'deskripsi_layanan' => $request->input('deskripsi'),
            'foto_layanan' => $request->file('gambar')->store('image'),
            'harga_layanan' => $request->input('harga'),
        ]);
        return redirect('/layanan');
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
        $layanan = Layanan::where('id_layanan', $id)->get();
        return view('admin.layanan.edit', compact('layanan'));
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

        $request->validate([
            'namalayanan' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]);

        if ($request->file('gambar')) {
            $gambar = $request->file('gambar')->store('image');
            $data = Layanan::where('id_layanan', $request->input('kode'))->first();
            if (!empty($data->gambar)) {
                $test = Storage::delete($data->gambar);
                $hasil = $gambar;
                Layanan::where('id_layanan', $request->input('kode'))
                    ->update([
                        'id_layanan' => $request->input('kode'),
                        'nama_layanan' => $request->input('namalayanan'),
                        'deskripsi_layanan' => $request->input('deskripsi'),
                        'foto_layanan' => $hasil,
                        'harga_layanan' => $request->input('harga'),
                    ]);
            } else {
                $hasil = $gambar;
                Layanan::where('id_layanan', $request->input('kode'))
                    ->update([
                        'id_layanan' => $request->input('kode'),
                        'nama_layanan' => $request->input('namalayanan'),
                        'deskripsi_layanan' => $request->input('deskripsi'),
                        'foto_layanan' => $hasil,
                        'harga_layanan' => $request->input('harga'),
                    ]);
            }
        } else {
            $data = Layanan::where('id_layanan', $request->input('kode'))->first();
            Layanan::where('id_layanan', $request->input('kode'))
                ->update([
                    'id_layanan' => $request->input('kode'),
                    'nama_layanan' => $request->input('namalayanan'),
                    'deskripsi_layanan' => $request->input('deskripsi'),
                    'gambar' => $data->gambar,
                    'harga_layanan' => $request->input('harga'),
                ]);
        }
        return redirect('/layanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Layanan::where('id_layanan', $id)->delete();
        return redirect('/layanan');
    }
}
