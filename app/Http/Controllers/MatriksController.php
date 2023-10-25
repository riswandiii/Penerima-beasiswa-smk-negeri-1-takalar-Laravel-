<?php

namespace App\Http\Controllers;

use App\Models\Kehadiran;
use App\Models\Matriks;
use App\Models\Nilai;
use App\Models\Perilaku;
use App\Models\PrestasiAkademik;
use App\Models\Siswa;
use Illuminate\Http\Request;

class MatriksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Function untuk menampilkan view matriks keputusan
        return view('dashboard.matriks.index', [
            'title' => 'SMK NEGERI 1 TAKALAR',
            'matriks' => Matriks::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Funtion untuk menampilkan view tambah data matriks keputusan
        return view('dashboard.matriks.create', [
            'title' => 'SMK NEGERI 1 TAKALAR',
            'siswas' => Siswa::all(),
            'nilais' => Nilai::all(),
            'kehadirans' => Kehadiran::all(),
            'perilakus' => Perilaku::all(),
            'prestasis' => PrestasiAkademik::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Funtion untuk proses tambah data matriks keputusan
        $validateData = $request->validate([
            'siswa_id' => ['required'],
            'c1' => ['required'],
            'c2' => ['required'],
            'c3' => ['required'],
            'c4' => ['required'],
        ]);

        $siswa_id = Matriks::where('siswa_id', $request->siswa_id)->first();

        if(!empty($siswa_id)){
            return redirect('/dashboard/matriks-keputusan')->with('success', 'The student is already registered!');
        }else{
            Matriks::create($validateData);
            return redirect('/dashboard/matriks-keputusan')->with('success', 'Added decision matrix data was successful!');
        }
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Matriks $matriks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matriks $matriks, $id)
    {
        //Funtion untuk menampilkan view edit matriks keputusan
        $matriks = Matriks::where('id', $id)->first();
        return view('dashboard.matriks.edit', [
            'title' => 'SMK NEGERI 1 TAKALAR',
            'siswas' => Siswa::all(),
            'nilais' => Nilai::all(),
            'kehadirans' => Kehadiran::all(),
            'perilakus' => Perilaku::all(),
            'prestasis' => PrestasiAkademik::all(),
            'matriks' => $matriks
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matriks $matriks, $id)
    {
        // Funtion untuk proses edit data matriks keputusan
        $rules = [
            'siswa_id' => ['required'],
            'c1' => ['required'],
            'c2' => ['required'],
            'c3' => ['required'],
            'c4' => ['required'],
        ];
        $validateData = $request->validate($rules);
        Matriks::where('id', $id)->update($validateData);
        return redirect('/dashboard/matriks-keputusan')->with('success', 'Edit decision matrix data successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matriks $matriks, $id)
    {
        //Function untuk proses hapus data matriks keputusan
        Matriks::destroy('id', $id);
        return redirect('/dashboard/matriks-keputusan')->with('success', 'Delete decision matrix data was successful!');
    }
}
