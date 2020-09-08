<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Buku;
use DB;

class BukuController extends Controller
{
    /**A
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku=Buku::all();
        return view('buku/index',['buku'=>$buku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
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
            'kode_buku'=>'required|max:7',
            'judul_buku'=>'required',
            'pengarang_buku'=>'required',
            'penerbit_buku'=>'required',
            'jumlah_buku'=>'required'
        ]);
        Buku::create($request->all());
        return redirect()->route('buku.index')->with('success','Anggota created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($buku_id)
    {
        $buku = Buku::findOrFail($buku_id);
        return view('buku.edit', compact('buku'));
    
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $buku_id)
    {
        $validatedData=$request->validate([
            'kode_buku' => 'required|max:5',
            'judul_buku' => 'required',
            'pengarang_buku' => 'required',
            'penerbit_buku'=>'required',
            'jumlah_buku'=>'required'
        ]);
        Buku::whereBuku_id($buku_id)->update($validatedData);
        return redirect('/buku')->with('success', 'Buku Berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($buku_id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
	DB::table('buku')->where('buku_id',$buku_id)->delete();
		
	// alihkan halaman ke halaman pegawai
    return redirect()->route('buku.index')
    ->with('success','Buku deleted successfully');
    }
}
