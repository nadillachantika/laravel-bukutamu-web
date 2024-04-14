<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KunjunganController extends Controller
{

    public function index()
    {
        $kunjungans = \App\Models\Kunjungan::paginate(20);
        $kunjungans->load('tamu');
        return view('pages.kunjungan.index', compact('kunjungans'));
    }

    public function create()
    {
        $tamus = \App\Models\Tamu::all();
        return view('pages.kunjungan.create', compact('tamus'));
    }

    public function store(Request $request)
    {

        $kunjungan = new \App\Models\Kunjungan;
        $kunjungan->tamu_id = $request->tamu_id;
        $kunjungan->tanggal = $request->tanggal;
        $kunjungan->jenis_kunjungan = $request->jenis_kunjungan;
        $kunjungan->waktu_masuk = $request->waktu_masuk;
        $kunjungan->waktu_keluar = $request->waktu_keluar;
        $kunjungan->keterangan_kunjungan = $request->keterangan_kunjungan;
        $kunjungan->save();

        return redirect()->route('kunjungan.index')->with('success', 'Kunjungan successfully created');

    }

    public function edit(string $id)
    {
        $kunjungan = \App\Models\Kunjungan::find($id);
        $tamus = \App\Models\Tamu::all();
        return view('pages.kunjungan.edit', compact('kunjungan', 'tamus'));
    }

    public function update(Request $request, string $id)
    {
        $kunjungan = \App\Models\Kunjungan::find($id);
        $kunjungan->tamu_id = $request->tamu_id;
        $kunjungan->tanggal = $request->tanggal;
        $kunjungan->jenis_kunjungan = $request->jenis_kunjungan;
        $kunjungan->waktu_masuk = $request->waktu_masuk;
        $kunjungan->waktu_keluar = $request->waktu_keluar;
        $kunjungan->keterangan_kunjungan = $request->keterangan_kunjungan;
        $kunjungan->save();

        return redirect()->route('kunjungan.index')->with('success', 'Kunjungan successfully updated');
    }


    public function destroy(string $id)
    {
        $kunjungan = \App\Models\Kunjungan::find($id);
        $kunjungan->delete();
        return redirect()->route('kunjungan.index')->with('success', 'Kunjungan successfully deleted');
    }
}
