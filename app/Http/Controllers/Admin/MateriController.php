<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Matkul;
use DB;

class MateriController extends Controller
{
    // public function index()
    // {
    //     $materi= Matkul::where('semester',3)->distinct()->get(['matkul']);
    //     return view('admin.materi.index',['materi'=>$materi]);
    // } 

    public function index()
    {
        $materi= DB::table('matakuliah')->distinct()->get(['semester']);
        return view('admin.materi.index',['materi'=>$materi]);
    } 

    public function show($semester)
    {
        $materiadmin= Matkul::where('semester',$semester)->distinct()->get(['matkul']);
        return view('admin.materi.matkul',['materiadmin'=>$materiadmin]);
    }

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
        return redirect()->route('materi.index')
                        ->with('success','Materi created successfully.');
    }
}
