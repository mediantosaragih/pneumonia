@extends('pengunjung.layout.app')

@section('content')
<div>
<div class="container" style="padding:150px; 0 0 0">
  <div class="card kartu" style="padding:50px 100px 200px 100px">
  <div  style="text-align:center;padding:50px;">
    <h3>Data Diri</h3>
  </div>
    <div class="row">
      <div class="col-md-8 kertas-biodata"  >
        <div class="biodata">
        <table width="100%" border="0">
    <tbody><tr>
        <td valign="top">
        <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
          <tbody>
            <tr>
              <td width="25%" valign="top" class="textt">Nama</td>
                <td width="2%">:</td>
                <td>
                    <label for="" class="input-group-text">Medianto Saragih</label>
                </td>

            </tr>
          <tr>
              <td class="textt">Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <label for="" class="input-group-text">01 Mei 2000</label>
                </td>

            </tr>
          <tr>
              <td class="textt">Pekerjaan</td>
                <td>:</td>
                <td>
                    <label for="" class="input-group-text">Mahasiswa</label>
                </td>

            </tr>
          <tr>
              <td class="textt">Email</td>
                <td>:</td>
                <td>
                    <label for="" class="input-group-text">medianto@gmail.com</label>
                </td>

            </tr>
          <tr>
              <td class="textt">No Telepon</td>
                <td>:</td>
                <td>
                    <label for="" class="input-group-text">0812831238</label>
                </td>
            </tr>
          <tr>
              <td valign="top" class="textt">Password</td>
                <td valign="top">:</td>
                <td>
                    <label for="" class="input-group-text">123123</label>
                </td>
            </tr>
        </tbody></table>
        </td>
    </tr>
    </tbody></table>
  </div>
      </div>
      <div class="col-md-4">
      <div class="foto">
      <img src="assets/images/im.jpg" alt="Chain App Dev" style="width:200px;">
      </div>
      </div>
    </div>
  </div>
</div>

</div>
<style>
    td{
        padding-bottom:10px
    }
    .foto{
        margin-top:50px;
    }
</style>

@endsection

