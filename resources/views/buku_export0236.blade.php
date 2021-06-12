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
	</table>