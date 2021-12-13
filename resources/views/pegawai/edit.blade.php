@extends('layout.bahagia')

   @section('title', 'Edit Data Pegawai')
   @section('judulhalaman', 'Edit Data Pegawai')

   @section('konten')

	<br/>

    <h5 style="margin-bottom: 2%"><a href="/pegawai"> Kembali</a></h5>

	@foreach($pegawai as $p)
    <form action="/pegawai/update" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}" class="form-control">
            </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" required="required" class="form-control">{{ $p->pegawai_alamat }}</textarea>
        </div>
        <button type="submit" class="btn btn-default center">Simpan Data</button>
    </form>

	@endforeach

@endsection
