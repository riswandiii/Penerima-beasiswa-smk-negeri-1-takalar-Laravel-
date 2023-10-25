<?php

namespace App\Http\Controllers;

use App\Models\Normalisasi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Function untuk menampilkan dashboard admin
    public function index(Request $request)
    {
       $normalisasi = Normalisasi::all();
       if($request->search){
        return view('dashboard.index', [
            'title' => 'SMK NEGERI 1 TAKALAR',
            'datas' => Normalisasi::where('nama', 'LIKE', '%' . $request->search . '%')->latest()->paginate(3)
        ]);
       }else{
            return view('dashboard.index', [
                'title' => 'SMK NEGERI 1 TAKALAR',
                'datas' => $normalisasi
            ]);
       }
    }
}
