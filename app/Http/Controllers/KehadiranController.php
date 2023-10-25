<?php

namespace App\Http\Controllers;

use App\Models\Kehadiran;
use Illuminate\Http\Request;

class KehadiranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Function untuk menampilkan view data kriteria kehadiran
        return view('dashboard.kriteria.Ckehadiran.index', [
            'title' => 'SMK NEGERI 1 TAKALAR',
            'kehadirans' => Kehadiran::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Function untuk menampilkan view tambah data categori kehadiran
        return view('dashboard.kriteria.Ckehadiran.create', [
            'title' => 'SMK NEGERI 1 TAKALAR'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Function untuk proses tambah data kriteria absensi kehadiran
        $validateData = $request->validate([
            'kehadiran' => ['required'],
            'nilai' => ['required']
        ]);
        Kehadiran::create($validateData);
        return redirect('/dashboard/kriteria-absensi')->with('success', 'Added data kriteria successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kehadiran $kehadiran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kehadiran $kehadiran, $id)
    {
        //Function untuk menampilkan view edit data kategory absensi kehadiran
        $kehadiran = Kehadiran::where('id', $id)->first();
        return view('dashboard.kriteria.Ckehadiran.edit', [
            'title' => 'SMK NEGERI 1 TAKALAR',
            'kehadiran' =>$kehadiran
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kehadiran $kehadiran, $id)
    {
        //Function untuk proses edit data kriteria absensi kehadiran
        $rules = [
            'kehadiran' => ['required'],
            'nilai' => ['required']
        ];
        $validateData = $request->validate($rules);
        Kehadiran::where('id', $id)->update($validateData);
        return redirect('/dashboard/kriteria-absensi')->with('success', 'Edit data kriteria successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kehadiran $kehadiran, $id)
    {
        //Function untuk proses hapus data kategori abseni kehadiran
        Kehadiran::destroy('id', $id);
        return redirect('/dashboard/kriteria-absensi')->with('success', 'Delete kriteria data was successful!');

    }
}
