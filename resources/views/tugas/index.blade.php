@extends('layout.bahagia')

   @section('title', 'Tabel Data Tugas')
   @section('judulhalaman', 'Tabel Data Tugas')

   @section('konten')

	<br/>

    @section('cari')
        <form action="/tugas/cari" method="GET">
            <input type="text" name="cari" style="width: 50%; margin-top: 3%" placeholder="Cari Tugas berdasarkan .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-default" value="CARI">
        </form>
    @endsection

    <h5 style="margin-bottom: 2%"><a href="/tugas/tambah"> + Tambah Tugas Baru</a></h5>

	<table class="table" id="table">
        <thead class="thead-light" id="headtable">
            <tr>
                {{-- <th>ID</th> --}}
                <th>Nama Pegawai</th>
                <th>Tanggal</th>
                <th>Nama Tugas</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>
        </thead>
		@foreach($tugas as $p)
		<tr>
			{{-- <td>{{ $p->ID }}</td> --}}
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->NamaTugas }}</td>
            <td>{{ $p->Status }}</td>
			<td>
				<a href="/tugas/edit/{{ $p->ID }}">Edit</a>
				|
				<a href="/tugas/hapus/{{ $p->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $tugas->links() }}

@endsection
