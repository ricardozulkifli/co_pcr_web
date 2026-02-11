<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kunjungan;

class KunjunganController extends Controller
{
    // GET
    public function create()
    {
        return view('kunjungan.form');
    }

    // POST
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'institusi' => 'required'
        ]);

        Kunjungan::create($request->all());

        return redirect()->back()
            ->with('success', 'Pendaftaran berhasil!');
    }
}
