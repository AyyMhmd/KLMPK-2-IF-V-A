<?php

namespace App\Http\Controllers;

use App\Models\Artikels;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikels::all(); // Mengambil semua data artikel
        return view('artikels.index', ["artikels" => $artikels]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'artikel' => 'required|string',
            'upload_artikel' => 'required|string',
        ]);

        $artikel = Artikel::create($validated);

        return response()->json(['message' => 'Artikel berhasil ditambahkan', 'data' => $artikel]);
    }

    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return response()->json($artikel);
    }

    public function update(Request $request, $id)
    {
        $artikel = Artikel::findOrFail($id);

        $validated = $request->validate([
            'artikel' => 'sometimes|required|string',
            'upload_artikel' => 'sometimes|required|string',
        ]);

        $artikel->update($validated);

        return response()->json(['message' => 'Artikel berhasil diperbarui', 'data' => $artikel]);
    }

    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();

        return response()->json(['message' => 'Artikel berhasil dihapus']);
    }
}
