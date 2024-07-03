<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use App\Models\Pendaftaran;
use App\Models\Pasien;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class PendaftaranControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Pendaftaran::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pendaftaran = new pendaftaran;

            $rules = [
                'noRekapMedis'  => 'required',
                'namaLengkap'  => 'required',
                'tempatLahir'  => 'required',
                'tanggalLahir' => 'required',
                'jekel'  => 'required',
                'tanggalKunjungan'  => 'required',
                'asalRujukan'  => 'required',
                'poliTujuan'  => 'required',
                'dokter'  => 'required',
                'pekerjaan'  => 'required',
                'noHp'  => 'required',
                'agama'  => 'required',
                'kewarganegaraan'  => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Gagal memasukkan data',
                    'data' => $validator->errors()
                ]);
            }

            $pendaftaran->noRekapMedis = $request->noRekapMedis;
            $pendaftaran->namaLengkap = $request->namaLengkap;
            $pendaftaran->tempatLahir = $request->tempatLahir;
            $pendaftaran->tanggalLahir = $request->tanggalLahir;
            $pendaftaran->jekel = $request->jekel;
            $pendaftaran->tanggalKunjungan = $request->tanggalKunjungan;
            $pendaftaran->asalRujukan = $request->asalRujukan;
            $pendaftaran->poliTujuan = $request->poliTujuan;
            $pendaftaran->dokter = $request->dokter;
            $pendaftaran->pekerjaan = $request->pekerjaan;
            $pendaftaran->noHp = $request->noHp;
            $pendaftaran->agama = $request->agama;
            $pendaftaran->kewarganegaraan = $request->kewarganegaraan;
    
            $_POST = $pendaftaran->save();
    
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
        $pendaftaran = pendaftaran::find($id);
        return  $pendaftaran;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pendaftaran = pendaftaran::find($id);
        if (empty($pendaftaran)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

            $rules = [
                'noRekapMedis'  => 'required',
                'namaLengkap'  => 'required',
                'tempatLahir'  => 'required',
                'tanggalLahir' => 'required',
                'jekel'  => 'required',
                'tanggalKunjungan'  => 'required',
                'asalRujukan'  => 'required',
                'poliTujuan'  => 'required',
                'dokter'  => 'required',
                'pekerjaan'  => 'required',
                'noHp'  => 'required',
                'agama'  => 'required',
                'kewarganegaraan'  => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Gagal memasukkan data',
                    'data' => $validator->errors()
                ]);
            }

            $pendaftaran->noRekapMedis = $request->noRekapMedis;
            $pendaftaran->namaLengkap = $request->namaLengkap;
            $pendaftaran->tempatLahir = $request->tempatLahir;
            $pendaftaran->tanggalLahir = $request->tanggalLahir;
            $pendaftaran->jekel = $request->jekel;
            $pendaftaran->tanggalKunjungan = $request->tanggalKunjungan;
            $pendaftaran->asalRujukan = $request->asalRujukan;
            $pendaftaran->poliTujuan = $request->poliTujuan;
            $pendaftaran->dokter = $request->dokter;
            $pendaftaran->pekerjaan = $request->pekerjaan;
            $pendaftaran->noHp = $request->noHp;
            $pendaftaran->agama = $request->agama;
            $pendaftaran->kewarganegaraan = $request->kewarganegaraan;
    
            $_POST = $pendaftaran->save();
    
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
        $pendaftaran = pendaftaran::find($id);
        if (empty($pendaftaran)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }
    
            $_POST = $pendaftaran->delete();
    
            return response()->json([
                'status'=>true,
                'message'=>'Sukses melakukan delete data'
            ]);
    }
}
