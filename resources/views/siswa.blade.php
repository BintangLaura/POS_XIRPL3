<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<h1>ini dari controller function index</h1><br>
	<p>Nama : {{$nama}}</p><br>
	<ul>
		@foreach ($pelajaran as $pl)
		<li>{{ $pl }}</li>
		@endforeach
	</ul>
</body>
</html>