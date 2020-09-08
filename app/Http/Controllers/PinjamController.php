<?php

namespace App\Http\Controllers;

use App\pinjam;
use App\Buku;
use App\Anggota;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pinjam=Pinjam::all();
        $buku=Buku::all();
        $anggota=Anggota::all();
        return view('pinjam.index',compact('buku','anggota','pinjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = Buku::all();
        $anggota = Anggota::all();
        return view("pinjam/create", compact('buku','anggota'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([ 
            'buku_id' => 'required|not_in:0',
            'anggota_id' => 'required|not_in:0',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
        ]);

        $pinjam = Pinjam::create($validatedData);

        return redirect('/pinjam')->with('success', 'Data Peminjaman berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function show(pinjam $pinjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        $pinjam=Pinjam::findOrFail($id);
        $buku = Buku::all();
        $anggota = Anggota::all();
        return view("pinjam/edit", compact('pinjam','buku','anggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Pinjam $pinjam)
    {
        $request->validate([
                             'buku_id' => 'required|not_in:0',
                             'anggota_id' => 'required|not_in:0',
                             'tgl_pinjam' => 'required',
                             'tgl_kembali' => 'required',
        ]);
        $pinjam->update($request->all());
        return redirect()->route('pinjam.index')
                        ->with('success','Pinjam updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pinjam = Pinjam::findOrFail($id);
        $pinjam->delete();
        return redirect('/pinjam')->with('success', 'Data berhasil dihapus');
    }

    public function unactive_pinjam($id)
    {  
        Pinjam::whereId($id)
            ->update(['kembali'=>0]);
            return redirect()->route('pinjam.index')
                         ->with('success', 'Buku belum dikembalikan!');
    }

    public function active_pinjam($id)
    {
        Pinjam::whereId($id)
            ->update(['kembali' => 1]);
            return redirect()->route('pinjam.index')
                         ->with('success', 'Buku Sudah dikembalikan!');
    }

}
