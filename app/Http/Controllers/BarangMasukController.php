<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StockBarang;
use App\Models\Kategory;
use Illuminate\Support\Facades\Auth;

class BarangMasukController extends Controller
{
    public function index(){
        return view('dashboard.stock');
    }

    public function create(){
        $kategory = Kategory::all();
        return view('dashboard.add_barang', [
            'listKategori' => $kategory
        ]);
    }

    public function store(Request $r){
        StockBarang::create([
            'user_id' => Auth::user()->id,
            'kode_barang' => $r->kode_barang,
            'nama_barang' => $r->nama_barang,
            'jumlah' => $r->jumlah_barang,
            'harga' => $r->harga_barang,
            'kategory_id' => $r->kategori_barang,
            'distributor' => $r->distributor
        ]);

        return redirect()->back('/barang-masuk');
    }

    public function edit($id){
        $kategory = Kategory::all();
        $barang = StockBarang::where('id', $id)->first();
        return view('dashboard.update_barang', [
            'barang' => $barang,
            'listKategori' => $kategory
        ]);
    }

    public function update(Request $r){
        $barang = StockBarang::where('id', $r->id)->first();

        $barang->kode_barang = $r->kode_barang;
        $barang->nama_barang = $r->nama_barang;
        $barang->jumlah = $r->jumlah_barang;
        $barang->harga = $r->harga_barang;
        $barang->kategory_id = $r->kategori_barang;
        $barang->distributor = $r->distributor;

        $barang->save();

        return redirect('/barang-masuk');
    }

    public function editBarangMasuk(){
        $listBarang = StockBarang::all();
        return view('dashboard.in_barang', [
            'listBarang' => $listBarang
        ]);
    }

    public function updateBarangMasuk(Request $r){
        $barang = StockBarang::where('id', $r->kode_barang)->first();

        $barang->jumlah += $r->jumlah_barang;
        $barang->save();

        return redirect('/barang-masuk');
    }

    public function delete($id){
        $barang = StockBarang::where('id', $id)->first();
        $barang->delete();

        return redirect('/barang-masuk');
    }
}
