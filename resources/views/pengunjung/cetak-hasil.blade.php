<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <title>Sistem Indentifikasi Kepribadian</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="../../assets/css/animated.css">
    <link rel="stylesheet" href="../../assets/css/owl.css">
    <link rel="stylesheet" href="../../assets/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css  ">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div style="text-align:center;padding:2%">
            <h1>Hasil Test DISC</h1>
        </div>
        <div class="col-md-6" style="text-align:right">
                <label for="">Tanggal : {{$history->tanggal}}</label>
            </div>
        <div class="row" style="padding:2%">
            <div class="col-md-6">
            <table class="table" style="border=0">
            <tbody>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{strtoupper($user->nama)}}</td>
                </tr>
                <tr>
                    <td>No Telepon</td>
                    <td>:</td>
                    <td>{{$user->no_telp}}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{$user->pekerjaan}}</td>
                </tr>
                @if($user->alamat != null)
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{$user->alamat}}</td>
                </tr>
                @endif
            </tbody>
            </table>
            </div>
        </div>
        <div>
            <h4>Hasil dari Identifikasi anda adalah {{$history->hasil}}</h4>
        </div>
        <div>
        @if($history->hasil == 'Dominance')
            <p>Tipe kepribadian dominance merupakan tipe kepribadian yang cenderung memberikan penekanan kuat pada lingkungan dan membuat keputusan dalam mengatasi sebuah pertentangan</p>
        @endif
        @if($history->hasil == 'Dominance and Compliance')
            <p>Tipe kepribadian Dominance and Compliance (DC) merupakan kombinasi dari tipe kepribadian Dominance dan Compliance dengan major nya adalah Dominance yang memiliki sifat yang cenderung rajin, berpikiran keras dan kreatif, mempengaruhi orang lain melalui standar dan tekad mereka yang tinggi</p>
        @endif
        @if($history->hasil == 'Dominance and Influence')
            <p>Tipe kepribadian Dominance and Influence (DI) merupakan kombinasi dari tipe kepribadian Dominance dan Influence dengan major nya adalah Dominance yang memiliki sifat yang cenderung berorientasi pada hasil, vokal dan antusias, mempengaruhi orang lain melalui pesona dan tindakan berani dari orang yang memiliki kepribadian ini</p>
        @endif
        @if($history->hasil == 'Influence')
            <p>Tipe kepribadian influence merupakan tipe kepribadian yang selalu ingin menambah dan memperluas koneksi mereka. Seseorang dengan tipe kepribadian influence cenderung suka berpindah-pindah dan suka mengerjakan banyak hal yang berbeda dalam satu waktu</p>
        @endif
        @if($history->hasil == 'Influence and Dominance')
            <p>Tipe kepribadian Influence dan Dominance (ID) merupakan kombinasi dari tipe kepribadian Influence dan Dominance dengan major nya adalah Influence yang memiliki sifat yang cenderung berenergi tinggi, karismatik dan suka berpetualang serta mempengaruhi orang lain melalui keberanian dan hasrat mereka</p>
        @endif
        @if($history->hasil == 'Influence and Steadiness')
            <p>Tipe kepribadian Influence dan Steadiness (IS) merupakan kombinasi dari tipe kepribadian Influence dan Steadiness dengan major nya adalah Influence yang memiliki sifat yang cenderung hangat, ramah dan mudah bergaul serta mempengaruhi orang lain melalui keramahan dan empati mereka</p>
        @endif
        @if($history->hasil == 'Steadiness')
            <p>Seseorang dengan tipe kepribadian steadiness adalah seseorang yang bersifat pendiam dan lebih memilih menjadi pendengar yang baik dan berkontribusi saat situasi sudah tenang dan stabil</p>
        @endif
        @if($history->hasil == 'Steadiness and Influence')
            <p>Tipe kepribadian Steadiness dan Influence (SI) merupakan kombinasi dari tipe kepribadian Steadiness dan Influence dengan major nya adalah Steadiness yang memiliki sifat yang cenderung murah hati, mudah didekati dan penuh kasih sayang, serta mempengaruhi orang lain dengan menunjukkan empati dan kesabaran</p>
        @endif
        @if($history->hasil == 'Steadiness and Compliance')
            <p>Tipe kepribadian Steadiness dan Compliance (SC) merupakan kombinasi dari tipe kepribadian Steadiness dan Compliance dengan major nya adalah Steadiness yang memiliki sifat yang cenderung akomodatif, sabar dan dapat diandalkan serta mempengaruhi orang lain melalui diplomasi dan pengendalian diri</p>
        @endif
        @if($history->hasil == 'Compliance')
            <p>Seseorang dengan tipe kepribadian compliance merupakan seseorang dengan sifat pendiam dan cenderung menggunakan logika untuk membuat keputusan</p>
        @endif
        @if($history->hasil == 'Compliance and Dominance')
            <p>Tipe kepribadian Compliance dan Dominance (CD) merupakan kombinasi dari tipe kepribadian Compliance dan Dominance dengan major nya adalah Compliance yang memiliki sifat yang cenderung murah hati, mudah didekati dan penuh kasih sayang, serta mempengaruhi orang lain dengan menunjukkan empati dan kesabaran</p>
        @endif
        @if($history->hasil == 'Compliance and Steadiness')
            <p>Tipe kepribadian Compliance dan Steadiness (CS) merupakan kombinasi dari tipe kepribadian Compliance dan Steadiness dengan major nya adalah Compliance yang memiliki sifat yang cenderung akomodatif, sabar dan dapat diandalkan serta mempengaruhi orang lain melalui diplomasi dan pengendalian diri</p>
        @endif
        </div>
        @if(count($kepribadian) != 0)
            <h4>Kelemahan dan Kelebihan dari kepribadian ini adalah</h4>
            <p>Kelebihan dari tipe kepribadian {{$history->hasil}}</p>
            @forelse($kepribadian as $data)
                {{$loop->iteration}}. {{$data->kelebihan}} <br>
                @empty
                <li class="list-group-item">Data tidak tersedia</li>
            @endforelse
            <p>Kelemahan dari tipe kepribadian {{$history->hasil}}</p>
            @forelse($kepribadian as $data)
                {{$loop->iteration}}. {{$data->kelemahan}} <br>
                @empty
                <li class="list-group-item">Data tidak tersedia</li>
            @endforelse
        @endif
        <div>
            <h4>Dari hasil Identifikasi tersebut, kami menyarankan beberapa karir yang sesuai dengan kepribadin tersebut adalah</h4>
            @forelse($karir as $data)
                {{$loop->iteration}}. {{$data->karir}} <br>
                @empty
                <li class="list-group-item">Data tidak tersedia</li>
            @endforelse
        </div>
    </div>
</body>
</html>