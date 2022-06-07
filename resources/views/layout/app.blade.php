<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <nav class="container-fluid navbar navbar-expand navbar-light sticky-top;" style="background-color: rgba(200, 100, 255, .15);  position:fixed; z-index: 1; backdrop-filter: blur(5px);">
        <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"></h2>
        </a>
        <form class="d-none d-md-flex ms-2">
            <div style="width:80%; ">
            <a href="#" class="btn" style="font-size:20px;font-family: Verdana ">Sistem Identifikasi Kepribadian</a>
            </div>
        </form>
        <div class="navbar-nav align-items-center ms-auto">
                <a href="{{url('welcome')}}"  class="btn btn-primary" style="margin:10px;">Home</a>
                <a href="{{url('identifikasi')}}" class="btn btn-primary" style="margin:10px;">Identifikasi</a>
                <a href="{{url('login')}}" class="btn btn-primary" style="margin:10px;">Login</a>
        </div>
    </nav>

            <footer>

            </footer>

        <!-- Spinner Start -->
        <!-- Sidebar Start -->

        <!-- Sidebar End -->

        @yield('content')
        <div class="container-xxl position-relative d-flex p-0" style="content-item:bottom; margin-top:160px;margin-bottom:-100px">

            <!-- Footer Start -->
            <div class="container-fluid"  style="background-color:rgba(0.1, 0.1, 0.1, 0.5);">
                <div class="rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            Kelompok 9
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/* This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. */-->
                            Sistem Pakar Diagnosa Penyakit Pneumonia
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>
        <!-- Content End -->


        <!-- Back to Top -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>


<style>
    body{
        background-image: url("img/baby.jpg");
        background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
    }
</style>
