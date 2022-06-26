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
                                <button class="submit btn btn-primary dropdown-item">
                                    <p style="color:red"><a href="{{url('profile_admin')}}">askfakgnan</a></p>
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

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <h2 class="font-weight-bolder">Selamat Datang di </h2><br>
                                    <h2 >Sistem Identifikasi Kepribadian dengan Metode Forward Chaining</h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                            <div class="border-radius-lg h-100">
                                <div class="position-relative d-flex align-items-center justify-content-center h-100">
                                <img class="w-100 position-relative " src="assets/images/wal.jpg" style="height:300px;">
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <img src="assets/images/service-icon-04.png" class="h-20 w-20 top-0 " alt="waves" style="height:50px;padding:5px;">
                            <h5 class="" style="margin-top:10px; margin-left: auto;margin-right: auto;">Kelompok 9</h5>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <img src="assets/images/service-icon-03.png" class="h-20 w-20 top-0 " alt="waves" style="height:50px;padding:5px;">
                            <h5 class="" style="margin-top:10px; margin-left: auto;margin-right: auto;">Kepribadian</h5>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <img src="../img/admin.png" class="h-20 w-20 top-0 " alt="waves" style="height:50px;padding:5px;">
                            <h5 class="" style="margin-top:10px; margin-left: auto;margin-right: auto;">Faq</h5>
                        </div>
                    </div>
                </div>
            </div>
            @endsection
