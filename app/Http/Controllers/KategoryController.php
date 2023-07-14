<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategory;
use App\Http\Requests\StoreKategoryRequest;
use App\Http\Requests\UpdateKategoryRequest;

class KategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listKategori = Kategory::all();
        return view('dashboard.kategori', [
            'listKategori' => $listKategori,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.tambah_kategori');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        Kategory::create([
            'nama_kategori' => $r->nama_kategori,
        ]);

        return redirect('/kategori');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategory $kategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategori = Kategory::where('id', $id)->first();
        return view('dashboard.edit_kategori', [
            'kategori' => $kategori,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $kat = Kategory::where('id', $request->id)->first();
        $kat->nama_kategori = $request->nama_kategori;
        $kat->save();

        return redirect('/kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $kat = Kategory::where('id', $id)->first();

        $kat->delete();

        return redirect('/kategori');
    }
}
