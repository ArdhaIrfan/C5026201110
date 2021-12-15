@extends('layout.bahagia')

   @section('title', 'Tabel Keranjang Belanja')
   @section('judulhalaman', 'Tabel Keranjang Belanja')

   @section('konten')

	<br/>

    @section('cari')
        <form action="/keranjangbelanja/cari" method="GET">
            <input type="text" name="cari" style="width: 50%; margin-top: 3%" placeholder="Cari di keranjangbelanja .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-default" value="CARI">
        </form>
    @endsection

    <h5 style="margin-bottom: 2%"><a href="/keranjangbelanja/tambah"> + Beli</a></h5>

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
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harge per item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
            @foreach($keranjangbelanja as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->KodeBarang }}</td>
			<td>{{ $p->Jumlah }}</td>
			<td>{{ $p->Harga }}</td>
            <td>{{intval($p->Harga) * intval($p->Jumlah)}}</td>
			<td>
                {{-- <a href="/keranjangbelanja/view/{{ $p->ID }}">Detail</a>
                | --}}
				<a href="/keranjangbelanja/edit/{{ $p->ID }}">Edit</a>
				|
				<a href="/keranjangbelanja/hapus/{{ $p->ID }}">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $keranjangbelanja->links() }}

@endsection
