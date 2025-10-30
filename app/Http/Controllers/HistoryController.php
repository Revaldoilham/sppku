<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembayaran;

class HistoryController extends Controller
{
    public function index()
    {
        $data['pembayaran'] = Pembayaran::all();
        return view('history.index', $data);
    }
    public function show( $id)
    {
        $data['pembayaran'] = Pembayaran::find($id);
        return view('history.show', $data);
    }
}
