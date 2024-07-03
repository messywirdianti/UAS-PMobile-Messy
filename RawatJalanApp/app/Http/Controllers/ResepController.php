<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use App\Models\Resep;
use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\Obat;
use Illuminate\View\View;

class ResepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('resep.index', ['reseps'=>resep::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pasiens = Pasien::all();
        $dokters = Dokter::all();
        $obats = Obat::all();
        return view('resep.create', ['pasiens' => $pasiens, 'dokters' => $dokters, 'obats' => $obats]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //    dd($request);
       $validatedData = $request->validate([
        // 'idResep' => 'required',
        'noRekapMedis' => 'required',
        'idDokter'=> 'required',
        'idObat'=> 'required',
        'keterangan'=> 'required',
    ]);

    // dd($validatedData);
    Resep::create($validatedData);
    return redirect('resep')->with('flash_message', 'resep Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $resep = resep::find($id);
        return view('resep.show')->with('resep', $resep);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): view
    {
        $resep = Resep::find($id);
        return view('resep.edit')->with('resep', $resep);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $resep = Resep::find($id);
        $input = $request->all();
        $resep->update($input);
        return redirect('resep')->with('flash_message', 'resep Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Resep::destroy($id);
        return redirect('resep')->with('flash_message', 'resep deleted!');
    }
}
