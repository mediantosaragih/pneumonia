@extends('admin.layout.app')

@section('content')

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand sticky-top px-4 py-0"   style="background: linear-gradient(to bottom, #D2D2D2 0%, #ffffff)";>
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
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
                                    <p style="color:blue"><a href="{{url('profile_admin')}}">Profil</a></p>
                                </button>
                                <button class="submit btn btn-primary dropdown-item">
                                    <p style="color:blue">Logout</p>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>

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
            <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Kode Pembelajaran</th>
            <th>Pembelajaran</th>
            <th>Kategori</th>
            <th>Deskripsi</th>
            <th>Aksi</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td>P001</td>
            <td>Pembelajaran</td>
            <td>Kategori</td>
            <td>Jawaban</td>
            <td>
                <a href="#"><span class="fa fa-edit"></span></a>
                <a href="#"><span class="fa fa-trash"></span></a>
            </td>
        </tr>
        <tr>
            <td>P002</td>
            <td>Medianto Saragih</td>
            <td>Pertanyaan</td>
            <td>Jawaban</td>
            <td>
                <a href="#"><span class="fa fa-edit"></span></a>
                <a href="#"><span class="fa fa-trash"></span></a>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <th>Kode Pembelajaran</th>
            <th>Pembelajaran</th>
            <th>Kategori</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </tfoot>
</table><br>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
        $('#example').DataTable();
    });
    </script>
    <!-- Recent Sales End -->

    <!-- Button trigger modal -->
    @endsection
