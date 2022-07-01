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
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Pengecekan Harian</p>
                                <h6 class="mb-0 font-weight-bolder">{{$harian}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Pengecekan</p>
                                <h6 class="mb-0 font-weight-bolder" >{{$all}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Pengecekan Bulan ini</p>
                                <h6 class="mb-0 font-weight-bolder">{{$bulanan}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <h2 class="font-weight-bolder">Selamat Datang di </h2><br>
                                    <h2 >Sistem Identifikasi Kepribadian</h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                            <div class="border-radius-lg h-100">
                                <div class="position-relative d-flex align-items-center justify-content-center h-100">
                                <img class="w-100 position-relative " src="assets/images/wal.jpg" style="height:350px;">
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div style="width: 80%;margin-left:10%;margin-top:2%"  >
                <canvas id="myChart"></canvas>
            </div>
                <script>

                var barChartData = {
                labels: [
                    "Januari",
                    "Februari",
                    "Maret",
                    "April",
                    "Mei",
                    "Juni",
                    "Juli",
                    "Agustus"
                ],

                datasets: [
                    {
                    label: "Dominant",
                    backgroundColor: "pink",
                    borderColor: "red",
                    borderWidth: 1,
                    data: [3, 5, 6, 7,3, 5, 6, 7]
                    },
                    {
                    label: "Influence",
                    backgroundColor: "lightblue",
                    borderColor: "blue",
                    borderWidth: 1,
                    data: [4, 7, 3, 6, 10,7,4,6]
                    },
                    {
                    label: "Steadiness",
                    backgroundColor: "lightgreen",
                    borderColor: "green",
                    borderWidth: 1,
                    data: [10,7,4,6,9,7,3,10]
                    },
                    {
                    label: "Compliance",
                    backgroundColor: "yellow",
                    borderColor: "orange",
                    borderWidth: 1,
                    data: [6,9,7,3,10,7,4,6]
                    }
                ]
                };

                var chartOptions = {
                responsive: true,
                legend: {
                    position: "top"
                },
                title: {
                    display: true,
                    text: "Data Kepribadian DISC perbulan"
                },
                scales: {
                    yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                    }]
                }
                }

                var ctx = document.getElementById("myChart").getContext("2d");
                window.myBar = new Chart(ctx, {
                    type: "bar",
                    data: barChartData,
                    options: chartOptions
                });

</script>

            @endsection
