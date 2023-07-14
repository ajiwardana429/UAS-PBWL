@extends('template')

@section('content')
    
<div class="container-fluid">
    <h3 class="text-dark mb-4">Table Stock</h3>
<div class="card shadow">
    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
        <div class="m-2" style="float: right">
            <a href="/in-barang" class="btn btn-secondary text-white">Barang Masuk</a>
            <a href="/out-barang" class="btn btn-secondary text-white">Barang Keluar</a>
            <a href="/add-barang" class="btn btn-success text-white">Tambah Barang</a>
        </div>
        <table class="table my-0 m-2" id="dataTable">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Harga (per unit)</th>
                    <th>Kategori</th>
                    <th>Distributor</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($stocks as $stock)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $stock->kode_barang }}</td>
                        <td>{{ $stock->nama_barang }}</td>
                        <td>{{ $stock->jumlah }}</td>
                        <td>{{ $stock->harga }}</td>
                        <td>{{ $stock->kategory->nama_kategori }}</td>
                        <td>{{ $stock->distributor }}</td>
                        <td>
                            <a href="/update-barang/{{ $stock->id }}" class="btn btn-info">Update</a>
                            <form action="/delete-barang/{{ $stock->id }}" method="post">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>No. </th>
                    <td><strong>Kode Barang</strong></td>
                    <td><strong>Nama Barang</strong></td>
                    <td><strong>Jumlah</strong></td>
                    <td><strong>Age</strong></td>
                    <td><strong>Kategori</strong></td>
                    <td><strong>Distributor</strong></td>
                    <th><strong>Aksi</strong></th>
                </tr>
            </tfoot>
        </table>
    </div>

</div>
</div>

@endsection