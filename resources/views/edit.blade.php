<!DOCTYPE html>
<html>
<head>
<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
<h3>Edit Karyawan</h3>
 
<a href="/karyawan"> Kembali</a>

<br/>
<br/>
 
@foreach($karyawan as $p)
<form action="/karyawan/update" method="post">
{{ csrf_field() }}
<input type="hidden" name="id" value="{{ $p->karyawan_id }}"> <br/>
Nama <input type="text" required="required" name="nama" value="{{ $p->nama }}"> <br/>
Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->jabatan }}"> <br/>
Umur <input type="number" required="required" name="umur" value="{{ $p->umur }}"> <br/>
Alamat <textarea required="required" name="alamat">{{ $p->alamat }}</textarea> <br/>
<input type="submit" value="Simpan Data">
</form>
@endforeach
 
</body>
</html>