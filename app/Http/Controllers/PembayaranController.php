<?php

namespace App\Http\Controllers;
use App\Pembayaran;
use App\Petugas;
use App\Spp;
use App\Siswa;
use Auth;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pembayaran::all();
        return view('pembayaran.index',['pembayaran'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['spp']=Spp::get();
        $data['petugas']=Petugas::get();
        $data['siswa']= Siswa::get();
        $dataaaa = Pembayaran::first();
        return view('pembayaran.create',$data, compact('dataaaa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_pemb = new \App\Pembayaran;
        $new_pemb->id_pembayaran = $request->get('id_pembayaran');
        $new_pemb->id_petugas = Auth::user()->id;
        $new_pemb->nisn = $request->get('nisn');
        $new_pemb->tgl_bayar = $request->get('tgl_bayar');
        $new_pemb->bulan_bayar = $request->get('bulan_bayar');
        $new_pemb->tahun_bayar = $request->get('tahun_bayar');
        $new_pemb->id_spp = $request->get('id_spp');
        $new_pemb->jumlah_bayar = $request->get('jumlah_bayar');
        $new_pemb->save();
        return redirect()->route('pembayaran.index')->with('status','Berhasil');
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
        $data['siswa']= Siswa::get();
        $data['petugas']=Petugas::get();
        $data['spp']=Spp::get();
        $data['pembayaran']=Pembayaran::find($id);
        return view('pembayaran.edit',$data);
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
        $pemb = Pembayaran::find($id);
        $pemb->fill($request->all());
        $pemb->update();
        return redirect('pembayaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pembayaran::find($id)->delete();
        return redirect('pembayaran');
    }
    public function cari( Request $request)
    {
        $nisn = $request->get('nisn');
        $isi = Siswa::where('nisn','=',$nisn)->first();
        if(empty($isi)){
            $data['val'] = 0;
        } else {
            $data ['val'] = 1;
            $data ['data'] = $isi;
        }

        return response()->json($data,200);
    }
}
