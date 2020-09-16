<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
     // mengambil data dari table karyawan
     $karyawan = DB::table('karyawan')->get();
 
     // mengirim data karyawan ke view index
     return view('index', ['karyawan' => $karyawan]);
 
    }

    public function tambah() {
        return view('tambah');
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table karyawan
        DB::table('karyawan')->insert([
        'nama' => $request->nama,
        'jabatan' => $request->jabatan,
        'umur' => $request->umur,
        'alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');    
    }

    // method untuk edit data karyawan
    public function edit($id)
    {
        // mengambil data karyawan berdasarkan id yang dipilih
        $karyawan = DB::table('karyawan')->where('karyawan_id', $id)->get();
        // passing data karyawan yang didapat ke view edit.blade.php
        return view('edit', ['karyawan' => $karyawan]);    
    }

    // update data karyawan
    public function update(Request $request)
    {
        // update data karyawan
        DB::table('karyawan')->where('karyawan_id', $request->id)->update([
        'nama' => $request->nama,
        'jabatan' => $request->jabatan,
        'umur' => $request->umur,
        'alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');
    }

    // method untuk hapus data karyawan
    public function hapus($id)
    {
        // menghapus data karyawan berdasarkan id yang dipilih
        DB::table('karyawan')->where('karyawan_id', $id)->delete();

        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');
    }
}
