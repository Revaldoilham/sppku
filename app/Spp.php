<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Spp extends Model
{
    protected $table = "spp";
    protected $primaryKey = "id_spp";
    public $timestamps=false;
    protected $fillable=['id_spp','tahun','nominal'];
    function code()
    {
    	$db = DB::table('spp')->orderBy('id_spp','DESC')->first();
    	$kode = ($db->id_spp + 1);
    	return $kode;
    }
}
