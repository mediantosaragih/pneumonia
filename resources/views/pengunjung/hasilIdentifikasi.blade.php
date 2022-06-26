
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Sistem Indentifikasi Kepribadian</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="assets/images/logggo.png" alt="Chain App Dev" style="width:200px;">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="{{url('welcome')}}" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="{{url('identifikasi')}}">Identifikasi</a></li>
              <li><div class="gradient-button"><a id="modal_trigger" href="{{url('login')}}"><i class="fa fa-sign-in-alt"></i> Login Now</a></div></li>
            </ul>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

        <!-- Content Start -->
    <div class="container-fluid bg1">
        <div class="row" style="padding:50px;">
            <div class="col-md-12" style="padding-top:100px">
                <div class="align-items-center">
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-4" >
                        <div style="background-color:#ffffff; box-shadow:3px 2px #888888; border-radius: 5px;">
                            <div style="text-align:center">
                            <img src="assets/images/walp.png" alt="Chain App Dev" style="width:200px; ">
                            </div>
                        </div><br>
                        <div style="background-color:#ffffff; box-shadow:3px 2px #888888; border-radius: 5px;">
                            <div class="row justify-content-start" style="padding:10px;">
                                <div class="col-12" style="color:lightblue">
                                    Test DISC
                                </div>
                                <div class="col-12">
                                Berikut Adalah hasil untuk Test DISC anda
                                </div>
                                <div class="col-12" style="color:lightblue">
                                    Minggu, 30 Juni 2022
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-4" >
                        <div style="background-color:#ffffff; box-shadow:3px 2px #888888; border-radius: 5px;">
                            <div class="row justify-content-start" style="padding:10px;">
                                <div class="col-12" style="color:lightblue;text-align:center">
                                    Test DISC
                                </div>
                                <div class="col-12">
                                Berikut Grafik Hasil Test Anda :
                                </div>
                                <div class="col-12" style="color:lightblue">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart-area">
                                                <canvas id="myAreaChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12" style="color:lightblue">
                                Jenis Kepribadian Anda adalah : Dominant
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-4" >
                        <div style="background-color:#ffffff; box-shadow:3px 2px #888888; border-radius: 5px;">
                            <div class="row justify-content-start" style="padding:10px;">
                                <div class="col-12" style="color:lightblue">
                                    Detail mengenai kepribadian Anda :
                                </div>
                                <div>
                                    <ol class="list-group list-group-numbered">
                                    <li class="list-group-item">Suka Menolong</li>
                                    <li class="list-group-item">Suka Membahas Masa lalu</li>
                                    </ol>
                                </div>
                            </div>
                            </div><br>
                            <div style="background-color:#ffffff; box-shadow:3px 2px #888888; border-radius: 5px;">
                            <div class="row justify-content-start" style="padding:10px;">
                                <div class="col-12" style="color:lightblue">
                                    Saran Profesi untuk Jenis Kepribadian Anda adalah
                                </div>
                                <div>
                                    <ol class="list-group list-group-numbered">
                                    <li class="list-group-item">Programer</li>
                                    </ol>
                                </div>
                            </div>
                            </div><br>
                            <div style="text-align:center">
                            <li><div class="gradient-button"><a id="modal_trigger" ><i class="fa fa-print"></i> Simpan Ke PDF</a></div></li>
                            </div>
                        </div>
                        </div>
                        </div>

                    </div>

                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- Recent Sales End -->
    <footer id="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Sistem Indentifikasi Kepribadian</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Contact Us</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>About Us</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Useful Links</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>About Our Company</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>Copyright © 2022 Kelompok 9 </p>
          </div>
        </div>
      </div>
    </div>
</div>
  </footer>

  <style>
      .bg1{
        background-image: url("assets/images/left-bg.png");
        background-repeat: no-repeat;

        background-size: 710px 700px;
      }
      p{
          color:black;
      }
  </style>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>

  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>
