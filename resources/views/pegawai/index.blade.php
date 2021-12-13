@extends('layout.bahagia')

   @section('title', 'Tabel Data Pegawai')
   @section('judulhalaman', 'Tabel Data Pegawai')

   @section('konten')

	<br/>

    @section('cari')
        <form action="/pegawai/cari" method="GET">
            <input type="text" name="cari" style="width: 50%; margin-top: 3%" placeholder="Cari Pegawai berdasarkan nama atau alamat .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-default" value="CARI">
        </form>
    @endsection

    <h5 style="margin-bottom: 2%"><a href="/pegawai/tambah"> + Tambah Pegawai Baru</a></h5>

    {{-- <table class="table" id="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Opsi</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
    </table> --}}

	<table class="table" id="table">
        <thead class="thead-light" id="headtable">
            <tr>
                <th>Nama</th>
                {{-- <th>Jabatan</th>
                <th>Umur</th> --}}
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
        </thead>
            @foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			{{-- <td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td> --}}
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/view/{{ $p->pegawai_id }}">Detail</a>
                |
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $pegawai->links() }}

@endsection
