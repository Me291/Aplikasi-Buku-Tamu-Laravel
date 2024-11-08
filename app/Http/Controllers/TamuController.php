<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    /**
     * Display a listing of the guests.
     */
    public function index()
    {
        $tamus = Tamu::all();
        return view('tamu.index', compact('tamus'));
    }

    /**
     * Show the form for creating a new guest.
     */
    public function create()
    {
        return view('tamu.create');
    }

    /**
     * Store a newly created guest in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'tujuan' => 'required|string|max:255',
            'catatan' => 'nullable|string'
        ]);

        // Simpan data tamu baru
        Tamu::create($request->all());

        // Redirect ke halaman daftar tamu dengan pesan sukses
        return redirect()->route('tamu.index')->with('success', 'Data tamu berhasil disimpan.');
    }

    /**
     * Show the form for editing the specified guest.
     */
    public function edit($id)
    {
        $tamu = Tamu::findOrFail($id);
        return view('tamu.edit', compact('tamu'));
    }

    /**
     * Update the specified guest in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'tujuan' => 'required|string|max:255',
            'catatan' => 'nullable|string'
        ]);

        // Update data tamu
        $tamu = Tamu::findOrFail($id);
        $tamu->update($request->all());

        // Redirect ke halaman daftar tamu dengan pesan sukses
        return redirect()->route('tamu.index')->with('success', 'Data tamu berhasil diperbarui.');
    }

    /**
     * Remove the specified guest from storage.
     */
    public function destroy($id)
    {
        // Hapus data tamu
        $tamu = Tamu::findOrFail($id);
        $tamu->delete();

        // Redirect ke halaman daftar tamu dengan pesan sukses
        return redirect()->route('tamu.index')->with('success', 'Data tamu berhasil dihapus.');
    }
}
