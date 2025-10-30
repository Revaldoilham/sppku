<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kelas extends Model
{
    protected $table = "kelas";
    protected $primaryKey = "id_kelas";
    public $timestamps=false;
    protected $fillable=['id_kelas','nama_kelas','kompetensi_keahlian'];

    function code()
    {
    	$db = DB::table('kelas')->orderBy('id_kelas','DESC')->first();
    	$kode = ($db->id_kelas + 1);
    	return $kode;
    }
}
