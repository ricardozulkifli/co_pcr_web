<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kunjungan;

class KunjunganController extends Controller
{
    public function index()
    {
        $kunjungans = Kunjungan::latest()->paginate(5);

        return view('home', compact('kunjungans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'institusi' => 'required'
        ]);

        Kunjungan::create($request->all());

        return redirect()->back()->with('success', 'Data berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $kunjungan = Kunjungan::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'institusi' => 'required'
        ]);

        $kunjungan->update($request->all());

        return redirect()->back()->with('success', 'Data berhasil diupdate!');
    }

    public function destroy($id)
    {
        Kunjungan::destroy($id);

        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }
}
