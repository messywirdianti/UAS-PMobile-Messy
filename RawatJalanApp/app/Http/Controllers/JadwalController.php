<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use App\Models\Jadwal;
use App\Models\Dokter;
use App\Models\PoliKlinik;
use Illuminate\View\View;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('jadwal.index', ['jadwals'=>Jadwal::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dokters = Dokter::all();
        $poli_kliniks = PoliKlinik::all();
        return view('jadwal.create', [ 'dokters' => $dokters, 'poli_kliniks' => $poli_kliniks]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //    dd($request);
       $validatedData = $request->validate([
        // 'idJadwal' => 'required',
        'idDokter'=> 'required',
        'idPoliKlinik'=> 'required',
        'jekel'=> 'required',
        'jamMulai'=> 'required',
        'jamSelesai'=> 'required',
    ]);

    // dd($validatedData);
    Jadwal::create($validatedData);
    return redirect('jadwal')->with('flash_message', 'Jadwal Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jadwal = jadwal::find($id);
        return view('jadwal.show')->with('jadwal', $jadwal);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jadwal = Jadwal::find($id);
        return view('jadwal.edit')->with('jadwal', $jadwal);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jadwal = Jadwal::find($id);
        $input = $request->all();
        $jadwal->update($input);
        return redirect('jadwal')->with('flash_message', 'jadwal Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Jadwal::destroy($id);
        return redirect('jadwal')->with('flash_message', 'jadwal deleted!');
    }
}
