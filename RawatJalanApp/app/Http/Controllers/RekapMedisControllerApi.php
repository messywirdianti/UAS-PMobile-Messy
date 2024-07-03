<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use App\Models\RekapMedis;
use App\Models\Pasien;
use App\Models\Dokter;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class RekapMedisControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return RekapMedis::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $rekapMedis = new rekapMedis;

            $rules = [
                'noRekapMedis'  => 'required',
                'idDokter'  => 'required',
                'tanggalKunjungan'  => 'required',
                'keluhan'  => 'required',
                'diagnosa' => 'required',
                'tekananDarah'  => 'required',
                'suhuTubuh'  => 'required',
                'beratBadan'  => 'required',
                'tinggiBadan'  => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Gagal memasukkan data',
                    'data' => $validator->errors()
                ]);
            }

            $rekapMedis->noRekapMedis = $request->noRekapMedis;
            $rekapMedis->idDokter = $request->idDokter;
            $rekapMedis->tanggalKunjungan = $request->tanggalKunjungan;
            $rekapMedis->keluhan = $request->keluhan;
            $rekapMedis->diagnosa = $request->diagnosa;
            $rekapMedis->tekananDarah = $request->tekananDarah;
            $rekapMedis->suhuTubuh = $request->suhuTubuh;
            $rekapMedis->beratBadan = $request->beratBadan;
            $rekapMedis->tinggiBadan = $request->tinggiBadan;
    
            $_POST = $rekapMedis->save();
    
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
        $rekapMedis = rekapMedis::find($id);
        return  $rekapMedis;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rekapMedis = rekapMedis::find($id);
        if (empty($rekapMedis)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

            $rules = [
                'noRekapMedis'  => 'required',
                'idDokter'  => 'required',
                'tanggalKunjungan'  => 'required',
                'keluhan'  => 'required',
                'diagnosa' => 'required',
                'tekananDarah'  => 'required',
                'suhuTubuh'  => 'required',
                'beratBadan'  => 'required',
                'tinggiBadan'  => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Gagal memasukkan data',
                    'data' => $validator->errors()
                ]);
            }

            $rekapMedis->noRekapMedis = $request->noRekapMedis;
            $rekapMedis->idDokter = $request->idDokter;
            $rekapMedis->tanggalKunjungan = $request->tanggalKunjungan;
            $rekapMedis->keluhan = $request->keluhan;
            $rekapMedis->diagnosa = $request->diagnosa;
            $rekapMedis->tekananDarah = $request->tekananDarah;
            $rekapMedis->suhuTubuh = $request->suhuTubuh;
            $rekapMedis->beratBadan = $request->beratBadan;
            $rekapMedis->tinggiBadan = $request->tinggiBadan;
    
            $_POST = $rekapMedis->save();
    
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
        $rekapMedis = rekapMedis::find($id);
        if (empty($rekapMedis)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }
    
            $_POST = $rekapMedis->delete();
    
            return response()->json([
                'status'=>true,
                'message'=>'Sukses melakukan delete data'
            ]);
    }
}
