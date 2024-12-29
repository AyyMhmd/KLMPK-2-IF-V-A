<?php

namespace App\Http\Controllers;

use App\Models\LastNews;
use Illuminate\Http\Request;

class LastNewsController extends Controller
{
    public function index()
    {
        $news = LastNews::orderBy('tanggal', 'desc')->get(); // Menampilkan berita berdasarkan tanggal terbaru
        return view('last_news.index', compact('news'));
    }
}
