<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function index()
  {
    return view('login.login', [
      'title' => 'Masuk',
    ]);
  }

  public function daftar()
  {
    return view('login.registrasi', [
      'title' => 'Daftar',
    ]);
  }

  public function store(Request $request)
  {
    $data = $this->validate($request, [
      'username' => 'required|min:5',
      'namalengkap' => 'required',
      'prodi' => 'required',
      'tahunlulus' => 'required',
      'password' => 'required'
    ]);

    $data['password'] = bcrypt($data['password']);
    User::create($data);

    return redirect()->route('masuk')->with('success', 'Pendaftaran telah berhasil, silahkan login !');
  }

  public function authenticate(Request $request)
  {
    $validatedata = $request->validate([
      'username' => 'required',
      'password' => 'required',
    ]);

    if (Auth::attempt($validatedata)) {
      $request->session()->regenerate();

      return redirect()->intended('/dashboard');
      # code...
    }
    return back()->withInput()->with('errorlogin', 'Data yang anda masukkan tidak terdaftar.');
  }

  


  public function logout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
  }
}
