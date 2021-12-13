@extends('layout.bahagia')

   @section('title', 'Detail Data Mouse')
   @section('judulhalaman', 'Detail Data Mouse')

   @section('konten')

	<br/>

    <h5 style="margin-bottom: 2%"><a href="/mouse">Kembali</a></h5>
    {{-- <h5 style="margin-bottom: 2%; float: right"><a href="/mouse/edit/">Edit</a></h5> --}}

	@foreach($mouse as $p)

    <table class="table" id="table">
        <thead class="thead-light" id="headtable">
            <tr>
                <th>Variabel</th>
                <th>Data</th>
            </tr>
        </thead>
		<tr>
			<td>kodemouse</td>
            <td>{{ $p->kodemouse }}</td>
		</tr>
        <tr>
			<td>merkmouse</td>
            <td>{{ $p->merkmouse }}</td>
		</tr>
        <tr>
			<td>stockmouse</td>
            <td>{{ $p->stockmouse }}</td>
		</tr>
        <tr>
			<td>tersedia</td>
            <td>{{ $p->tersedia }}</td>
		</tr>
	</table>

    <a href="/mouse"><button type="submit" class="btn btn-default center">Oke</button></a>

	@endforeach

@endsection
