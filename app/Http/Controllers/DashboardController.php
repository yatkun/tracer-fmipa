<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Dashboard;
use App\Models\Kuesioner;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;




class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pengumuman = Pengumuman::all()->last();
        $user = User::where('role', 'alumni')->count();
        $tracer = Kuesioner::all()->count();
        return view('dashboard.index',
       [
        'pengumuman' => $pengumuman,
        'user' => $user,
        'tracer' => $tracer,
        'title' => 'Beranda'
       ]);
    }

    public function profil()
    {
        $user = Auth::user();
        // dd($user);
        $data = User::where('id', $user->id)->first();
        // $data = User::where('role','alumni')->get();
        return view('profil.index',
       [
        'user' => $data,
        'title' => 'Profil'
       ]);
    }

    public function updateprofil(Request $request)
    {

        $this->validate($request, [
            'username'     => [
                'required',
                Rule::unique('users', 'username')->ignore(Auth::user()->id)
            ],
            'foto' => 'image|mimes:jpeg,png,jpg|max:200',
            
            
        ]);

        $input = $request->all();


        $user = Auth::user();
        $data = User::findOrFail($user->id);

        if ($request->hasFile('foto')) {
            if ($user->foto != null) {
                $oldAvatar = public_path('/images/foto/' . $user->foto);
                if (File::exists($oldAvatar)) {
                    File::delete($oldAvatar);
                }
            }

            $foto = $request->file('foto');
            $filename = $user->namalengkap . '.' . $foto->getClientOriginalExtension();
    
            Image::make($foto)->save(public_path('/images/foto/' . $filename));

            $input['foto'] = $filename;
            
        }

        // $data->save();
        $data->update(
           $input
        );

        
        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('profil.index')->with(['successupdate' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('profil.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
