@extends('template')

@section('content')
    
    <div id="content">
        
        <div class="container-fluid">
            <h1>Hai, {{ $user->name }}</h1>
            <div class="row">
                <div class="col-md-6 col-xl-4 mb-4">
                    <div class="card shadow border-start-primary py-2">
                        <div class="card-body">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Jenis Stock barang</span></div>
                                    <div class="text-dark fw-bold h5 mb-0"><span>{{ $totalStocks }}</span> Jenis Barang</div>
                                </div>
                                <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mb-4">
                    <div class="card shadow border-start-success py-2">
                        <div class="card-body">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Total Kategori</span></div>
                                    <div class="text-dark fw-bold h5 mb-0"><span>{{ $totalKategories }}</span> Kategori</div>
                                </div>
                                <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mb-4">
                    <div class="card shadow border-start-success py-2">
                        <div class="card-body">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Total User</span></div>
                                    <div class="text-dark fw-bold h5 mb-0"><span>{{ $totalUsers }}</span> User</div>
                                </div>
                                <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection