<?php

namespace App\Http\Controllers;

use App\Pinjaman;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pinjamans = Pinjaman::latest()->paginate(5);
  
        return view('pinjamans.index',compact('pinjamans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pinjamans.create');
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
            'id_peminjaman' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
            'status_peminjaman' => 'required',
            'id_pegawai' => 'required',
        ]);
  
        Pinjaman::create($request->all());
   
        return redirect()->route('pinjamans.index')
                        ->with('success','Pinjaman created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pinjaman  $pinjaman
     * @return \Illuminate\Http\Response
     */
    public function show(Pinjaman $pinjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pinjaman  $pinjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pinjaman $pinjaman)
    {
        return view('pinjamans.edit',compact('pinjaman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pinjaman  $pinjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pinjaman $pinjaman)
    {
        $request->validate([
            'id_peminjaman' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
            'status_peminjaman' => 'required',
            'id_pegawai' => 'required',
        ]);
  
        $pinjaman->update($request->all());
  
        return redirect()->route('pinjamans.index')
                        ->with('success','Pinjaman updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pinjaman  $pinjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pinjaman $pinjaman)
    {
        return redirect()->route('pinjamans.index')
                        ->with('success','Pinjaman deleted successfully');
    }
}
