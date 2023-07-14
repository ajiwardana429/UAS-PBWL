@extends('template')

@section('content')
    
<div class="container-fluid">
    <h3 class="text-dark mb-4">Table Stock</h3>
<div class="card shadow">
    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
        <div class="m-2" style="float: right">
            <a href="/add-kategori" class="btn btn-success text-white">Tambah Kategori</a>
        </div>
        <table class="table my-0 m-2" id="dataTable">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($listKategori as $kategori)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $kategori->nama_kategori }}</td>
                        <td>
                            <a href="/edit-kategori/{{ $kategori->id }}" class="btn btn-info">Update</a>
                            <form action="/delete-kategori/{{ $kategori->id }}" method="post">
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
                    <td><strong>Nama Kategori</strong></td>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>
    </div>

</div>
</div>

@endsection