<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::All();
        return view('guru', ['guru' => $guru]);
    }

    public function hapus($id)
    {
        $guru = Guru::find($id);
        $guru->delete();

        return redirect('/guru');
    }

    public function trash()
    {
        $guru = Guru::onlyTrashed()->get();
        return view('guru_trash', ['guru' => $guru]);
    }

    public function restore($id)
    {
        $guru = Guru::onlyTrashed()->where('id', $id);
        $guru->restore();

        return redirect('/guru/trash');
    }

    public function restore_all()
    {        
        $guru = Guru::onlyTrashed();
        $guru->restore();

        return redirect('/guru/trash');
    }

    public function delete($id)
    {
        $guru = Guru::onlyTrashed()->where('id', $id);
        $guru->forceDelete();

        return redirect('/guru/trash');
    }

    public function delete_all()
    {        
        $guru = Guru::onlyTrashed();
        $guru->forceDelete();

        return redirect('/guru/trash');
    }
}
