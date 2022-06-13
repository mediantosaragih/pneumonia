@extends('admin.layout.app')

@section('content')

<!-- Content Start -->
<div class="content">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars"></i>
        </a>
        <form class="d-none d-md-flex ms-4">
            <input class="form-control border-0" type="search" placeholder="Search">
        </form>
        <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                    <span class="d-none d-lg-inline-flex">Admin</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    <!-- <a href="/logout" class="dropdown-item">Logout</a> -->
                    <form role="form" action="/logout" method="post">
                        @csrf
                        <button class="submit btn btn-primary dropdown-item">
                            <p style="color:red">Logout</p>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Pengecekan Harian</p>
                                <h6 class="mb-0 font-weight-bolder">5</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Pengecekan</p>
                                <h6 class="mb-0 font-weight-bolder" >123</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Pengecekan Bulan ini</p>
                                <h6 class="mb-0 font-weight-bolder">25</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    <!-- Sale & Revenue End -->



    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success')}}
                <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
            </div>
        @endif
        <div class="bg-light text-center rounded p-4">
            <h4 class="mb-0">Data Pembelajaran yang dapat diikuti</h4><br>
            <div class="d-flex align-items-center justify-content-between mb-4">
                <button type="button" class="btn btn-primary" >
                    <a href="/kelolaPembelajaran/add">
                        <i class="fa fa-plus-circle" style="color:white" aria-hidden="true">Tambah</i>
                    </a>
                </button>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">Kode Pembelajaran</th>
                            <th scope="col">Pembelajaran</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody> 
                        @forelse($tipe_belajars as $tipe_belajar)
                        <tr>
                            <td>{{$tipe_belajar->kode_belajar}}</td>
                            <td>{{$tipe_belajar->kode_belajar}}</td>
                            <td>{{$tipe_belajar->kategori}}</td>
                            <td>{{$tipe_belajar->keterangan}}</td>
                            <td>
                                <a href="/kelolaPembelajaran/edit/{{$tipe_belajar->id}}">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>
                                <form action="/kelolaPembelajaran/delete/{{$tipe_belajar->id}}" method="post" class="d-inline">
                                    <!-- @method('delete') -->
                                    @csrf
                                    <button class="badge bg-danger" onclick="return confrim('Are you sure?')"><span class="fa fa-trash" data-feather="x-crircle"></span></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td class="text-center text-mute" colspan="5">Data tidak tersedia</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->

    <!-- Button trigger modal -->
    @endsection
