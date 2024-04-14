<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KesanSaranController extends Controller
{
    public function index()
    {

        $kesansarans = \App\Models\Kesansaran::paginate(5);
        return view('pages.kesansaran.index', compact('kesansarans'));
    }


    public function create()
    {
        $tamus = \App\Models\Tamu::all();
        return view('pages.kesansaran.create', compact('tamus'));
    }


    public function store(Request $request)
    {

        $kesansaran = new \App\Models\Kesansaran;
        $kesansaran->tamu_id = $request->tamu_id;
        $kesansaran->kesan = $request->kesan;
        $kesansaran->saran = $request->saran;
        $kesansaran->save();

        return redirect()->route('kesansaran.index')->with('success', 'Kesansaran successfully created');
    }

    public function edit(string $id)
    {
        $tamus = \App\Models\Tamu::all();
        $kesansaran = \App\Models\Kesansaran::find($id);
        return view('pages.kesansaran.edit', compact('tamus', 'kesansaran'));

    }

    public function update(Request $request, string $id)
    {

        $kesansaran = \App\Models\Kesansaran::find($id);
        $kesansaran->tamu_id = $request->tamu_id;
        $kesansaran->kesan = $request->kesan;
        $kesansaran->saran = $request->saran;
        $kesansaran->save();
        return redirect()->route('kesansaran.index')->with('success', 'Kesansaran successfully updated');
    }


    public function destroy(string $id)
    {

        $kesansaran = \App\Models\Kesansaran::find($id);
        $kesansaran->delete();
        return redirect()->route('kesansaran.index')->with('success', 'Kesansaran successfully deleted');
    }
}
