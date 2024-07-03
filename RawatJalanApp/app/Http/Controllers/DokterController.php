<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use App\Models\Dokter;
use Illuminate\View\View;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('dokter.index', ['dokters'=>Dokter::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {

        // dd($request);
        $validatedData = $request->validate([
            // 'idDokter' => 'required', 
            'namaDokter' => 'required',
            'email' => 'required',
            'noHp' => 'required',
            'spesialis' => 'required',
        ]);
        
        // dd($validatedData);
         // Buat instance siswa dengan data yang divalidasi
         Dokter::create($validatedData);
    
         return redirect('dokter')->with('flash_message', 'Dokter Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dokter = dokter::find($id);
        return view('dokter.show')->with('dokter', $dokter);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): view
    {
        $dokter = Dokter::find($id);
        return view('dokter.edit')->with('dokter', $dokter);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dokter = dokter::find($id);
        $input = $request->all();
        $dokter->update($input);
        return redirect('dokter')->with('flash_message', 'dokter Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dokter::destroy($id);
        return redirect('dokter')->with('flash_message', 'dokter deleted!'); 
    }
}
