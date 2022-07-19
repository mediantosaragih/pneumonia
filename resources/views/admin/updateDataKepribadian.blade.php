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
                            <span class="d-none d-lg-inline-flex">{{$user->username}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <!-- <a href="/logout" class="dropdown-item">Logout</a> -->
                            <form role="form" action="/logout" method="post">
                                @csrf
                                <button class="submit btn btn-primary dropdown-item">
                                    <p style="color:blue"><a href="/profile_admin/{{$user->id}}">Profil</a></p>
                                </button>
                                <button class="submit btn btn-primary dropdown-item">
                                    <p style="color:blue">Logout</p>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-light  d-flex p-4 ">
                            <i class="fa fa-chart-line fa-3x text-primary"  style="margin-left:20%"></i>
                            <div class="ms-3">
                                <p class="mb-2" style="text-align:center;">Pengecekan Harian</p>
                                <h6 class="mb-0 font-weight-bolder" style="text-align:center;">{{$harian}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-light rounded d-flex p-4">
                            <i class="fa fa-chart-area fa-3x text-primary" style="margin-left:20%"></i>
                            <div class="ms-3">
                                <p class="mb-2" style="text-align:center">Total Pengecekan</p>
                                <h6 class="mb-0 font-weight-bolder" style="text-align:center">{{$all}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-light rounded d-flex p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary" style="margin-left:10%"></i>
                            <div class="ms-3">
                                <p class="mb-2">Pengecekan Bulan ini</p>
                                <h6 class="mb-0 font-weight-bolder" style="text-align:center">{{$bulanan}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    <!-- Sale & Revenue End -->

    <!-- Sale & Revenue End -->



    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
        @endif
        <div class=" text-center rounded p-4" style="background: #FFFFFF; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
            <div class="bg-light rounded p-4">
                <h4>Ubah Data Kepribadian</h4>
            </div>
            <form role="form" action="/dataKepribadian/update" method="post">
                @csrf
                <div class="text-left rounded p-4">

                    <p>
                        <label for="">Kelemahan</label>
                        <input type="text" name="kelemahan" id="kelemahan" class="form-control" value="{{$datakepribadians->kelemahan}}" style="width:100%">
                    </p>
                    <p>
                        <label for="">Kelebihan</label>
                        <input type="text" name="kelebihan" id="kelebihan" class="form-control" value="{{$datakepribadians->kelebihan}}" style="width:100%">
                    </p>
                    <!-- <p>
                        <label for="">Ciri - Ciri</label>
                        <input type="text" name="steadiness" id="steadiness" class="form-control" value="" style="width:100%">
                    </p> -->
                    <p>
                    <label for="kategori">Pilih Kategori</label>
                        <select name="kategori" required="" id="kategori" name="kategori" class="form-control">
                            <option value="">-- Pilih --</option>
                            <option value="Dominance" {{($datakepribadians->kategori === 'Dominance') ? 'Selected' : ''}}>Dominance</option>
                            <option value="Influence" {{($datakepribadians->kategori === 'Influence') ? 'Selected' : ''}}>Influence</option>
                            <option value="Steadiness" {{($datakepribadians->kategori === 'Steadiness') ? 'Selected' : ''}}>Steadiness</option>
                            <option value="Compliance" {{($datakepribadians->kategori === 'Compliance') ? 'Selected' : ''}}>Compliance</option>
                        </select>
                    </p>

                </div>
                <div class="text-right " style="margin-right:20px">
                    <input type="hidden" name="id" value="{{$datakepribadians->id}}">
                    <a href="/dataKepribadian" class="btn btn-secondary">Batal</a>
                    <button class="submit btn btn-primary">Ubah</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Recent Sales End -->
    @endsection
