@extends('layout.bahagia')

   @section('title', 'Tambah Tugas Baru')
   @section('judulhalaman', 'Tambah Tugas Baru')

   @section('konten')

	<br/>

    <h5 style="margin-bottom: 2%"><a href="/tugas"> Kembali</a></h5>

    <form action="/tugas/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="IDPegawai">IDPegawai</label>
            <input type="number" name="IDPegawai" required="required" class="form-control">
        </div>
        <div class="form-group">
            <label for="Tanggal">Tanggal</label>
            <input type="datetime-local" name="Tanggal" required="required" class="form-control">
        </div>
        <div class="form-group">
            <label for="NamaTugas">NamaTugas</label>
            <textarea name="NamaTugas" required="required" class="form-control"></textarea>
            </div>
        <div class="form-group">
            <label for="Status">Status</label>
            <input type="text" name="Status" required="required" class="form-control">
        </div>
        <button type="submit" class="btn btn-default center">Simpan Data</button>
    </form>

	{{-- <form action="/tugas/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="number" name="IDPegawai" required="required"> <br/>
		Tanggal <input type="datetime-local" name="Tanggal" required="required"> <br/>
		NamaTugas <textarea name="namaTugas" required="required"></textarea> <br/>
        Status <input type="text" name="Status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form> --}}

@endsection
