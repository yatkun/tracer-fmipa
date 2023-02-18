<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        $data = User::where('role', 'alumni')->get();
        return view('dashboard.data-alumni.index',
       [
        'alumni' => $data,
        'title' => 'Data Alumni'
       ]);
    }

    public function show($id)
    {
        $user = User::find($id);
        
        return view('dashboard.data-alumni.show',
       [
        'user' => $user,
        'title' => 'Data Alumni'
       ]);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('data-alumni')->with('berhasil', 'Data berhasil dihapus');
    }
}
