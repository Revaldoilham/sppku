<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Siswa extends Model
{
    protected $table = "siswa";
    protected $primaryKey = "nisn";
    public $timestamps=false;
    protected $fillable=['nisn','nis','nama','id_kelas','alamat','no_telp','id_spp'];

    function code()
    {
    	$db = DB::table('siswa')->orderBy('nisn','DESC')->first();
    	$kode = ($db->nisn + 1);
    	return $kode;
    }
    function code2()
    {
    	$db = DB::table('siswa')->orderBy('nis','DESC')->first();
    	$kode = ($db->nis + 1);
    	return $kode;
    }

}
