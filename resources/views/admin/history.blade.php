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
                            <!-- <a href="#" class="dropdown-item">Logout</a> -->
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

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="table-responsive">
                    <h5>History Pengecekan </h5><br>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Jawaban</th>
                                <th>Hasil</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Medianto</td>
                                <td>1 Mei 2022</td>
                                <td>Dominant</td>
                                <td>Dominant</td>
                            </tr>
                            <tr>
                                <td>P002</td>
                                <td>Medianto Saragih</td>
                                <td>Pertanyaan</td>
                                <td>Jawaban</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Jawaban</th>
                                <th>Hasil</th>
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

            @endsection
