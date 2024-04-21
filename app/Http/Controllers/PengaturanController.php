<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengaturanController extends Controller
{

    public function index()
    {

        $landingpage = \App\Models\Landingpage::all();

        return view('pages.pengaturan.index', compact('landingpage'));
    }

    public function edit(string $id)
    {

        $landingpage = \App\Models\Landingpage::find($id);
        return view('pages.pengaturan.edit', compact('landingpage'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang dikirimkan
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah menjadi nullable karena tidak selalu diubah
        ]);

        // Cari produk berdasarkan ID
        $landingpage = \App\Models\Landingpage::findOrFail($id);

        // Simpan gambar baru jika ada yang diunggah
        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/landingpage', $filename);
            // Hapus gambar lama jika ada
            if ($landingpage->image) {
                Storage::delete('public/landingpage/' . $landingpage->image);
            }
            $landingpage->image = $filename;
        }

        // Perbarui data produk
        $landingpage->title = $request->title;
        $landingpage->description = $request->description;
        $landingpage->save();

        // Redirect ke halaman index produk dengan pesan sukses
        return redirect()->route('pengaturan.index')->with('success', 'Product successfully updated');
    }
}
