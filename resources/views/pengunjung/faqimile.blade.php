@extends('pengunjung.layout.app')

@section('content')

<div class="container" style="padding-top:100px">
    <h2 align="center" style="margin: 60px 10px 10px 10px;">Tuliskan Pertanyaan Anda</h2>
    <hr>
    <form method="POST" id="form_komen" action="/faqimile">
        @csrf
        <div class="form-group">
            <textarea name="komentar" id="komentar" class="form-control" placeholder="Tulis Pertanyaan" rows="5"
                required></textarea>
        </div>
        <div class="form-group">
            <input type="hidden" name="komentar_id" id="komentar_id" value="0" />
            <input type="submit" name="submit" id="submit" class="btn btn-info" value="Kirim" />
        </div>
    </form>
    <hr>
    <h4 class="mb-3">Pertanyaan :</h4>


    <div class="card">
        @forelse($komentars as $komentar)
        <div class="row" style="padding:1%">
            @if($komentar->balasan == NULL)
            <div class="col-md-1">
              <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="height:100%">
            </div>
            <div class="col-md-11">
                <h5>{{$user->username}}</h5>
                <h6>{{$komentar->komentar}}</h6>
            </div>
            @endif
        </div>

        @if($komentar->balasan != NULL)
        <div class="row" style="padding:1%">
            <div class="col-md-1">
                <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="height:100%">
            </div>
            <div class="col-md-11">
                <h5>{{$user->username}}</h5>
                <h6>{{$komentar->komentar}}</h6>
            </div>
        </div>
        <div class="row" style="padding:1%">
            <div class="col-md-11" style="text-align:right">
                <h5>Admin</h5>
                <h6>{{$komentar->balasan}}</h6>
            </div>
            <div class="col-md-1">
                <img src="assets/images/im.jpg" alt="Chain App Dev" style="width:100%;border-radius:50%">
            </div>
        </div>

    @endif
		@empty
	@endforelse
    </div>
        </div>
        </div>
    </div>
        </div>
</div>

<span id="message"></span>

<div id="display_comment"></div>




@endsection
