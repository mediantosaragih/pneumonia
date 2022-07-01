@extends('pengunjung.layout.app')

@section('content')

<div class="container" style="padding-top:100px">
	<h2 align="center" style="margin: 60px 10px 10px 10px;">Berikan komentar anda</h2><hr>
	<form method="POST" id="form_komen" action="/faqimile">
		@csrf
		<div class="form-group">
			<textarea name="komentar" id="komentar" class="form-control" placeholder="Tulis Komentar" rows="5" required></textarea>
		</div>
		<div class="form-group">
			<input type="hidden" name="komentar_id" id="komentar_id" value="0" />
			<input type="submit" name="submit" id="submit" class="btn btn-info" value="Komentar" />
		</div>
	</form>
	<hr>
	<h4 class="mb-3">Komentar :</h4>


    <div class="card"  style="margin:20px">
    @forelse($komentars as $komentar)
    @if($komentar->balasan == NULL)
    <div class="row">
        <div class="col-md-1">
            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="height:100%">
        </div>
        <div class="col-md-11">
            <h5>Admin</h5>
            <h6>{{$komentar->komentar}}</h6>
        </div>
    </div>
    @endif
    @if($komentar->balasan != NULL)
    <div class="row">
        <div class="col-md-11" style="text-align:right">
            <h5>Medianto Saragih</h5>
            <h6>{{$komentar->balasan}}</h6>
        </div>
        <div class="col-md-1">
            <img src="assets/images/im.jpg" alt="Chain App Dev" style="width:100%;border-radius:50%">
        </div>
    </div>
    </div>
    @endif
		@empty
	@endforelse


		<!-- <p>{{$komentar->komentar}}</p> -->

				<center><p></p></center>
				<!-- <p>{{$komentar->balasan}}</p> -->


				<!-- <center><p>{{$komentar->komentar}}</p></center> -->
				<p></p>

            </h6>
        </div>
        </div>
    </div>
        </div>
</div>

	<span id="message"></span>

   	<div id="display_comment"></div>
</div>



@endsection
