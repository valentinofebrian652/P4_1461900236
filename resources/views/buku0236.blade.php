@extends('main0236')
@section('konten')

<h3>Data Buku</h3>
	<br>
    <center>
    <a href="/buku/export"><button>Ekspor Excel</button></a> <br> <br>

	<table cellspacing='0'>
		<tr>
			<th>ID</th>
			<th>Judul Buku</th>
			<th>Jenis Buku</th>
            <th>Tahun Terbit</th>
		</tr>
		@foreach($buku as $b)
		<tr>
			<td>{{ $b->id }}</td>
			<td>{{ $b->judul }}</td>
            <td>{{ $b->jenis }}</td>
            <td>{{ $b->tahun_terbit }}</td>
		</tr>
		@endforeach
	</table></center>

@endsection

