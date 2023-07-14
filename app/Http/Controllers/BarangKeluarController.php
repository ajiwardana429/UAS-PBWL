<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StockBarang;

class BarangKeluarController extends Controller
{
    public function editBarangKeluar(){
        $listBarang = StockBarang::all();
        return view('dashboard.out_barang', [
            'listBarang' => $listBarang
        ]);
    }

    public function updateBarangKeluar(Request $r){
        $barang = StockBarang::where('id', $r->kode_barang)->first();

        $barang->jumlah -= $r->jumlah_barang;
        $barang->save();

        return redirect('/barang-masuk');
    }
}
