@extends('layout.bahagia')

   @section('title', 'Edit Keranjang Belanja')
   @section('judulhalaman', 'Edit Keranjang Belanja')

   @section('konten')

	<br/>

    <h5 style="margin-bottom: 2%"><a href="/keranjangbelanja">Kembali</a></h5>

	@foreach($keranjangbelanja as $p)
    <form action="/keranjangbelanja/update" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="hidden" name="ID" value="{{ $p->ID }}">
        </div>
        <div class="form-group">
            <label for="KodeBarang">Kode Barang</label>
            <input type="number" required="required" name="KodeBarang" value="{{ $p->KodeBarang }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="Jumlah">Jumlah</label>
            <input type="number" required="required" name="Jumlah" value="{{ $p->Jumlah }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="Harga">Harga</label>
            <input type="number" required="required" name="Harga" value="{{ $p->Harga }}" class="form-control">
            </div>
        <button type="submit" class="btn btn-default center">Simpan Data</button>
    </form>

	@endforeach

@endsection
