<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PelangganController;
use App\Models\Inventaris;
use App\Models\Service;
use App\Models\Pelanggan;
use Barryvdh\DomPDF\Facade\Pdf;

/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    return view('auth.login');

});

Route::post(
    '/login',
    [AuthController::class, 'login']
)->name('login');

/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {

    $totalBarang = Inventaris::count();

    $serviceAktif = Service::where(
        'status',
        'Proses'
    )->count();

    $serviceSelesai = Service::where(
        'status',
        'Selesai'
    )->count();

    $totalPelanggan = Pelanggan::count();

    $serviceTerbaru = Service::latest()
    ->take(5)
    ->get();

    return view(
        'dashboard',
        compact(
            'totalBarang',
            'serviceAktif',
            'serviceSelesai',
            'totalPelanggan',
            'serviceTerbaru'
        )
    );

});

/*
|--------------------------------------------------------------------------
| LAPORAN
|--------------------------------------------------------------------------
*/

Route::get('/laporan', function () {

    $service = Service::latest()->get();

     $inventaris = Inventaris::latest()->get();

     $pelanggan = Pelanggan::latest()->get();

    return view(
        'laporan.index',
        compact('service', 'inventaris', 'pelanggan')
    );

})->name('laporan');

/*
|--------------------------------------------------------------------------
| PDF
|--------------------------------------------------------------------------
*/

Route::get(
    '/laporan/pdf',
    [InventarisController::class, 'pdf']
)->name('laporan.pdf');

/*
|--------------------------------------------------------------------------
| INVENTARIS
|--------------------------------------------------------------------------
*/

Route::get(
    '/inventaris',
    [InventarisController::class, 'index']
);

Route::get(
    '/inventaris/create',
    [InventarisController::class, 'create']
);

Route::post(
    '/inventaris/store',
    [InventarisController::class, 'store']
);

Route::get(
    '/inventaris/{id}/edit',
    [InventarisController::class, 'edit']
);

Route::put(
    '/inventaris/{id}',
    [InventarisController::class, 'update']
);

Route::delete(
    '/inventaris/{id}',
    [InventarisController::class, 'destroy']
);

Route::get(
    '/inventaris/{id}',
    [InventarisController::class, 'show']
);

/*
|--------------------------------------------------------------------------
| SERVICE
|--------------------------------------------------------------------------
*/

Route::get(
    '/service',
    [ServiceController::class, 'index']
);

Route::get(
    '/service/create',
    [ServiceController::class, 'create']
);

Route::post(
    '/service/store',
    [ServiceController::class, 'store']
);

Route::get(
    '/service/{id}/edit',
    [ServiceController::class, 'edit']
);

Route::put(
    '/service/{id}',
    [ServiceController::class, 'update']
);

Route::delete(
    '/service/{id}',
    [ServiceController::class, 'destroy']
);

/*
|--------------------------------------------------------------------------
| PELANGGAN
|--------------------------------------------------------------------------
*/

Route::get(
    '/pelanggan',
    [PelangganController::class, 'index']
);

Route::get(
    '/pelanggan/create',
    [PelangganController::class, 'create']
);

Route::post(
    '/pelanggan/store',
    [PelangganController::class, 'store']
);

Route::get(
    '/pelanggan/{id}/edit',
    [PelangganController::class, 'edit']
);

Route::put(
    '/pelanggan/{id}',
    [PelangganController::class, 'update']
);

Route::delete(
    '/pelanggan/{id}',
    [PelangganController::class, 'destroy']
);

/*
|--------------------------------------------------------------------------
| LOGOUT
|--------------------------------------------------------------------------
*/

Route::post('/logout', function () {

    return redirect('/');

});
Route::get(
    '/service/{id}',
    [ServiceController::class, 'show']
);
Route::get(
    '/pelanggan/{id}',
    [PelangganController::class, 'show']
);