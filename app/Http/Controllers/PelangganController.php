<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
   public function index(Request $request)
{
    $search = $request->search;

    $pelanggan = Pelanggan::where(
        'nama',
        'LIKE',
        "%$search%"
    )->get();

    return view('pelanggan.index', compact(
        'pelanggan'
    ));
}

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        Pelanggan::create([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        return redirect('/pelanggan');
    }

    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        $pelanggan->update([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        return redirect('/pelanggan');
    }

    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        $pelanggan->delete();

        return redirect('/pelanggan');
    }
    public function show($id)
{

    $pelanggan = Pelanggan::findOrFail($id);

    return view(
        'pelanggan.detail',
        compact('pelanggan')
    );

}
}