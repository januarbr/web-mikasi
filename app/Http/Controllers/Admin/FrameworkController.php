<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Matkul;
use Illuminate\Http\Request;
use DB;

class FrameworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=DB::table('matakuliah')->where('matkul','FRAMEWORK')->get();;
        return view('admin.materi.framework.index',['items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.materi.framework.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {
        $request->validate([
            'jurusan'=>'required',
            'semester'=>'required',
            'matkul'=>'required',
            'tema' => 'required|max:255',
            'link' => 'required',
            
        ]);
        Matkul::create($request->all());
        return redirect()->route('framework.index')
                        ->with('success','Materi created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($matkul)
    {
        $items=DB::table('matakuliah')->where('matkul',$matkul)->get(['id','tema','link']);
        return view('admin.materi.framework.index',['items'=>$items]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Matkul::findorFail($id);

        return view('admin.materi.framework.edit',
        ['items'=>$items]);
    
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validatedData = $request->validate([
            'tema' => 'required|max:50',
            'link' => 'required',
        ]);
         Matkul::whereid($id)->update($validatedData);
         return redirect('admin/framework/show')->with('success', 'Materi berhasil diperbarui');
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
	DB::table('matakuliah')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
    return redirect()->route('framework.index')
    ->with('success','framework deleted successfully');
    }

    
}

    

