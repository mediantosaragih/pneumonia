@extends('pengunjung.layout.app')

@section('content')

<div class="bg1"><br><br>
<div class="container-fluid" style="padding:80px;">
<div class="row" style="background-color:#145285;border-radius: 10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
<div class="col-md-6" style="padding:30px;padding-left:70px;">
    <p style="color:white;font-size: 40px;"><b> Tipe Kepribadian DISC</b></p><br>
    <p style="color:white;font-size: 28px;"><b>  Temukan Manfaat menerapkan DISC bagi Organisasimu</b></p><br>
    <p style="color:white;font-size: 20px;"><b> Dominance, Influence, Steadiness, Complience</b></p>
</div>
<div class="col-md-6" style="text-align:center">
    <img src="assets/images/walp.png" alt="Chain App Dev" style="width:400px;">
</div>
</div>
    <div class="row">
        <div style=" text-align:center; margin-top:50px;" class="item-align:center">
            <div class="table-responsive " style="padding:100px; background:rgba(500,500,500,1); border-radius: 10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div>
                    <h2 style="padding:10px;margin-top:-80px">Jawablah Pertanyaan Berikut</h2>
                </div><br>
                <div>

                </div>
                <form role="form" action="/check" method="post">

                <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Kode Sifat</th>
            <th>Sifat</th>
            <th>Jawaban</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td>K005</td>
            <td>Saling Membantu</td>
            <td>
                <input type="radio" name="nama_radio" value="isi_radio2" checked="checked"/>1
                <input type="radio" name="nama_radio" value="isi_radio2" checked="checked"/>2
                <input type="radio" name="nama_radio" value="isi_radio2" checked="checked"/>3
                <input type="radio" name="nama_radio" value="isi_radio2" checked="checked"/>4
                <input type="radio" name="nama_radio" value="isi_radio2" checked="checked"/>5
            </td>

        </tr>


    </tbody>
    <tfoot>
        <tr>
            <th>Kode Sifat</th>
            <th>Sifat</th>
            <th>Jawaban</th>
        </tr>
    </tfoot>
</table><br>
                    <div class="" style="text-align:right" >
                        <!-- <button type="button" class="submit btn btn-primary" data-bs-toggle="modal" style="margin-left:990px"
                            data-bs-target="#exampleModal"> -->
                            <button class="submit btn btn-primary" >
                            <i class="fa fa-search" aria-hidden="true" >&nbsp&nbsp Cek</i>
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div><br>
</div>
  <style>
      .bg1{
        background-image: url("assets/images/left-bg.png");
        background-repeat: no-repeat;

        background-size: 710px 760px;
      }
  </style>
</body>
</html>

<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>

@endsection


