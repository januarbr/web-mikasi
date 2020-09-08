<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petugas;
use DB;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas=Petugas::all();
        return view('petugas.index',['petugas'=>$petugas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petugas/create');
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
            'nip' => 'required|max:9',
            'nama_petugas' => 'required',
            'alamat_petugas' => 'required'
        ]);
        Petugas::create($request->all());
        return redirect()->route('petugas.index')
                        ->with('success','Petugas created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $petugas =Petugas::findOrFail($id);
        return view('petugas.edit', compact('petugas'));
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
        $validatedData = $request->validate([
            'nip' => 'required|max:9',
            'nama_petugas' => 'required',
            'alamat_petugas' => 'required'
        ]);
         Petugas::whereid($id)->update($validatedData);
         return redirect('/petugas')->with('success', 'Petugas berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         // menghapus data pegawai berdasarkan id yang dipilih
	DB::table('petugas')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
    return redirect()->route('petugas.index')
    ->with('success','petugas deleted successfully');
    }
}
