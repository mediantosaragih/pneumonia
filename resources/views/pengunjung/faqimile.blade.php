@extends('pengunjung.layout.app')

@section('content')

<div class="container" style="padding-top:100px">
	<h2 align="center" style="margin: 60px 10px 10px 10px;">Apakah Ada Pertanyaan ??</h2><hr>
	<form method="POST" id="form_komen">
		<div class="form-group">
			<textarea name="komen" id="komen" class="form-control" placeholder="Tulis Komentar" rows="5"></textarea>
		</div>
		<div class="form-group">
			<input type="hidden" name="komentar_id" id="komentar_id" value="0" />
			<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
		</div>
	</form>
	<hr>
	<h4 class="mb-3">Komentar :</h4>
	<span id="message"></span>

   	<div id="display_comment"></div>
</div>



@endsection
