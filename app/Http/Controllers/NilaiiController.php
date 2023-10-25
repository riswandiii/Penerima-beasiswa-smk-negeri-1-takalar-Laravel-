<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // Function untuk menampilkan data kriteria penilaian
        return view('dashboard.kriteria.Cnilai.index', [
            'title' => 'SMK NEGERI 1 TAKALAR',
            'nilais' => Nilai::all() 
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Function untuk menampilkan view tambah data kriteria penialain
        return view('dashboard.kriteria.Cnilai.create', [
            'title' => 'SMK NEGERI 1 TAKALAR'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Function untuk proses tambah data kriteria penilaian
        $validateData = $request->validate([
            'nilai_rata_rata' => ['required'],
            'nilai' => ['required']
        ]);
        Nilai::create($validateData);
        return redirect('/dashboard/kriteria-penilaian')->with('success', 'Added data kriteria successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nilai $nilai, $id)
    {
        //Function untuk menampilkan view edit data kriteria nilai
        $nilai = Nilai::where('id', $id)->first();
        return view('dashboard.kriteria.Cnilai.edit', [
            'title' => 'SMK NEGERI 1 TAKALAR',
            'nilai' => $nilai
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nilai $nilai, $id)
    {
        //Function untuk proses update data kriteria neilai
        $nilai = Nilai::where('id', $id)->first();
        $rules = [
            'nilai_rata_rata' => ['required'],
            'nilai' => ['required']
        ];
        $validateData = $request->validate($rules);
        Nilai::where('id', $nilai->id)->update($validateData);
        return redirect('/dashboard/kriteria-penilaian')->with('success', 'Edit data kriteria successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nilai $nilai, $id)
    {
        //FUnction untuk menghapus data kriteria nilai
        $nilai = Nilai::where('id', $id)->first();
        Nilai::destroy('id', $nilai->id);
        return redirect('/dashboard/kriteria-penilaian')->with('success', 'Delete kriteria data was successful!');
    }
}
