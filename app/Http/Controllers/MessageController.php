<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'nama'    => 'required|string|max:255',
            'email'   => 'required|email',
            'telepon' => 'nullable|string',
            'subjek'  => 'nullable|string',
            'pesan'   => 'required|string'
        ]);

        $pesan = Message::create([
            'nama'    => $request->nama,
            'email'   => $request->email,
            'telepon' => $request->telepon,
            'subjek'  => $request->subjek,
            'pesan'   => $request->pesan
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Pesan berhasil dikirim!'
        ], 201);
    }

    // GET /api/pesan — lihat semua pesan masuk
    public function index() {
        $pesans = Message::orderBy('created_at', 'desc')->get();

        return response()->json([
            'success' => true,
            'data'    => $pesans
        ], 200);
    }
}
