@extends('layouts.template')

@section('content')

<style>
    .menu-card {
        transition: background-color 0.3s ease, transform 0.2s ease;
        cursor: pointer;
    }

    .menu-card:hover {
        transform: translateY(-4px);
    }

    .menu-card.bg-info:hover {
        background-color: #0dcaf0 !important;
    }

    .menu-card.bg-primary:hover {
        background-color: #0b5ed7 !important;
    }

    .menu-card.bg-warning:hover {
        background-color: #ffc107 !important;
    }

    .menu-card.bg-success:hover {
        background-color: #198754 !important;
    }

    .menu-card.bg-danger:hover {
        background-color: #dc3545 !important;
    }
</style>

<div class="card shadow border-0">
    <div class="card-body p-4">
        <div class="text-center mb-4">
            <h4 class="fw-bold text-primary mb-2">
                Selamat Datang di Aplikasi Manajemen Data
            </h4>
            <p class="text-muted small">
                Kelola data pengguna dan barang dengan cepat, mudah, dan efisien.
            </p>
            <hr class="mx-auto" style="width: 50px; border: 2px solid #0d6efd;">
        </div>

        <div class="row row-cols-2 row-cols-md-3 g-2 justify-content-center">
            {{-- Level User --}}
            <div class="col">
                <a href="{{ url('/level') }}" class="text-decoration-none">
                    <div class="card text-center text-white bg-info py-2 shadow-sm menu-card">
                        <div class="card-body p-2">
                            <i class="fas fa-layer-group fa-lg mb-1"></i><br>
                            <span class="small fw-semibold">Level User</span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Data User --}}
            <div class="col">
                <a href="{{ url('/user') }}" class="text-decoration-none">
                    <div class="card text-center text-white bg-primary py-2 shadow-sm menu-card">
                        <div class="card-body p-2">
                            <i class="fas fa-user fa-lg mb-1"></i><br>
                            <span class="small fw-semibold">Data User</span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Kategori Barang --}}
            <div class="col">
                <a href="{{ url('/kategori') }}" class="text-decoration-none">
                    <div class="card text-center text-dark bg-warning py-2 shadow-sm menu-card">
                        <div class="card-body p-2">
                            <i class="fas fa-bookmark fa-lg mb-1"></i><br>
                            <span class="small fw-semibold">Kategori Barang</span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Data Supplier --}}
            <div class="col">
                <a href="{{ url('/supplier') }}" class="text-decoration-none">
                    <div class="card text-center text-white bg-success py-2 shadow-sm menu-card">
                        <div class="card-body p-2">
                            <i class="fas fa-truck fa-lg mb-1"></i><br>
                            <span class="small fw-semibold">Data Supplier</span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Data Barang --}}
            <div class="col">
                <a href="{{ url('/barang') }}" class="text-decoration-none">
                    <div class="card text-center text-white bg-danger py-2 shadow-sm menu-card">
                        <div class="card-body p-2">
                            <i class="fas fa-box fa-lg mb-1"></i><br>
                            <span class="small fw-semibold">Data Barang</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
