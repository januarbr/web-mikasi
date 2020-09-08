<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;
use DB;
class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota=Anggota::paginate(5);
        return view('anggota/index',['anggota'=>$anggota]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anggota/create');
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
            'kode_anggota' => 'required|max:5',
            'nama_anggota' => 'required',
            'alamat_anggota' => 'required'
        ]);
        Anggota::create($request->all());
        return redirect()->route('anggota.index')
                        ->with('success','Anggota created successfully.');
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
    public function edit($anggota_id)
    {
        $anggota = Anggota::findOrFail($anggota_id);
        return view('anggota.edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $anggota_id)
    {
        $validatedData = $request->validate([
            'kode_anggota' => 'required|max:5',
            'nama_anggota' => 'required',
            'alamat_anggota' => 'required'
        ]);
         Anggota::whereAnggota_id($anggota_id)->update($validatedData);
         return redirect('/anggota')->with('success', 'Anggota berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($anggota_id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
	DB::table('anggota')->where('anggota_id',$anggota_id)->delete();
		
	// alihkan halaman ke halaman pegawai
    return redirect()->route('anggota.index')
    ->with('success','anggota deleted successfully');
    }
}
