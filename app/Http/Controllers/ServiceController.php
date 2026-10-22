<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Pelanggan;

class ServiceController extends Controller
{
    public function index(Request $request)
{
    $search = $request->search;

    $service = Service::with('pelanggan')

    ->where('kerusakan', 'LIKE', "%$search%")

    ->orWhere('status', 'LIKE', "%$search%")

    ->get();

    return view('service.index', compact(
        'service'
    ));
}

    public function create()
    {
        $pelanggan = Pelanggan::all();

        return view('service.create', compact('pelanggan'));
    }

    public function store(Request $request)
    {
        Service::create([
            'no_service' => 'SRV-' . rand(1000,9999),

            'pelanggan_id' => $request->pelanggan_id,

            'kerusakan' => $request->kerusakan,

            'tanggal' => $request->tanggal,

            'status' => $request->status,
        ]);

        return redirect('/service');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);

        $pelanggan = Pelanggan::all();

        return view('service.edit', compact(
            'service',
            'pelanggan'
        ));
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $service->update([
            'pelanggan_id' => $request->pelanggan_id,
            'kerusakan' => $request->kerusakan,
            'tanggal' => $request->tanggal,
            'status' => $request->status,
        ]);

        return redirect('/service');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        $service->delete();

        return redirect('/service');
    }
    public function show($id)
{

    $service = Service::findOrFail($id);

    return view(
        'service.detail',
        compact('service')
    );

}
}