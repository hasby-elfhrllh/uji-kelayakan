<?php

namespace App\Http\Controllers;

use App\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jeniss = Jenis::latest()->paginate(5);
  
        return view('jeniss.index',compact('jeniss'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jeniss.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_jenis' => 'required',
            'nama_jenis' => 'required',
            'keterangan' => 'required',
        ]);
  
        Jenis::create($request->all());
   
        return redirect()->route('jeniss.index')
                        ->with('success','Jenis created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function show(Jenis $jenis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function edit(Jenis $jenis)
    {
        return view('jeniss.edit',compact('jenis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jenis $jenis)
    {
        $request->validate([
            'id_jenis' => 'required',
            'nama_jenis' => 'required',
            'keterangan' => 'required',
        ]);
  
        $jenis->update($request->all());
  
        return redirect()->route('jeniss.index')
                        ->with('success','Jenis updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jenis $jenis)
    {
        $jenis->delete();
  
        return redirect()->route('jeniss.index')
                        ->with('success','Jenis deleted successfully');
    }
}
