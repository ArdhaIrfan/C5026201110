@extends('layout.bahagia')

   @section('title', 'Edit Data Mouse')
   @section('judulhalaman', 'Edit Data Mouse')

   @section('konten')

	<br/>

    <h5 style="margin-bottom: 2%"><a href="/mouse"> Kembali</a></h5>

	@foreach($mouse as $p)
    <form action="/mouse/update" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="hidden" name="kodemouse" value="{{ $p->kodemouse }}">
        </div>
        <div class="form-group">
            <label for="merkmouse">Merk</label>
            <input type="text" required="required" name="merkmouse" value="{{ $p->merkmouse }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="stockmouse">Stok</label>
            <input type="number" required="required" name="stockmouse" value="{{ $p->stockmouse }}" class="form-control">
        </div>
        <div class="form-group">
            Ketersediaan: &nbsp &nbsp
            <input type="radio" id="y" name="tersedia" value="Y" @if ($p->tersedia === "Y") checked="checked" @endif>
            <label for="y">Y</label>
            &nbsp &nbsp
            <input type="radio" id="t" name="tersedia" value="T" @if ($p->tersedia === "T") checked="checked" @endif>
            <label for="t">T</label>
            {{-- <input type="radio" required="required" name="tersedia" value="{{ $p->tersedia }}" class="form-control"> --}}
        </div>
        {{-- <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" required="required" class="form-control">{{ $p->mouse_alamat }}</textarea>
        </div> --}}
        <button type="submit" class="btn btn-default center">Simpan Data</button>
    </form>

	@endforeach

@endsection
