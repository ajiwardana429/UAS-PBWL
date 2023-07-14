@extends('template')

@section('content')
<div class="container-fluid">
    <h3 class="text-dark mb-4">Barang Masuk</h3>
    <div class="row mb-3">
        <div class="col-lg-8">
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <form action="/in-barang" method="post">
                                {{ csrf_field() }}
                                
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="kodebarang"><strong>Kode Barang</strong></label>
                                        <select class="form-control" type="text" id="kodebarang" name="kode_barang">
                                            @foreach ($listBarang as $barang)
                                                <option value="{{ $barang->id }}">{{ $barang->nama_barang }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="jumlahbarang"><strong>Jumlah Barang Masuk</strong></label>
                                        <input class="form-control" type="text" id="jumlahbarang" placeholder="Masukkan Jumlah Barang Masuk" name="jumlah_barang"></div>
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