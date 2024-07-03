<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use App\Models\Obat;
use Illuminate\View\View;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('obat.index', ['obats'=>obat::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('obat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request);
        $validatedData = $request->validate([
            // 'idObat' => 'required', 
            'namaObat' => 'required',
            'keterangan' => 'required',
            'harga' => 'required',
        ]);
        
        // dd($validatedData);
         // Buat instance siswa dengan data yang divalidasi
         Obat::create($validatedData);
    
         return redirect('obat')->with('flash_message', 'Obat Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $obat = obat::find($id);
        return view('obat.show')->with('obat', $obat);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $obat = Obat::find($id);
        return view('obat.edit')->with('obat', $obat);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $obat = Obat::find($id);
        $input = $request->all();
        $obat->update($input);
        return redirect('obat')->with('flash_message', 'obat Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Obat::destroy($id);
        return redirect('obat')->with('flash_message', 'obat deleted!'); 
    }
}
