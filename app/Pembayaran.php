<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pembayaran extends Model
{
    protected $table = "pembayaran";
    protected $primaryKey = "id_pembayaran";
    public $timestamps=false;
    protected $fillable=['id_pembayaran','id_petugas','nisn','tgl_bayar','bulan_bayar','tahun_bayar','id_spp','jumlah_bayar'];
    function code()
    {
        $db = DB::table('pembayaran')->orderBy('id_pembayaran','DESC')->first();
        // return '11800'.$kodeotomatis;
        $kode = ($db->id_pembayaran + 1);
        // dd($kode);
        return $kode;
    }

}
