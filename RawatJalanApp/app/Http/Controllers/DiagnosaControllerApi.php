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
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class DiagnosaControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Diagnosa::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $diagnosa = new diagnosa;

            $rules = [
                'noRekapMedis'  => 'required',
                'idDokter'  => 'required',
                'idPoliKlinik'  => 'required',
                'tanggalKunjungan'  => 'required',
                'keterangan' => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Gagal memasukkan data',
                    'data' => $validator->errors()
                ]);
            }

            $diagnosa->noRekapMedis = $request->noRekapMedis;
            $diagnosa->idDokter = $request->idDokter;
            $diagnosa->idPoliKlinik = $request->idPoliKlinik;
            $diagnosa->tanggalKunjungan = $request->tanggalKunjungan;
            $diagnosa->keterangan = $request->keterangan;
    
            $_POST = $diagnosa->save();
    
            return response()->json([
                'status'=>true,
                'message'=>'Sukses untuk memasukkan data'
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $diagnosa = diagnosa::find($id);
        return  $diagnosa;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $diagnosa = diagnosa::find($id);
        if (empty($diagnosa)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

            $rules = [
                'noRekapMedis'  => 'required',
                'idDokter'  => 'required',
                'idPoliKlinik'  => 'required',
                'tanggalKunjungan'  => 'required',
                'keterangan' => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Gagal memasukkan data',
                    'data' => $validator->errors()
                ]);
            }

            $diagnosa->noRekapMedis = $request->noRekapMedis;
            $diagnosa->idDokter = $request->idDokter;
            $diagnosa->idPoliKlinik = $request->idPoliKlinik;
            $diagnosa->tanggalKunjungan = $request->tanggalKunjungan;
            $diagnosa->keterangan = $request->keterangan;
    
            $_POST = $diagnosa->save();
    
            return response()->json([
                'status'=>true,
                'message'=>'Sukses untuk memasukkan data'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $diagnosa = diagnosa::find($id);
        if (empty($diagnosa)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }
    
            $_POST = $diagnosa->delete();
    
            return response()->json([
                'status'=>true,
                'message'=>'Sukses melakukan delete data'
            ]);
    }
}
