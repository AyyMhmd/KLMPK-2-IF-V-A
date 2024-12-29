<?php

namespace App\Http\Controllers;

use App\Models\PrestasiMahasiswa;
use Illuminate\Http\Request;

class PrestasiMahasiswaController extends Controller
{
    public function index()
    {
        $prestasi = PrestasiMahasiswa::with('mahasiswa')->get();
        return response()->json($prestasi);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'mahasiswa_id' => 'required|exists:mahasiswa,id',
            'nama_prestasi' => 'required|string|max:255',
            'tingkat' => 'required|string',
            'tahun' => 'required|string',
            'keterangan' => 'nullable|string',
        ]);

        $prestasi = PrestasiMahasiswa::create($validated);

        return response()->json(['message' => 'Prestasi berhasil ditambahkan', 'data' => $prestasi]);
    }

    public function show($id)
    {
        $prestasi = PrestasiMahasiswa::with('mahasiswa')->findOrFail($id);
        return response()->json($prestasi);
    }

    public function update(Request $request, $id)
    {
        $prestasi = PrestasiMahasiswa::findOrFail($id);

        $validated = $request->validate([
            'mahasiswa_id' => 'required|exists:mahasiswa,id',
            'nama_prestasi' => 'required|string|max:255',
            'tingkat' => 'required|string',
            'tahun' => 'required|string',
            'keterangan' => 'nullable|string',
        ]);

        $prestasi->update($validated);

        return response()->json(['message' => 'Prestasi berhasil diperbarui', 'data' => $prestasi]);
    }

    public function destroy($id)
    {
        $prestasi = PrestasiMahasiswa::findOrFail($id);
        $prestasi->delete();

        return response()->json(['message' => 'Prestasi berhasil dihapus']);
    }
}
