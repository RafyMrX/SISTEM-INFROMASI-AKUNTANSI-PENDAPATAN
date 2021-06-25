<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\generateKode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdmAnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = Anggota::All();
        $count = Anggota::All()->count();
        return view('admin.anggota.index', compact('anggota', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generateKode = new generateKode();
        $kode =  $generateKode->KodeAnggota();

        //DB anggota
        $anggota = Anggota::All();

        return view('admin.anggota.tambah', compact('kode', 'anggota'));
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
            'username' => 'required',
            'password' => 'required|min:8',
            'nama' => 'required',
        ]);
        if ($request->input('jabatan') == "Karyawan") {
            $jabatan = 0;
        } elseif ($request->input('jabatan') == "Manager") {
            $jabatan = 1;
        };
        Anggota::create([
            'id_anggota' => $request->input('kode'),
            'username' => $request->input('username'),
            'nama_anggota' => $request->input('nama'),
            'jabatan' => $request->input('jabatan'),
            'is_admin' => $jabatan,
            'password' => Hash::make($request->input('password'))
        ]);
        return redirect('/anggota')->with('success', 'Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show(Anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Anggota $anggota)
    {
        $anggota = Anggota::where('id_anggota', $id)->get();
        return view('admin.anggota.edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anggota $anggota)
    {
        $request->validate([
            'nama' => 'required'
        ]);
        if ($request->input('jabatan') == "Karyawan") {
            $jabatan = 0;
        } elseif ($request->input('jabatan') == "Manager") {
            $jabatan = 1;
        };
        Anggota::where('id_anggota', $request->input('kode'))->update([
            'username' => $request->input('username'),
            'nama_anggota' => $request->input('nama'),
            'jabatan' => $request->input('jabatan'),
            'is_admin' => $jabatan,
            'password' => Hash::make($request->input('password'))
        ]);
        return redirect('/anggota')->withSuccess('Data Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Anggota $anggota)
    {
        Anggota::where('id_anggota', $id)->delete();
        return redirect('/anggota')->with('success', 'Data Berhasil Dihapus');
    }
}
