@extends('layout.bahagia')

    @section('header')

   @section('title', 'Daftar Absensi Pegawai')
   @section('judulhalaman', 'Daftar Absensi Pegawai')

   @section('konten')

	<br/>

    @section('cari')
        <form action="/absen/cari" method="GET">
            <input type="text" name="cari" style="width: 50%; margin-top: 3%" placeholder="Cari absensi berdasarkan ID atau status .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-default" value="CARI">
        </form>
    @endsection

    <h5 style="margin-bottom: 2%"><a href="/absen/add"> + Tambah Absensi</a></h5>

	<table class="table" id="table">
        <thead class="thead-light" id="headtable">
            <tr>
                <th>Nama Pegawai</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>
        </thead>
		@foreach($absen as $a)
		<tr>

			<td>{{ $a->pegawai_nama }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID }}">Edit Absensi</a>
				|
				<a href="/absen/hapus/{{ $a->ID }}">Delete Absensi</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $absen->links() }}

    <p>
        Keterangan Status: <br>
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
        </p>
    @endsection
