@extends('template')

@section('content')
<div class="container-fluid">
    <h3 class="text-dark mb-4">Update User</h3>
    <div class="row mb-3">
        <div class="col-lg-8">
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <form action="/update-user" method="post">
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="kodebarang"><strong>Nama User</strong></label>
                                        <input class="form-control" type="text" id="kodebarang" placeholder="Masukkan Nama User" name="nama_user" value="{{ $user->name }}"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="namabarang"><strong>Email</strong></label>
                                        <input class="form-control" type="email" id="namabarang" placeholder="Masukkan Email" name="email" value="{{ $user->email }}"></div>
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