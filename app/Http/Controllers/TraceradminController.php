<?php

namespace App\Http\Controllers;

use App\Models\Kuesioner;
use Illuminate\Http\Request;

class TraceradminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kuesioner::all();
     
        return view('dashboard.data-tracer.index', [
            'title' => 'Data Tracer',
            'alumni' => $data
        ]);
    }

    public function show($id)
    {
        $user = Kuesioner::find($id);
        
        return view('dashboard.data-tracer.show',
       [
        'user' => $user,
        'title' => 'Data Tracer'
       ]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kuesioner $kuesioner)
    {
 
        $kuesioner->delete();

        return redirect('data-tracer')->with('berhasil', 'Data berhasil dihapus');
    }
}
