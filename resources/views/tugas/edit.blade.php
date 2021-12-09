<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $p)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $p->ID }}"> <br/>
		IDPegawai <input type="number" required="required" name="IDPegawai" value="{{ $p->IDPegawai }}"> <br/>
		Tanggal <input type="datetime-local" required="required" name="Tanggal" value="{{ $p->Tanggal }}"> <br/>
		NamaTugas <textarea required="required" name="NamaTugas">{{ $p->NamaTugas }}</textarea> <br/>
		Status <input type="text" required="required" name="Status" value="{{ $p->Status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
