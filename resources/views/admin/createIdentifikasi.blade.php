@extends('admin.layout.app')

@section('content')

<!-- Content Start -->
<div class="content">
    @error('title')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
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
            </div>
    <!-- Sale & Revenue End -->



    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
        <div class=" text-center rounded p-4"  style="background: #FFFFFF; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
            <div class="bg-light rounded p-4">
                <h4 >Tambah Data Sifat</h4>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">Kode Gejala</th>
                            <th scope="col">Nama Gejala</th>
                            <th scope="col">Bobot Gejala</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($gejalas as $gejala)
                        <tr>
                            <td>{{$gejala->kode}}</td>
                            <td>{{$gejala->name}}</td>
                            <td>{{$gejala->kategori}}</td>
                            <td>
                                <a href="">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>
                                <form action="/kelolaSifat/delete/{{$gejala->id}}" method="post" class="d-inline">
                                    <!-- @method('delete') -->
                                    @csrf
                                    <button class="badge bg-danger" onclick="return confrim('Are you sure?')"><span class="fa fa-trash" data-feather="x-crircle"></span></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td class="text-center text-mute" colspan="4">Data tidak tersedia</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
========
            <div class="text-left rounded p-4">
                <p>
                <label for="">Kode Sifat</label>
                <input type="text" class="form-control" style="width:100%">
                </p>
                <p>
                <label for="">Kode Sifat</label>
                <input type="text" class="form-control" style="width:100%">
                </p>
                <p>
                <label for="">Kode Sifat</label>
                <input type="text" class="form-control" style="width:100%">
                </p>
            </div>
            <div class="text-right " style="margin-right:20px">
                <button type="button" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-danger">Cancel</button>
>>>>>>>> 803f6b799b7474cce685035f9eb0b1e50b400eb3:resources/views/admin/createIdentifikasi.blade.php
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/gejala" method="post">
                        <div class="form-group">
                            <label for="kode">Kode Gejala</label>
                            <input type="text" class="form-control" id="kode" name="kode"
                                placeholder="Enter your Kode Gejala" required />
                        </div>
                        <div class="form-group">
                            <label for="name">Nama Gejala</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Enter your Gejala" required />
                        </div>
                        <div class="form-group">
                            <label for="kategori">Pilih Kategori</label>
                                <select name="kategori" required="" id="kategori" name="kategori" class="form-control"  >
                                <option value="">-- Pilih --</option>
                                <option value="Ringan">Ringan</option>
                                <option value="Sedang">Sedang</option>
                                <option value="Berat">Berat</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button class="submit btn btn-primary">Save changes</button>
                            <a class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
