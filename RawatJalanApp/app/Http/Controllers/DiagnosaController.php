<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use App\Models\Diagnosa;
use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\PoliKlinik;
use Illuminate\View\View;

class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('diagnosa.index', ['diagnosas'=>diagnosa::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pasiens = Pasien::all();
        $dokters = Dokter::all();
        $poli_kliniks = PoliKlinik::all();
        return view('diagnosa.create', ['pasiens' => $pasiens, 'dokters' => $dokters, 'poli_kliniks' => $poli_kliniks]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //    dd($request);
       $validatedData = $request->validate([
        // 'idDiagnosa' => 'required',
        'noRekapMedis' => 'required',
        'idDokter'=> 'required',
        'idPoliKlinik'=> 'required',
        'tanggalKunjungan'=> 'required',
        'keterangan'=> 'required',
    ]);

    // dd($validatedData);
    Diagnosa::create($validatedData);
    return redirect('diagnosa')->with('flash_message', 'Diagnosa Added!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $diagnosa = diagnosa::find($id);
        return view('diagnosa.show')->with('diagnosa', $diagnosa);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $diagnosa = Diagnosa::find($id);
        return view('diagnosa.edit')->with('diagnosa', $diagnosa);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $diagnosa = Diagnosa::find($id);
        $input = $request->all();
        $diagnosa->update($input);
        return redirect('diagnosa')->with('flash_message', 'diagnosa Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Diagnosa::destroy($id);
        return redirect('diagnosa')->with('flash_message', 'diagnosa deleted!');
    }
}
