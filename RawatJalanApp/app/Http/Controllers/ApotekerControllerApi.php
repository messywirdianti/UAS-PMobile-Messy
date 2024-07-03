<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use App\Models\Apoteker;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ApotekerControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Apoteker::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $apoteker = new apoteker;

            $rules = [
                'namaApoteker'  => 'required',
                'jekel'  => 'required',
                'email'  => 'required',
                'noHp'  => 'required',
                
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Gagal memasukkan data',
                    'data' => $validator->errors()
                ]);
            }

            $apoteker->namaApoteker = $request->namaApoteker;
            $apoteker->jekel = $request->jekel;
            $apoteker->email = $request->email;
            $apoteker->noHp = $request->noHp;
    
            $_POST = $apoteker->save();
    
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
        $apoteker = apoteker::find($id);
        return  $apoteker;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $apoteker = apoteker::find($id);
        if (empty($apoteker)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

            $rules = [
                'namaApoteker'  => 'required',
                'jekel'  => 'required',
                'email'  => 'required',
                'noHp'  => 'required',
                
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Gagal memasukkan data',
                    'data' => $validator->errors()
                ]);
            }

            $apoteker->namaApoteker = $request->namaApoteker;
            $apoteker->jekel = $request->jekel;
            $apoteker->email = $request->email;
            $apoteker->noHp = $request->noHp;
    
            $_POST = $apoteker->save();
    
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
        $apoteker = apoteker::find($id);
        if (empty($apoteker)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }
    
            $_POST = $apoteker->delete();
    
            return response()->json([
                'status'=>true,
                'message'=>'Sukses melakukan delete data'
            ]);
    }
}
