<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-2">
				<div class="card mt-4">
					<div class="card-header">
						<h2 class="">{{$pertanyaan->judul}}</h2>
						<p><small>Tanggal Dibuat: {{$pertanyaan->created_at}}</small><br>
						<small>Tanggal Diperbaharui: {{$pertanyaan->created_at}}</small></p>
					</div>
					<div class="card-body">
						<p class="card-text">{{$pertanyaan->isi}}</p>
					</div>
				</div>
				<div class="card pt-2">
                        <a href="/jawaban/{{$pertanyaan->id}}" class="btn btn-info">Lihat Semua</a>
                 </div>
                 

				<div class="card mt-4">
					<div class="card-header">
						<h2 class="">Tambahkan Jawaban</h2>
					</div>
					<div class="card-body">
						<form class="form-horizontal" action="{{route('jawaban.store',$pertanyaan)}}" method="post">
							{{csrf_field()}}
							<div class="form-group">
								<textarea class="form-control" rows="5" name="jawaban"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" value="Jawab" class="btn btn-primary">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>