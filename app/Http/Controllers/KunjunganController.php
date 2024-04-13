<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KunjunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kunjungans = \App\Models\Kunjungan::paginate(20);
        return view('pages.kunjungan.index', compact('kunjungans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tamu = \App\Models\Tamu::all();
        return view('pages.kunjungan.create', compact('tamu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
