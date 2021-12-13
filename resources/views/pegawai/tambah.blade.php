@extends('layout.bahagia')

   @section('title', 'Tambah Pegawai')
   @section('judulhalaman', 'Tambah Pegawai')

   @section('konten')

	<br/>

    <h5 style="margin-bottom: 2%"><a href="/pegawai"> Kembali</a></h5>

    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" required="required" class="form-control">
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" name="jabatan" required="required" class="form-control">
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" name="umur" required="required" class="form-control">
            </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" required="required" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-default center">Simpan Data</button>
    </form>

@endsection
