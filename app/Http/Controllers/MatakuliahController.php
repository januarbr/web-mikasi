<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matkul;
use Illuminate\Support\Facades\DB;
class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
    public function show($matkul)
    {
        $items = DB::table('matakuliah')->where('matkul',$matkul)->get();

        return view('matkul.detail',['items'=>$items]);
    }

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
    public function destroy($id)
    {
        //
    }
    public function tampil($semester)
    {
        $matakuliah=Matkul::where('semester',$semester)->distinct()->get(['matkul']);
        return view('matkul/index',['matakuliah'=>$matakuliah]);
    }

    public function cari(Request $request){
        //menangkap data pencarian
        $cari = $request->cari;

        //mengambil data dari table matakuliah sesuia pencarian data
        $matakuliah = Matkul::where('matkul','like',"%".$cari."%")->distinct()->get(['matkul']);
        return view('matkul/index',['matakuliah'=>$matakuliah]);
    }
}
