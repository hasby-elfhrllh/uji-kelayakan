<?php

namespace App\Http\Controllers;

use App\DetailPinjam;
use Illuminate\Http\Request;

class DetailPinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detailpinjams = DetailPinjam::latest()->paginate(5);
  
        return view('detailpinjams.index',compact('detailpinjams'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('detailpinjams.create');
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
            'id_detail_pinjam' => 'required',
            'id_invetaris' => 'required',
            'jumlah' => 'required',
        ]);
  
        DetailPinjam::create($request->all());
   
        return redirect()->route('detailpinjams.index')
                        ->with('success','DetailPinjam created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetailPinjam  $detailPinjam
     * @return \Illuminate\Http\Response
     */
    public function show(DetailPinjam $detailPinjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetailPinjam  $detailPinjam
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailPinjam $detailPinjam)
    {
        return view('detailpinjams.edit',compact('detailPinjam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetailPinjam  $detailPinjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailPinjam $detailPinjam)
    {
        $request->validate([
            'id_detail_pinjam' => 'required',
            'id_invetaris' => 'required',
            'jumlah' => 'required',
        ]);
  
        $detailPinjam->update($request->all());
  
        return redirect()->route('detailpinjams.index')
                        ->with('success','DetailPinjam updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetailPinjam  $detailPinjam
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailPinjam $detailPinjam)
    {
        $detailPinjam->delete();
  
        return redirect()->route('detailpinjams.index')
                        ->with('success','DetailPinjam deleted successfully');
    }
}
