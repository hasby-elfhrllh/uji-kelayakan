<?php

namespace App\Http\Controllers;

use App\Inventaris;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $inventariss = Inventaris::latest()->paginate(5);
  
        return view('inventariss.index',compact('inventariss'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventariss.create');
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
            'id_inventaris' => 'required',
            'nama' => 'required',
            'kondisi' => 'required',
            'keterangan' => 'required',
            'jumlah' => 'required',
            'id_jenis' => 'required',
            'tgl_register' => 'required',
            'id_ruang' => 'required',
            'id_petugas' => 'required',
        ]);
  
        Inventaris::create($request->all());
   
        return redirect()->route('inventariss.index')
                        ->with('success','Inventaris created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function show(Inventaris $inventaris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventaris $inventaris)
    {
        return view('inventariss.edit',compact('inventaris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventaris $inventaris)
    {
        $request->validate([
            'id_inventaris' => 'required',
            'nama' => 'required',
            'kondisi' => 'required',
            'keterangan' => 'required',
            'jumlah' => 'required',
            'id_jenis' => 'required',
            'tgl_register' => 'required',
            'id_ruang' => 'required',
            'id_petugas' => 'required',
        ]);
  
        $inventaris->update($request->all());
  
        return redirect()->route('inventariss.index')
                        ->with('success','Inventaris updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventaris $inventaris)
    {
        $inventaris->delete();
  
        return redirect()->route('inventariss.index')
                        ->with('success','Inventaris deleted successfully');
    }
}
