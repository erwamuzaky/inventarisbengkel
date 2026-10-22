<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventaris;

class InventarisController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $inventaris = Inventaris::where(
            'nama_barang',
            'LIKE',
            "%$search%"
        )->get();

        return view('inventaris.index', compact(
            'inventaris'
        ));
    }

    public function create()
    {
        return view('inventaris.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'nama_barang' => 'required',
            'kategori' => 'required',
            'stok' => 'required',
            'satuan' => 'required',
            'harga' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $gambar = null;

        if ($request->hasFile('gambar')) {

            $gambar = time() . '.' . $request->gambar->extension();

            $request->gambar->move(
                public_path('gambar'),
                $gambar
            );
        }
        

        Inventaris::create([

            'nama_barang' => $request->nama_barang,
            'kategori' => $request->kategori,
            'stok' => $request->stok,
            'satuan' => $request->satuan,
            'harga' => $request->harga,
            'gambar' => $gambar

        ]);

        return redirect('/inventaris')
            ->with('success', 'Data berhasil ditambahkan');
    }
    public function edit($id)
    {
        $inventaris = Inventaris::findOrFail($id);

        return view('inventaris.edit', compact('inventaris'));
    }

    public function update(Request $request, $id)
    {
        $inventaris = Inventaris::findOrFail($id);

        $gambar = $inventaris->gambar;

        if ($request->hasFile('gambar')) {

            $gambar = time() . '.' . $request->gambar->extension();

            $request->gambar->move(
                public_path('gambar'),
                $gambar
            );
        }

        $inventaris->update([

            'nama_barang' => $request->nama_barang,
            'kategori' => $request->kategori,
            'stok' => $request->stok,
            'satuan' => $request->satuan,
            'harga' => $request->harga,
            'gambar' => $gambar

        ]);

        return redirect('/inventaris')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $inventaris = Inventaris::findOrFail($id);

        $inventaris->delete();

        return redirect('/inventaris')
            ->with('success', 'Data berhasil dihapus');
    }
    public function show($id)
{

    $inventaris = Inventaris::findOrFail($id);

    return view(
        'inventaris.detail',
        compact('inventaris')
    );

}
}