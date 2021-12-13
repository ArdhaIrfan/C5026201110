@extends('layout.bahagia')

   @section('title', 'Tabel Data Mouse')
   @section('judulhalaman', 'Tabel Data Mouse')

   @section('konten')

	<br/>

    @section('cari')
        <form action="/mouse/cari" method="GET">
            <input type="text" name="cari" style="width: 50%; margin-top: 3%" placeholder="Cari Mouse berdasarkan merk.." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-default" value="CARI">
        </form>
    @endsection

    <h5 style="margin-bottom: 2%"><a href="/mouse/tambah"> + Tambah Mouse Baru</a></h5>

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
                <th>kodemouse</th>
                <th>merkmouse</th>
                {{-- <th>stockmouse</th>
                <th>tersedia</th> --}}
                <th>Opsi</th>
            </tr>
        </thead>
            @foreach($mouse as $p)
		<tr>
			<td>{{ $p->kodemouse }}</td>
			<td>{{ $p->merkmouse }}</td>
			{{-- <td>{{ $p->stockmouse }}</td>
			<td>{{ $p->tersedia }}</td> --}}
			<td>
                <a href="/mouse/view/{{ $p->kodemouse }}">Detail</a>
                |
				<a href="/mouse/edit/{{ $p->kodemouse }}">Edit</a>
				|
				<a href="/mouse/hapus/{{ $p->kodemouse }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $mouse->links() }}

@endsection
