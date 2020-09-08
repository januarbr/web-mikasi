<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Anggota;


class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // return view('admin/dashboard',
        // [
        //     $anggota =Anggota::all()->count(),
            // 'transaction'=>Transaction::count(),
            // 'transaction_pending'=>Transaction::where('transaction_status','PENDING')->count(),
            // 'transaction_success'=>Transaction::where('transaction_status','SUCCESS')->count(),
    
        // ]);

        $count = Anggota::count();
        return View('admin/dashboard')->with('count', $count);
    } 
}
