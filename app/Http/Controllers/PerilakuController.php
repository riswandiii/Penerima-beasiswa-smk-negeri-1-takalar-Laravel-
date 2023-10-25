<?php

namespace App\Http\Controllers;

use App\Models\Perilaku;
use Illuminate\Http\Request;

class PerilakuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Function untuk menampilkan view kriteria perilaku
        return view('dashboard.kriteria.Cperilaku.index', [
            'title' => 'SMK NEGRERI 1 TAKALAR',
            'perilakus' => Perilaku::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Funtion untuk menampilkan view tambah data kriteria perilaku
        return view('dashboard.kriteria.Cperilaku.create', [
                'title' => 'SMK NEGERI 1 TAKALAR'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Function untuk proses tambah data kriteria perilaku
        $validateData = $request->validate([
            'perilaku' => ['required'],
            'nilai' => ['required']
        ]);
        Perilaku::create($validateData);
        return redirect('/dashboard/kriteria-perilaku')->with('success', 'Added data kriteria successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Perilaku $perilaku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perilaku $perilaku, $id)
    {
        //function untuk menampilakn view edit data kriteria perilaku
        $perilaku = Perilaku::where('id', $id)->first();
        return view('dashboard.kriteria.Cperilaku.edit', [
            'title' => 'SMK NEGERI 1 TAKALAR',
            'perilaku' => $perilaku
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Perilaku $perilaku, $id)
    {
        //Function untuk proses update kriteria perilaku
        $perilaku = Perilaku::where('id', $id)->first();
        $rules = [
            'perilaku' => ['required'],
            'nilai' => ['required']
        ];
        $validateData = $request->validate($rules);
        Perilaku::where('id', $perilaku->id)->update($validateData);
        return redirect('/dashboard/kriteria-perilaku')->with('success', 'Edit data kriteria successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perilaku $perilaku, $id)
    {
        //Function untuk proses hapus data kriteria perilaku
        Perilaku::destroy('id', $id);
        return redirect('/dashboard/kriteria-perilaku')->with('success', 'Delete kriteria data was successful!');
    }
}
