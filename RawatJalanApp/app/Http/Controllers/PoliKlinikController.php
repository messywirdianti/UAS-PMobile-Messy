<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use App\Models\PoliKlinik;
use Illuminate\View\View;

class PoliKlinikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('poliKlinik.index', ['poli_kliniks'=>PoliKlinik::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('poliKlinik.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request);
        $validatedData = $request->validate([
            // 'idPoliKlinik' => 'required', 
            'namaPoliKlinik' => 'required',
        ]);
        // dd($validatedData);
    
         // Buat instance siswa dengan data yang divalidasi
         PoliKlinik::create($validatedData);
    
         return redirect('poliKlinik')->with('flash_message', 'PoliKlinik Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $poliKlinik = poliKlinik::find($id);
        return view('poli_kliniks.show')->with('poliKlinik', $poliKlinik);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $poliKlinik = PoliKlinik::find($id);
        return view('poliKlinik.edit')->with('poliKlinik', $poliKlinik);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $poliKlinik = PoliKlinik::find($id);
        $input = $request->all();
        $poliKlinik->update($input);
        return redirect('poliKlinik')->with('flash_message', 'poliKlinik Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        PoliKlinik::destroy($id);
        return redirect('poliKlinik')->with('flash_message', 'poliKlinik deleted!');
    }
}
