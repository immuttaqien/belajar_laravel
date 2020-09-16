<!DOCTYPE html>
<html>
<head>
<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
<h2>www.malasngoding.com</h2>
<h3>Data Karyawan</h3>
 
<a href="/karyawan/tambah"> + Tambah Karyawan Baru</a>

<br/>
<br/>
 
<table border="1">
<tr>
<th>Nama</th>
<th>Jabatan</th>
<th>Umur</th>
<th>Alamat</th>
<th>Opsi</th>
</tr>
@foreach($karyawan as $p)
<tr>
<td>{{ $p->nama }}</td>
<td>{{ $p->jabatan }}</td>
<td>{{ $p->umur }}</td>
<td>{{ $p->alamat }}</td>
<td>
<a href="/karyawan/edit/{{ $p->karyawan_id }}">Edit</a>
|
<a href="/karyawan/hapus/{{ $p->karyawan_id }}" onclick="return confirm('Apakah Anda yakin akan menghapus data ini ?')">Hapus</a>
</td>
</tr>
@endforeach
</table>
 
 
</body>
</html>