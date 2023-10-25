<?php

namespace App\Http\Controllers;

use App\Models\PrestasiAkademik;
use Illuminate\Http\Request;

class PrestasiAkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Function untuk menampilkan view prestasi akadmeik kriteria
        return view('dashboard.kriteria.Cprestasi.index', [
            'title' => 'SMK NEGERI 1 TAKALAR',
            'prestasis' => PrestasiAkademik::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Function untuk menampilakn view tambah data kriteria prestasi akademik
        return view('dashboard.kriteria.Cprestasi.create', [
            'title' => 'SMK NEGERI 1 TAKALAR'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Function untuk proses tambah data kriteria prestasi akademik
        $validateData = $request->validate([
            'prestasi' => ['required'],
            'nilai' => ['required']
        ]);
        PrestasiAkademik::create($validateData);
        return redirect('/dashboard/kriteria-prestasi')->with('success', 'Added data kriteria successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PrestasiAkademik $prestasiAkademik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrestasiAkademik $prestasiAkademik, $id)
    {
        $prestasi = PrestasiAkademik::where('id', $id)->first();
        //Function untuk menampilkan view edit kriteria prestasi akademik
        return view('dashboard.kriteria.Cprestasi.edit', [
            'title' => 'SMK NEGERI  TAKALAR',
            'prestasi' => $prestasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PrestasiAkademik $prestasiAkademik, $id)
    {
        // Function untuk proses update kriteria prestasi akademik
        $rules = [
            'prestasi' => ['required'],
            'nilai' => ['required']
        ];
        $validateData = $request->validate($rules);
        PrestasiAkademik::where('id', $id)->update($validateData);
        return redirect('/dashboard/kriteria-prestasi')->with('success', 'Edit data kriteria successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrestasiAkademik $prestasiAkademik, $id)
    {
        //Funtion untuk proses hapus data kriteria pretaasi akademik
        PrestasiAkademik::destroy('id', $id);
        return redirect('/dashboard/kriteria-prestasi')->with('success', 'Delete kriteria data was successful!');
    }
}
