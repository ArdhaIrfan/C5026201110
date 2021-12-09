<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
		{{-- ID <input type="number" name="id" required="required"> <br/> --}}
		IDPegawai <input type="number" name="IDPegawai" required="required"> <br/>
		Tanggal <input type="datetime-local" name="Tanggal" required="required"> <br/>
		NamaTugas <textarea name="namaTugas" required="Required"></textarea> <br/>
        Status <input type="text" name="Status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
