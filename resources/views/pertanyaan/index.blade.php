<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
			<nav class="navbar navbar-light bg-light justify-content-between">
			  <div class="navbar-brand">Pertanyaan</div>
			  <form class="form-inline">
				<a href="{{route('pertanyaan.create')}}" class="btn btn-primary">Tambah Pertanyaan</a>
			  </form>
			</nav>

			<div class="col-md-12 col-md-offset-2">
					@foreach($pertanyaan as $p)
					
					<div class="card mt-4">
					  	<div class="card-header">
						  	<div class="navbar navbar-light bg-light justify-content-between">
							  <a href="{{route('pertanyaan.show',$p)}}" class="navbar-brand">{{$p->judul}}</a>
							  <div class="form-inline">
							    <a href="/pertanyaan/{{$p->id}}" class="btn btn-primary mr-sm-2" type="submit">Detail</a>
							    <a href="/pertanyaan/{{$p->id}}/edit" class="btn btn-warning mr-sm-2" type="submit">Edit</a>
							  	<form method="post" action="{{route('pertanyaan.delete',$p)}}">
							  		{{csrf_field()}}
							  		{{method_field('DELETE')}}
							    <button class="btn btn-danger my-2 my-sm-0" type="submit">Hapus</button>
								</form>
							  </div>
							</div>
					  	</div>
					    <div class="card-body">
						    <p class="card-text">{{$p->isi}}</p>
					    </div>
					</div>
					@endforeach
					
				</div>
			</div>

	</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>