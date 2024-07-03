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
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ResepControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Resep::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $resep = new resep;

            $rules = [
                'noRekapMedis'  => 'required',
                'idDokter'  => 'required',
                'idObat'  => 'required',
                'keterangan'  => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Gagal memasukkan data',
                    'data' => $validator->errors()
                ]);
            }

            $resep->noRekapMedis = $request->noRekapMedis;
            $resep->idDokter = $request->idDokter;
            $resep->idObat = $request->idObat;
            $resep->keterangan = $request->keterangan;
    
            $_POST = $resep->save();
    
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
        $resep = resep::find($id);
        return  $resep;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $resep = resep::find($id);
        if (empty($resep)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

            $rules = [
                'noRekapMedis'  => 'required',
                'idDokter'  => 'required',
                'idObat'  => 'required',
                'keterangan'  => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Gagal memasukkan data',
                    'data' => $validator->errors()
                ]);
            }

            $resep->noRekapMedis = $request->noRekapMedis;
            $resep->idDokter = $request->idDokter;
            $resep->idObat = $request->idObat;
            $resep->keterangan = $request->keterangan;
    
            $_POST = $resep->save();
    
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
        $resep = resep::find($id);
        if (empty($resep)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }
            $_POST = $resep->delete();
    
            return response()->json([
                'status'=>true,
                'message'=>'Sukses melakukan delete data'
            ]);
    }
}
