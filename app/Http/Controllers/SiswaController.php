<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Kelas;
use App\Spp;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['siswa'] = Siswa::all();
        return view('siswa.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['kelas'] = Kelas::all();
        $data['spp'] = Spp::all();
        $data['siswa'] = Siswa::first();
        return view('siswa.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_siswa = new \App\Siswa;
        $new_siswa->nisn = $request->get('nisn');
        $new_siswa->nis = $request->get('nis');
        $new_siswa->nama = $request->get('nama');
        $new_siswa->id_kelas = $request->get('id_kelas');
        $new_siswa->alamat = $request->get('alamat');
        $new_siswa->no_telp = $request->get('no_telp');
        $new_siswa->id_spp = $request->get('id_spp');
        $new_siswa->save();
        return redirect()->route('siswa.index')->with('status','Berhasil di simpan');
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
        $data['kelas'] = Kelas::all();
        $data['spp'] = Spp::all();
        $data['siswa'] = Siswa::find($id);
        return view('siswa.edit',$data);
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
        $siswa = Siswa::find($id);
        $siswa->fill($request->all());
        $siswa->update();
        return redirect('siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Siswa::find($id)->delete();
        return redirect('siswa');
    }
}
