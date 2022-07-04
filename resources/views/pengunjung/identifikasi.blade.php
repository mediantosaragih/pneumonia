@extends('pengunjung.layout.app')

@section('content')

<div class="bg1"><br><br>
    <div class="container-fluid" style="padding:80px;">
        <div class="row"
            style="background-color:#145285;border-radius: 10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="col-md-6" style="padding:30px;padding-left:70px;">
                <p style="color:white;font-size: 40px;"><b> Tipe Kepribadian DISC</b></p><br>
                <p style="color:white;font-size: 28px;"><b> Temukan Manfaat menerapkan DISC bagi Organisasimu</b></p>
                <br>
                <p style="color:white;font-size: 20px;"><b> Dominance, Influence, Steadiness, Complience</b></p>
            </div>
            <div class="col-md-6" style="text-align:center">
                <img src="assets/images/walp.png" alt="Chain App Dev" style="width:400px;">
            </div>
        </div>
        <div class="row">
            <div style=" text-align:center; margin-top:50px;" class="item-align:center">
                <div class="table-responsive "
                    style="padding:100px; background:rgba(500,500,500,1); border-radius: 10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <div>
                        <h2 style="padding:10px;margin-top:-80px">Test Kepribadian</h2>
                    </div><br>

                    <form role="form" action="/identifikasi" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="peringatan-item third-service">
                                    <img src="https://static.neris-assets.com/images/test-header-1.svg"
                                        style="width:50px">
                                    <h4 style="padding:10px 20px 10px 10px">Kerjakan dengan sebaik mungkin</h4>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="peringatan-item third-service">
                                    <img src="https://static.neris-assets.com/images/test-header-2.svg"
                                        style="width:50px">
                                    <h4 style="padding:10px -5px 10px -10px">Jawab dengan jujur,bahkan jika Anda tidak
                                        suka jawabannya.</h4>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="peringatan-item fourth-service">
                                    <img src="https://static.neris-assets.com/images/test-header-3.svg"
                                        style="width:50px">
                                    <h4 style="padding:10px 0px 10px 0px">Cobalah untuk tidak memilih jawaban "netral".
                                    </h4>
                                </div>
                            </div>
                        </div><br>
                        <hr>

                        @forelse($identifikasis as $item)
                        <div>
                            <h4>{{$item->dominance}}</h4>
                            <h4>{{$item->influence}}</h4>
                            <h4>{{$item->steadiness}}</h4>
                            <h4>{{$item->compliance}}</h4>
                            <input type="hidden" name="item[]" value="{{ $item->name }}" hidden>
                            <div class="row" style="margin-left:150px;">
                                <div class="col-md-3">
                                    <label for="">Saya Setuju</label>
                                </div>
                                <div class="col-md-6" style="margin-left:-80px">
                                    <span class="sortOptions" name="answerSortList[]">
                                        <span style="padding:10px">
                                            <input type="radio" style="width: 2.5em; height: 2.5em; margin-left:30px"
                                                name="{{$item->dominance}}" value="5" required/>
                                        </span>
                                        <span style="padding:10px">
                                            <input type="radio" style="width: 2em; height: 2.5em;"
                                                name="{{$item->influence}}" value="4" required/>
                                        </span>
                                        <span style="padding:10px">
                                            <input type="radio" style="width: 1.5em; height: 2.5em;"
                                                name="{{$item->steadiness}}" value="3" required/>
                                            <span style="padding:10px">
                                                <input type="radio" style="width: 2em; height: 2.5em;"
                                                    name="{{$item->compliance}}" value="2" required/>
                                            </span>
                                        </span>
                                </div>
                                <div class="col-md-3" style="margin-left:-80px">
                                    <label for="">Saya tidak setuju</label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        @empty
                        <tr>
                            <td class="text-center text-mute" colspan="4">Data tidak tersedia</td>
                        </tr>
                        @endforelse

                        <div class="" style="text-align:right">
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
<style>
    .bg1 {
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
