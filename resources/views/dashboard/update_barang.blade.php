@extends('template')

@section('content')
<div class="container-fluid">
    <h3 class="text-dark mb-4">Tambah Barang</h3>
    <div class="row mb-3">
        <div class="col-lg-8">
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <form action="/update-barang" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $barang->id }}">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="kodebarang"><strong>Kode Barang</strong></label>
                                        <input class="form-control" type="text" id="kodebarang" placeholder="Masukkan Kode Barang" name="kode_barang" value="{{ $barang->kode_barang }}"></div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="namabarang"><strong>Nama Barang</strong></label>
                                        <input class="form-control" type="text" id="namabarang" placeholder="Masukkan Nama Barang" name="nama_barang" value="{{ $barang->nama_barang }}"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="jumlahbarang"><strong>Jumlah Barang</strong></label>
                                        <input class="form-control" type="text" id="jumlahbarang" placeholder="Masukkan Jumlah Barang" name="jumlah_barang" value="{{ $barang->jumlah }}"></div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="hargabarang"><strong>Harga Barang</strong></label>
                                        <input class="form-control" type="text" id="hargabarang" placeholder="Masukkan Harga Barang" name="harga_barang" value="{{ $barang->harga }}"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="kategoribarang"><strong>Kategory</strong></label>
                                        <select class="form-control" id="kategoribarang" name="kategori_barang">
                                            @foreach ($listKategori as $kategori)
                                                <option value="{{ $kategori->id }}" {{ $c = ($kategori->id === $barang->kategory_id)? "selected" : ""}}>{{ $kategori->nama_kategori }}</option>
                                            @endforeach
                                        </select>

                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="distributor"><strong>Distributor</strong></label>
                                        <input class="form-control" type="text" id="distributor" placeholder="Masukkan Nama Distributor" name="distributor" {{ $barang->distributor }}></div>
                                    </div>
                                </div>
                                <button class="btn btn-info text-white">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow mb-5"></div>
</div>
@endsection