<?php

namespace App\Http\Controllers;

use App\Models\Normalisasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    //Function untuk menampilkan view home
    public function index() 
    {
        return view('index', [
            'title' => 'SMK NEGERI 1 TAKALAR'
        ]);
    }

    // Funtion untuk menampilkan view penerima beasiswa
    public function penerima(Request $request)
    {
        $penerima = Normalisasi::all(); 
       if($request->search){
            return view('penerima.index', [
                'title' => 'SMK NEGERI 1 TAKALAR',
                'penerimas' => Normalisasi::where('nama', 'LIKE', '%' . $request->search . '%')->latest()->paginate(3)
            ]);
       }else{
            return view('penerima.index', [
                'title' => 'SMK NEGERI 1 TAKALAR',
                'penerimas' => $penerima
            ]);
       }
    }

}

