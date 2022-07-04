@extends('pengunjung.layout.app')

@section('content')
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
                                            <canvas id="oilChart" width="600" height="400"></canvas>
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

  <script>
    var oilCanvas = document.getElementById("oilChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

    var oilData = {
        labels: [
            "Dominant",
            "Influence",
            "Steadiness",
            "Compliance"
        ],
        datasets: [
            {
                data: [133.3, 86.2, 52.2, 51.2],
                backgroundColor: [
                    "#FF6384",
                    "#63FF84",
                    "#84FF63",
                    "#8463FF"
                ]
            }]
    };

    var pieChart = new Chart(oilCanvas, {
    type: 'pie',
    data: oilData
    });

  </script>


@endsection
