<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Petugas extends Model
{
    protected $table = "petugas";
    protected $primaryKey = "id_petugas";
    public $timestamps=false;
    protected $fillable=['id_petugas','username','password','nama_petugas','level'];

    function code()
    {
    	$db = DB::table('petugas')->orderBy('id_petugas','DESC')->first();
    	$kode = ($db->id_petugas + 1);
    	return $kode;
    }
}
