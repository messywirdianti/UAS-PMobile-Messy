<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use App\Models\RekapMedis;
use App\Models\Pasien;
use App\Models\Dokter;
use Illuminate\View\View;

class RekapMedisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('rekapMedis.index', ['rekap_medis'=>RekapMedis::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pasiens = Pasien::all();
        $dokters = Dokter::all();
        return view('rekapMedis.create', ['pasiens' => $pasiens, 'dokters' => $dokters]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            // 'idRekapMedis' => 'required', 
            'noRekapMedis' => 'required',
            'idDokter' => 'required',
            'tanggalKunjungan' => 'required',
            'keluhan' => 'required',
            'diagnosa' => 'required',
            'tekananDarah' => 'required',
            'suhuTubuh' => 'required',
            'beratBadan' => 'required',
            'tinggiBadan' => 'required',
        ]);
        // dd($validatedData);
    
         // Buat instance siswa dengan data yang divalidasi
         RekapMedis::create($validatedData);
    
         return redirect('rekapMedis')->with('flash_message', 'rekapMedis Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rekapMedis = rekapMedis::find($id);
        return view('rekapMedis.show')->with('rekapMedis', $rekapMedis);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rekapMedis = RekapMedis::find($id);
        return view('rekapMedis.edit')->with('rekapMedis', $rekapMedis);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rekapMedis = RekapMedis::find($id);
        $input = $request->all();
        $rekapMedis->update($input);
        return redirect('rekapMedis')->with('flash_message', 'rekapMedis Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        RekapMedis::destroy($id);
        return redirect('RekapMedis')->with('flash_message', 'rekapMedis deleted!');
    }
}
