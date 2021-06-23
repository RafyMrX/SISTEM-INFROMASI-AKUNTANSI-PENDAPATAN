<?php

namespace App\Http\Controllers;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class AdmHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $t_berhasil = Pemesanan::where('status_pemesanan',1)->count();
        $t_pending = Pemesanan::where('status_pemesanan',0)->count();
        $t_pendapatan = Pemesanan::where('status_pemesanan',1)->sum('total');

        $last_order = Pemesanan::where('status_pemesanan',1)->latest()->limit(5)->get();    

        $cart_pendapatan = Pemesanan::select('status_pemesanan',\DB::raw("SUM(IF(MONTHNAME(created_at) = MONTHNAME(created_at), total, 0)) AS hasil"))->groupBy(\DB::raw("Month(created_at), status_pemesanan"))->having('status_pemesanan',1)->pluck('hasil');


         $tanggal = Pemesanan::distinct()->select(\DB::raw("MONTHNAME(created_at) as tgl"))->where('status_pemesanan',1)->pluck('tgl');    

         $t_lababersih =  Pemesanan::select(\DB::raw('(total*0.1)+4000 as lababersih'))->where('status_pemesanan',1)->pluck('lababersih')->toArray();
         $total = array_sum($t_lababersih);

        return view('admin.home.index',compact('t_berhasil','t_pending','t_pendapatan', 'last_order', 'cart_pendapatan', 'tanggal','total'));
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
