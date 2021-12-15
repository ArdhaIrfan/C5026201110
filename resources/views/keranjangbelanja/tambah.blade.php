@extends('layout.bahagia')

   @section('title', 'Beli Barang')
   @section('judulhalaman', 'TBeli Barang')

   @section('konten')

	<br/>

    <h5 style="margin-bottom: 2%"><a href="/keranjangbelanja"> Kembali</a></h5>

    <form action="/keranjangbelanja/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="KodeBarang">Kode Barang</label>
            <input type="number" name="KodeBarang" required="required" class="form-control">
        </div>
        <div class="form-group">
            <label for="Jumlah">Jumlah Pembelian</label>
            <input type="number" name="Jumlah" required="required" class="form-control">
        </div>
        <div class="form-group">
            <label for="Harga">Harga</label>
            <input type="number" name="Harga" required="required" class="form-control">
            </div>
        {{-- <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" required="required" class="form-control"></textarea>
        </div> --}}
        <button type="submit" class="btn btn-default center">Beli Barang</button>
    </form>

@endsection
