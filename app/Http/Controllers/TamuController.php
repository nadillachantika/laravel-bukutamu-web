<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TamuController extends Controller
{

    public function index()
    {
        $tamus = \App\Models\Tamu::paginate(20);
        return view('pages.tamu.index', compact('tamus'));
    }


    public function create()
    {
        return view('pages.tamu.create');
    }


    public function store(Request $request)
    {
        $tamu = new \App\Models\Tamu;
        $tamu->nama = $request->nama;
        $tamu->alamat = $request->alamat;
        $tamu->nohp = $request->nohp;
        $tamu->jabatan = $request->jabatan;
        $tamu->instansi = $request->instansi;
        $tamu->keterangan = $request->keterangan;
        $tamu->save();
        return redirect()->route('tamu.index')->with('success', 'Tamu successfully created');
    }

    public function edit(string $id)
    {
        $tamu = \App\Models\Tamu::find($id);
        return view('pages.tamu.edit', compact('tamu'));
    }


    public function update(Request $request, string $id)
    {
        $tamu = \App\Models\Tamu::find($id);
        $tamu->update($request->all());
        return redirect()->route('tamu.index')->with('success', 'Tamu successfully updated');
    }

    public function destroy(string $id)
    {
        $tamu = \App\Models\Tamu::find($id);
        $tamu->delete();
        return redirect()->route('tamu.index')->with('success', 'Tamu successfully deleted');
    }
}
