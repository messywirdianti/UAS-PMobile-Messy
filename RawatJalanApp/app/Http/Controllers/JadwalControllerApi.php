<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use App\Models\Jadwal;
use App\Models\Dokter;
use App\Models\PoliKlinik;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class JadwalControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Jadwal::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jadwal = new jadwal;

            $rules = [
                'idDokter'  => 'required',
                'idPoliKlinik'  => 'required',
                'jekel'  => 'required',
                'jamMulai'  => 'required',
                'jamSelesai' => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Gagal memasukkan data',
                    'data' => $validator->errors()
                ]);
            }

            $jadwal->idDokter = $request->idDokter;
            $jadwal->idPoliKlinik = $request->idPoliKlinik;
            $jadwal->jekel = $request->jekel;
            $jadwal->jamMulai = $request->jamMulai;
            $jadwal->jamSelesai = $request->jamSelesai;
    
            $_POST = $jadwal->save();
    
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
        $jadwal = jadwal::find($id);
        return  $jadwal;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jadwal = jadwal::find($id);
        if (empty($jadwal)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

            $rules = [
                'idDokter'  => 'required',
                'idPoliKlinik'  => 'required',
                'jekel'  => 'required',
                'jamMulai'  => 'required',
                'jamSelesai' => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Gagal memasukkan data',
                    'data' => $validator->errors()
                ]);
            }

            $jadwal->idDokter = $request->idDokter;
            $jadwal->idPoliKlinik = $request->idPoliKlinik;
            $jadwal->jekel = $request->jekel;
            $jadwal->jamMulai = $request->jamMulai;
            $jadwal->jamSelesai = $request->jamSelesai;
    
            $_POST = $jadwal->save();
    
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
        $jadwal = jadwal::find($id);
        if (empty($jadwal)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }
    
            $_POST = $jadwal->delete();
    
            return response()->json([
                'status'=>true,
                'message'=>'Sukses melakukan delete data'
            ]);
    }
}
