@extends('layout.bahagia')

   @section('title', 'Detail Data Pegawai')
   @section('judulhalaman', 'Detail Data Pegawai')

   @section('konten')

	<br/>

    <h5 style="margin-bottom: 2%"><a href="/pegawai">Kembali</a></h5>
    {{-- <h5 style="margin-bottom: 2%; float: right"><a href="/pegawai/edit/">Edit</a></h5> --}}

	@foreach($pegawai as $p)

    <table class="table" id="table">
        <thead class="thead-light" id="headtable">
            <tr>
                <th>Variabel</th>
                <th>Data</th>
            </tr>
        </thead>
        <tr>
			<td>IDPegawai</td>
            <td>{{ $p->pegawai_id }}</td>
		</tr>
		<tr>
			<td>Nama</td>
            <td>{{ $p->pegawai_nama }}</td>
		</tr>
        <tr>
			<td>Jabatan</td>
            <td>{{ $p->pegawai_jabatan }}</td>
		</tr>
        <tr>
			<td>Umur</td>
            <td>{{ $p->pegawai_umur }}</td>
		</tr>
        <tr>
			<td>Alamat</td>
            <td>{{ $p->pegawai_alamat }}</td>
		</tr>
	</table>

    <a href="/pegawai"><button type="submit" class="btn btn-default center">Oke</button></a>

	@endforeach

@endsection
