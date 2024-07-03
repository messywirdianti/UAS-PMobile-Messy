<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use App\Models\Pasien;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;



class PasienControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Pasien::all();
    }

    public function store(Request $request)
    {
            $Pasien = new Pasien;

            $rules = [
                'namaPengguna'  => 'required',
                'noKTP'  => 'required',
                'jekel'  => 'required',
                'tempatLahir'  => 'required',
                'tanggalLahir' => 'required',
                'noBPJS'  => 'required',
                'noHp'  => 'required',
                'email'  => 'required',
                'alamat'  => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Gagal memasukkan data',
                    'data' => $validator->errors()
                ]);
            }

            $Pasien->namaPengguna = $request->namaPengguna;
            $Pasien->noKTP = $request->noKTP;
            $Pasien->jekel = $request->jekel;
            $Pasien->tempatLahir = $request->tempatLahir;
            $Pasien->tanggalLahir = $request->tanggalLahir;
            $Pasien->noBPJS = $request->noBPJS;
            $Pasien->noHp = $request->noHp;
            $Pasien->email = $request->email;
            $Pasien->alamat = $request->alamat;
    
            $_POST = $Pasien->save();
    
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
        $pasien = pasien::find($id);
        return  $pasien;
    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Pasien = Pasien::find($id);
        if (empty($Pasien)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

            $rules = [
                'namaPengguna'  => 'required',
                'noKTP'  => 'required',
                'jekel'  => 'required',
                'tempatLahir'  => 'required',
                'tanggalLahir' => 'required',
                'noBPJS'  => 'required',
                'noHp'  => 'required',
                'email'  => 'required',
                'alamat'  => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Gagal melakukan update data',
                    'data' => $validator->errors()
                ]);
            }

            $Pasien->namaPengguna = $request->namaPengguna;
            $Pasien->noKTP = $request->noKTP;
            $Pasien->jekel = $request->jekel;
            $Pasien->tempatLahir = $request->tempatLahir;
            $Pasien->tanggalLahir = $request->tanggalLahir;
            $Pasien->noBPJS = $request->noBPJS;
            $Pasien->noHp = $request->noHp;
            $Pasien->email = $request->email;
            $Pasien->alamat = $request->alamat;
    
            $_POST = $Pasien->save();
    
            return response()->json([
                'status'=>true,
                'message'=>'Sukses melakukan update data'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Pasien = Pasien::find($id);
        if (empty($Pasien)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

            $_POST = $Pasien->delete();
    
            return response()->json([
                'status'=>true,
                'message'=>'Sukses melakukan delete data'
            ]);
    }
}
