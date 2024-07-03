<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use App\Models\Pasien;
use Illuminate\View\View;
use Illuminate\Support\Str;



class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pasien.index', ['pasiens'=>Pasien::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request);

        $validatedData = $request->validate([
        // 'noRekapMedis' => 'required',
        'namaPengguna'  => 'required',
        'noKTP'  => 'required',
        'jekel'  => 'required',
        'tempatLahir'  => 'required',
        'tanggalLahir' => 'required',
        'noBPJS'  => 'required',
        'noHp'  => 'required',
        'email'  => 'required',
        'alamat'  => 'required',
    ]);

    // dd($validatedData);
     Pasien::create($validatedData);

     return redirect('pasien')->with('flash_message', 'Pasien Added!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pasien = pasien::find($id);
        return view('pasien.show')->with('pasien', $pasien);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): view
    {
        $pasien = Pasien::find($id);
        return view('pasien.edit')->with('pasien', $pasien);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $pasien = Pasien::find($id);
        $input = $request->all();
        $pasien->update($input);
        return redirect('pasien')->with('flash_message', 'pasien Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pasien::destroy($id);
        return redirect('pasien')->with('flash_message', 'pasien deleted!'); 
    }
}
