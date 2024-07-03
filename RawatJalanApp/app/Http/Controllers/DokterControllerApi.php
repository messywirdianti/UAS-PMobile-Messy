<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use App\Models\Dokter;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class DokterControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Dokter::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dokter = new dokter;

            $rules = [
                'namaDokter'  => 'required',
                'email'  => 'required',
                'noHp'  => 'required',
                'spesialis'  => 'required',
                
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Gagal memasukkan data',
                    'data' => $validator->errors()
                ]);
            }

            $dokter->namaDokter = $request->namaDokter;
            $dokter->email = $request->email;
            $dokter->noHp = $request->noHp;
            $dokter->spesialis = $request->spesialis;
    
            $_POST = $dokter->save();
    
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
        $dokter = dokter::find($id);
        return  $dokter;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dokter = dokter::find($id);
        if (empty($dokter)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

            $rules = [
                'namaDokter'  => 'required',
                'email'  => 'required',
                'noHp'  => 'required',
                'spesialis'  => 'required',
                
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Gagal memasukkan data',
                    'data' => $validator->errors()
                ]);
            }

            $dokter->namaDokter = $request->namaDokter;
            $dokter->email = $request->email;
            $dokter->noHp = $request->noHp;
            $dokter->spesialis = $request->spesialis;
    
            $_POST = $dokter->save();
    
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
        $dokter = dokter::find($id);
        if (empty($dokter)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }
    
            $_POST = $dokter->delete();
    
            return response()->json([
                'status'=>true,
                'message'=>'Sukses Melakukan dalete data'
            ]); 
    }
}
