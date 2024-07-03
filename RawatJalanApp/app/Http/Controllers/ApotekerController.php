<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use App\Models\Apoteker;
use Illuminate\View\View;


class ApotekerController extends Controller
{
    public function index()
    {
        return view ('apoteker.index', ['apoteker'=>Apoteker::all()]);
    }

    public function create()
    {
        return view('apoteker.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // dd($request);

        $validatedData = $request->validate([
        // 'idApoteker' => 'required',
        'namaApoteker'  => 'required',
        'jekel'  => 'required',
        'email'  => 'required',
        'noHp'  => 'required',
    ]);

    // dd($validatedData);
     apoteker::create($validatedData);

     return redirect('apoteker')->with('flash_message', 'Apoteker Added!');

    }

    public function show(string $id)
    {
        $apoteker = apoteker::find($id);
        return view('apoteker.show')->with('apoteker', $apoteker);
    }

    public function edit(string $id): view
    {
        $apoteker = Apoteker::find($id);
        return view('apoteker.edit')->with('apoteker', $apoteker);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $apoteker = Apoteker::find($id);
        $input = $request->all();
        $apoteker->update($input);
        return redirect('apoteker')->with('flash_message', 'apoteker Updated!');
    }

    public function destroy(string $id)
    {
        Apoteker::destroy($id);
        return redirect('apoteker')->with('flash_message', 'apoteker deleted!'); 
    }

    
}
