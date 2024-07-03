<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\Pasien;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendaftarans = Pendaftaran::all();
        return view('pendaftaran.index', compact('pendaftarans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pasiens = Pasien::all();
        return view('pendaftaran.create', compact('pasiens'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi request
        $validatedData = $request->validate([
            'noRekapMedis' => 'required',
            'namaLengkap' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required|date',
            'jekel' => 'required',
            'tanggalKunjungan' => 'required|date',
            'asalRujukan' => 'required',
            'poliTujuan' => 'required',
            'dokter' => 'required',
            'pekerjaan' => 'required',
            'noHp' => 'required',
            'agama' => 'required',
            'kewarganegaraan' => 'required',
        ]);

        // Simpan data pendaftaran
        $pendaftaran = new Pendaftaran();
        $pendaftaran->fill($validatedData);

        // Logika untuk menghasilkan nomor antrian, misalnya
        $lastAntrian = Pendaftaran::orderBy('created_at', 'desc')->first();
        $nomorAntrian = $lastAntrian ? $lastAntrian->nomorAntrian + 1 : 1;

        $pendaftaran->nomorAntrian = $nomorAntrian;

        $pendaftaran->save();

        // Redirect atau response sesuai kebutuhan aplikasi
        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil. Nomor Antrian: ' . $nomorAntrian);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pendaftaran = Pendaftaran::find($id);
        return view('pendaftaran.show')->with('pendaftaran', $pendaftaran);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pendaftaran = Pendaftaran::find($id);
        return view('pendaftaran.edit')->with('pendaftaran', $pendaftaran);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pendaftaran = Pendaftaran::find($id);
        $validatedData = $request->validate([
            'noRekapMedis' => 'required',
            'namaLengkap' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required|date',
            'jekel' => 'required',
            'tanggalKunjungan' => 'required|date',
            'asalRujukan' => 'required',
            'poliTujuan' => 'required',
            'dokter' => 'required',
            'pekerjaan' => 'required',
            'noHp' => 'required',
            'agama' => 'required',
            'kewarganegaraan' => 'required',
        ]);

        $pendaftaran->update($validatedData);
        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pendaftaran::destroy($id);
        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil dihapus!');
    }
}
