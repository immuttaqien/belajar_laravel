<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidasiController extends Controller
{
    public function input()
    {
        return view('input');
    }
 
    public function proses(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi cuy!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
            'numeric' => ':attribute harus diisi angka ya cuy!!!',
            'alpha' => ':attribute harus diisi huruf aja ya cuy!!!',
            'email' => ':attribute harus benar formatnya ya cuy!!!',
        ];

        $this->validate($request, [
           'nama' => 'required|min:5|max:20',
           'pekerjaan' => 'required|alpha',
           'usia' => 'required|numeric',
           'email' => 'required|email'
        ], $messages);
 
        return view('proses', ['data' => $request]);
    }
}
