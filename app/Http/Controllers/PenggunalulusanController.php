<?php

namespace App\Http\Controllers;

use App\Models\Penggunalulusan;
use Illuminate\Http\Request;

class PenggunalulusanController extends Controller
{
    public function index()
    {
       
        return view('penggunalulusan.index',
       [
        'title' => 'Pengguna Lulusan'
       ]);
    }

    public function store(Request $request)
    {
        Penggunalulusan::create($request->all());

        return redirect('pengguna-lulusan')->with('berhasil', 'Pengisian kuesioner berhasil disimpan');
   
    }
}
