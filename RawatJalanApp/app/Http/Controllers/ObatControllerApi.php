<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use App\Models\Obat;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;


class ObatControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Obat::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $obat = new obat;

            $rules = [
                'namaObat'  => 'required',
                'harga'  => 'required',
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

            $obat->namaObat = $request->namaObat;
            $obat->harga = $request->harga;
            $obat->keterangan = $request->keterangan;
    
            $_POST = $obat->save();
    
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
        $obat = obat::find($id);
        return  $obat;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $obat = obat::find($id);
        if (empty($obat)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }
            $rules = [
                'namaObat'  => 'required',
                'harga'  => 'required',
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

            $obat->namaObat = $request->namaObat;
            $obat->harga = $request->harga;
            $obat->keterangan = $request->keterangan;
    
            $_POST = $obat->save();
    
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
        $obat = obat::find($id);
        if (empty($obat)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }
    
            $_POST = $obat->delete();
    
            return response()->json([
                'status'=>true,
                'message'=>'Sukses melakukan delete data'
            ]);
    }
}
