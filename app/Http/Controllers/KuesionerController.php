<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Kuesioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class KuesionerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        // dd($user);
        $data = Kuesioner::where('user_id', $user->id)->get();
        return view(
            'kuesioner.index',
            [
                'title' => 'Kuesioner',
                'datas' => $data
            ]
        );
    }

    public function isi()
    {
        $mytime = Carbon::now('+08:00');
        $year = date('Y', strtotime($mytime));

        $user = Auth::user();
        $data = Kuesioner::where('user_id', $user->id)
                        ->whereYear('created_at', '=', $year)->first();
       
        if($data === null) {
            return view(
                'kuesioner.kuesioneralumni',
                [
                    'title' => 'Isi Kuesioner'
                ]
            );
        }

        return redirect()->route('kuesioner')->with(['error' => 'Anda telah mengisi data tracer tahun ini.']);

        
// echo $mytime->toDateTimeString();
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'kodeprodi' => 'required',
        //     'kodeprodi.required' => 'Kode prodi wajid dipilih',

        //     'namalengkap' => 'required',
        //     'tahunlulus' => 'required',
        //     'nohp' => 'required',
        //     'email' => 'required',
        // ]);
        $validated = $this->validate(
            $request,
            [
                'kodept'             => 'required',
                'kodeprodi'             => 'required',
                'namalengkap'             => 'required',
                'tahunlulus'             => 'required',
                'nohp'             => 'required',
                'email'             => 'required',
                // 'p1'             => 'required',
                // 'p2e'             => 'required',
                // 'p3'             => 'required',
                // 'p4'             => 'required',
                // 'p5'             => 'required',
                // 'p6'             => 'required',
                // 'p7'             => 'required',
            ],
            [
                'kodept.required'    => 'Kode program studi harus dipilih',
                'kodeprodi.required'    => 'Kode program studi harus dipilih',
                'namalengkap.required'    => 'Nama lengkap harus diisi',
                'tahunlulus.required'    => 'Tahun lulus harus diisi',
                'nohp.required'    => 'Nomor HP harus diisi',
                'email.required'    => 'Email harus diisi',
                // 'p1.required'    => 'Pertanyaan ini harus dijawab',
                // 'p2e.required'    => 'Pertanyaan ini harus dijawab',
                // 'p3.required'    => 'Pertanyaan ini harus dijawab',
                // 'p4.required'    => 'Pertanyaan ini harus dijawab',
                // 'p5.required'    => 'Pertanyaan ini harus dijawab',
                // 'p6.required'    => 'Pertanyaan ini harus dijawab',
                // 'p7.required'    => 'Pertanyaan ini harus dijawab',
            ]
        );



        $request['user_id'] = auth()->user()->id;
     
        Kuesioner::create($request->all());

        return redirect('kuesioner')->with('sukses', 'Terima kasih. anda telah mengisi kuesioner tracerstudy FMIPA UNSULBAR');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kuesioner  $kuesioner
     * @return \Illuminate\Http\Response
     */
    public function show(Kuesioner $kuesioner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kuesioner  $kuesioner
     * @return \Illuminate\Http\Response
     */
    public function edit(Kuesioner $kuesioner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kuesioner  $kuesioner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kuesioner $kuesioner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kuesioner  $kuesioner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kuesioner $kuesioner)
    {
        $kuesioner->delete();

        return redirect('kuesioner')->with('berhasil', 'Data berhasil dihapus');
    }
}
