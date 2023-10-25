<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //Function untuk menampilkan view calon penerima beasiswa
        if($request->search){
            return view('dashboard.siswa.index', [
                'title' => 'SMK NEGERI 1 TAKALAR',
                'siswas' => Siswa::where('nis', 'LIKE', '%' . $request->search . '%')->latest()->paginate(5)
            ]);
        }else{
            return view('dashboard.siswa.index', [
                'title' => 'SMK NEGERI 1 TAKALAR',
                'siswas' => Siswa::latest()->paginate(5)
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Funtion untuk menampilkan view tambah data calon penerima beasiswa
        return view('dashboard.siswa.create', [
            'title' => 'SMK NEGERI 1 TAKALAR'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Function untuk proses tambah data calon penerima beasiswa
        $validateData = $request->validate([
            'nama' => ['required'],
            'nis' => ['required', 'unique:siswas'],
            'alamat' => ['required'],
            'ttl' => ['required'],
            'email' => ['required'],
            'no_handphone' => ['required'],
        ]);
        Siswa::create($validateData);
        return redirect('/dashboard/calon-penerima')->with('success', 'Add student data successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa, $id)
    {
        //Function untuk menampilkan view detail siswa
        return view('dashboard.siswa.show', [
            'title' => 'SMK NEGERI 1 TAKALAR',
            'detail' => Siswa::where('id', $id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa, $id)
    {
        //Function untuk menampilkan view edit data calon penerima beasiswa
        $siswa = Siswa::where('id', $id)->first();
        return view('dashboard.siswa.edit', [
            'title' => 'SMK NEGERI 1 TAKALAR',
            'siswa' => $siswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa, $id)
    {
        //Function untuk proses edit data calon penerima beasiswa
        $rules = [
            'nama' => ['required'],
            'nis' => ['required'],
            'alamat' => ['required'],
            'ttl' => ['required'],
            'email' => ['required'],
            'no_handphone' => ['required']
        ];
        $validateData = $request->validate($rules);
        Siswa::where('id', $id)->update($validateData);
        return redirect('/dashboard/calon-penerima')->with('success', 'Edit student data successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa, $id)
    {
        //Function untuk hapu data calon penerima beasiwa
        Siswa::destroy('id', $id);
        return redirect('/dashboard/calon-penerima')->with('success', 'Delete student data successfully!');
    }
}
