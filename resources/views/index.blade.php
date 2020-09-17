<!DOCTYPE html>
<html>
<head>
<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-body">
            <h2 class="text-center">www.malasngoding.com</h2>
            <h3>Data Karyawan</h3>

            <p>Cari Data Karyawan :</p>
            <form action="/karyawan/cari" method="GET" class="form-inline">
            <input style="width:30%" class="form-control" type="text" name="cari" placeholder="Cari Karyawan .." value="{{ old('cari') }}">
            <input class="btn btn-primary ml-3" type="submit" value="CARI">
            </form>

            <br/>
            
            <a style="float:right;margin-bottom:20px" class="btn btn-primary ml-3" href="/karyawan/tambah"> + Tambah Karyawan Baru</a>

            <br/>
            <br/>
            
            <table class="table table-bordered">
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
            <a class="btn btn-warning btn-sm" href="/karyawan/edit/{{ $p->karyawan_id }}">Edit</a> 
            <a class="btn btn-danger btn-sm" href="/karyawan/hapus/{{ $p->karyawan_id }}" onclick="return confirm('Apakah Anda yakin akan menghapus data ini ?')">Hapus</a>
            </td>
            </tr>
            @endforeach
            </table>
            
            <br/>
            Halaman : {{ $karyawan->currentPage() }} <br/>
            Jumlah Data : {{ $karyawan->total() }} <br/>
            Data Per Halaman : {{ $karyawan->perPage() }} <br/>
            
            
            {{ $karyawan->links() }}
        </div>
    </div>
</div>
 
</body>
</html>