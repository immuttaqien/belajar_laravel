<!DOCTYPE html>
<html>
<head>
<title>Tutorial Laravel #22 : Soft Deletes Laravel</title>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
</head>
<body>
 
<div class="container">
 
<div class="card mt-5">
<div class="card-header text-center">
Data Guru | <a href="https://www.malasngoding.com/laravel">www.malasngoding.com</a>
</div>
<div class="card-body">
 
<a href="/guru">Data Guru</a>
|
<a href="/guru/trash" class="btn btn-sm btn-primary">Tong Sampah</a>
 
<br/>
<br/>
 
<a href="/guru/restore_all">Kembalikan Semua</a>
|
<a href="/guru/delete_all">Hapus Permanen Semua</a>
<br/>
<br/>
 
<table class="table table-bordered">
<thead>
<tr>
<th>Nama</th>
<th>Umur</th>
<th width="30%">OPSI</th>
</tr>
</thead>
<tbody>
@foreach($guru as $g)
<tr>
<td>{{ $g->nama }}</td>
<td>{{ $g->umur }}</td>
<td>
<a href="/guru/restore/{{ $g->id }}" class="btn btn-success btn-sm">Restore</a>
<a href="/guru/delete/{{ $g->id }}" class="btn btn-danger btn-sm">Hapus Permanen</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>

</body>
</html>