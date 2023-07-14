@extends('template')

@section('content')
<div class="container-fluid">
    <h3 class="text-dark mb-4">Edit Kategori</h3>
    <div class="row mb-3">
        <div class="col-lg-8">
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <form action="/edit-kategori" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $kategori->id }}">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="jumlahbarang"><strong>Nama Kategori</strong></label>
                                        <input class="form-control" type="text" id="jumlahbarang" placeholder="Masukkan Nama Kategori" name="nama_kategori" value="{{ $kategori->nama_kategori }}"></div>
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