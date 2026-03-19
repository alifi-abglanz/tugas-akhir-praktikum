<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('indeks');
    }

    public function booking()
    {
        return view('booking');
    }

    public function storeBooking(Request $request)
    {
        // Validasi data booking
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'mobil' => 'required|string',
            'tanggal' => 'required|date',
            'lama' => 'required|integer|min:1',
        ]);

        // TODO: Simpan booking ke database
        // Untuk sekarang, hanya return response sukses
        return response()->json([
            'success' => true,
            'message' => 'Pemesanan berhasil disimpan!'
        ]);
    }
}
