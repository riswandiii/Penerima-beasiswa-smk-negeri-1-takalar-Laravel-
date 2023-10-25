<?php

namespace App\Http\Controllers;

use App\Models\Normalisasi;
use App\Http\Requests\StoreNormalisasiRequest;
use App\Http\Requests\UpdateNormalisasiRequest;
use App\Models\Matriks;

class NormalisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //c1 c2 benefit 
        // c3 c4 cost
        $c1 = Matriks::max('c1');
        $c2 = Matriks::max('c2');
        $c3 = Matriks::min('c3');
        $c4 = Matriks::min('c4');
        $matriks = Matriks::all();

        $normalisasi = Normalisasi::all();
        if(!empty($normalisasi)){
            Normalisasi::destroy($normalisasi);
            foreach($matriks as $mat){
                $data = [
                    'matrik_id' => $mat->id,
                    'nama' => $mat->siswa->nama,
                    'c1' => 0.4 *  $mat->c1 / $c1,
                    'c2' => 0.3 * $mat->c2 / $c2,
                    'c3' => 0.2 * $c3 / $mat->c3,
                    'c4' => 0.1 * $c4 / $mat->c4,
                    'hasil' => 0.4 * $mat->c1 / $c1 + 0.3 * $mat->c2 / $c2 + 0.2 * $c3 / $mat->c3 + 0.1 * $c4 / $mat->c4
                ];
                Normalisasi::create($data);
            }
        }else{
            foreach($matriks as $mat){
                $data = [
                    'matrik_id' => $mat->id,
                    'nama' => $mat->siswa->nama,
                    'c1' => 0.4 *  $mat->c1 / $c1,
                    'c2' => 0.3 * $mat->c2 / $c2,
                    'c3' => 0.2 * $c3 / $mat->c3,
                    'c4' => 0.1 * $c4 / $mat->c4,
                    'hasil' => 0.4 * $mat->c1 / $c1 + 0.3 * $mat->c2 / $c2 + 0.2 * $c3 / $mat->c3 + 0.1 * $c4 / $mat->c4
                ];
                Normalisasi::create($data);
            }
        }
        
        return redirect('/dashboard')->with('success', 'Normalisasi matrix x berhasil!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNormalisasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Normalisasi $normalisasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Normalisasi $normalisasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNormalisasiRequest $request, Normalisasi $normalisasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Normalisasi $normalisasi)
    {
        //
    }
}
