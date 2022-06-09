
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
            <a href="{{url('welcome')}}" class="logo">
              <img src="assets/images/logggo.png" alt="Chain App Dev" style="width:200px;">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="{{url('welcome')}}">Home</a></li>
              <li class="scroll-to-section"><a href="{{url('identifikasi')}}"  class="active">Identifikasi</a></li>
              <li><div class="gradient-button"><a id="modal_trigger" href="{{url('login')}}"><i class="fa fa-sign-in-alt"></i> Login Now</a></div></li>
            </ul>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
<div class="bg1">
<div class="container-fluid" style="padding:80px;">
    <div class="row">
        <div style=" text-align:center; margin-top:50px;" class="item-align:center">
            <div class="table-responsive " style="padding:100px; background:rgba(500,500,500,1); border-radius: 20px;box-shadow:3px 2px #888888 ">
                <div>
                    <h2 style="padding:10px;margin-top:-80px">Pengisian data Sifat</h2>
                </div><br>
                <form role="form" action="/check" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-1">
                            Nama
                        </div>
                        <div class="col-md-1">
                            :
                        </div>
                        <div class="col-md-3">
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>

                        <div class="col-md-2">
                            Alamat
                        </div>
                        <div class="col-md-1">
                            :
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-1">
                            No Telp
                        </div>
                        <div class="col-md-1">
                            :
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="no_telp" name="no_telp" required>
                        </div>
                    </div><br>
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-dark">
                                <th scope="col">Kode Gejala</th>
                                <th scope="col">Nama Gejala</th>
                                <th scope="col">Jawaban</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <!-- <label class="radio">
                                    <input type="radio" name="cfimb_5" id="id_cfimb_5_1" value="">
                                    Ya
                                </label>
                                <label class="radio">
                                    <input type="radio" name="cfimb_5" id="id_cfimb_5_2" value="Tidak">
                                    Tidak
                                </label> -->
                                    <input type="checkbox" id="gejala[]" name="gejala[]"
                                        value="">
                                </td>
                            </tr>
                        </tbody>
                    </table><br>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <!-- <button type="button" class="submit btn btn-primary" data-bs-toggle="modal" style="margin-left:990px"
                            data-bs-target="#exampleModal"> -->
                            <button class="submit btn btn-primary">
                            <i class="fa fa-search" aria-hidden="true">&nbsp&nbsp Cek</i>
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div><br>
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

        background-size: 710px 760px;
      }
  </style>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>
