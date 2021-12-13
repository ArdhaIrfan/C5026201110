@extends('layout.bahagia')

   @section('title', 'Tambah Data Mouse')
   @section('judulhalaman', 'Tambah Data Mouse')

   @section('konten')

	<br/>

    <h5 style="margin-bottom: 2%"><a href="/mouse"> Kembali</a></h5>

    <form action="/mouse/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="merkmouse">Merk Mouse</label>
            <input type="text" name="merkmouse" required="required" class="form-control">
        </div>
        <div class="form-group">
            <label for="stockmouse">Stock</label>
            <input type="number" name="stockmouse" required="required" class="form-control">
        </div>
        <div class="form-group">
            Status: &nbsp &nbsp
            <input type="radio" id="y" name="tersedia" required="required" value="Y">
            <label for="y">Y</label>
            &nbsp &nbsp
            <input type="radio" id="t" name="tersedia" required="required" value="T">
            <label for="t">T</label>
        </div>

            {{-- Status <br />
            <input type="radio" id="html" name="status" value="I">
            <label for="html">Izin</label><br>
            <input type="radio" id="css" name="status" value="S" checked="checked">
            <label for="css">Sakit</label><br>
            <input type="radio" id="javascript" name="status" value="A">
            <label for="javascript">Alpha</label>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" required="required" class="form-control"></textarea>
        </div> --}}
        <button type="submit" class="btn btn-default center">Simpan Data</button>
    </form>

@endsection
