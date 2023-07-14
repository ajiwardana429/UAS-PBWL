@extends('template')

@section('content')
    
<div class="container-fluid">
    <h3 class="text-dark mb-4">Table Users</h3>
<div class="card shadow">
    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
        <div class="m-2" style="float: right">
            <a href="/add-user" class="btn btn-success text-white">Tambah User</a>
        </div>
        <table class="table my-0 m-2" id="dataTable">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Nama</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="/update-user/{{ $user->id }}" class="btn btn-info">Update</a>
                            <form action="/delete-user/{{ $user->id }}" method="post">
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
                    <th>Nama</th>
                    <th>Email</th>
                </tr>
            </tfoot>
        </table>
    </div>

</div>
</div>

@endsection