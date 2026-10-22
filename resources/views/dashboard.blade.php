@extends('layouts.app')

@section('content')

<h1 class="page-title">
    Dashboard
</h1>

<p class="page-subtitle">
    Selamat datang Admin 👋
</p>

{{-- CARD --}}
<div class="row g-4">

    <div class="col-md-3">

        <div class="modern-card">

            <div class="card-icon purple">

                <i class="fa-solid fa-box"></i>

            </div>

            <div>

                <h2>
                    {{ $totalBarang }}
                </h2>

                <p>
                    Total Barang
                </p>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="modern-card">

            <div class="card-icon green">

                <i class="fa-solid fa-screwdriver-wrench"></i>

            </div>

            <div>

                <h2>
                    {{ $serviceAktif }}
                </h2>

                <p>
                    Service Aktif
                </p>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="modern-card">

            <div class="card-icon yellow">

                <i class="fa-solid fa-circle-check"></i>

            </div>

            <div>

                <h2>
                    {{ $serviceSelesai }}
                </h2>

                <p>
                    Service Selesai
                </p>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="modern-card">

            <div class="card-icon blue">

                <i class="fa-solid fa-users"></i>

            </div>

            <div>

                <h2>
                    {{ $totalPelanggan }}
                </h2>

                <p>
                    Total Pelanggan
                </p>

            </div>

        </div>

    </div>

</div>

{{-- STOK + GRAFIK --}}
<div class="row mt-4">

    {{-- STOK --}}
    <div class="col-md-6">

        <div class="table-card">

            <div class="d-flex justify-content-between align-items-center mb-4">

                <h3>
                    Stok Menipis
                </h3>

                <span class="badge badge-danger">
                    Warning
                </span>

            </div>

            <table class="table">

                <thead>

                    <tr>

                        <th>Barang</th>
                        <th>Stok</th>
                        <th>Status</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>SSD SATA 512GB</td>

                        <td>1</td>

                        <td>

                            <span class="badge badge-danger">

                                Hampir Habis

                            </span>

                        </td>

                    </tr>

                    <tr>

                        <td>RAM DDR4 8GB</td>

                        <td>2</td>

                        <td>

                            <span class="badge badge-warning">

                                Menipis

                            </span>

                        </td>

                    </tr>

                    <tr>

                        <td>Monitor LG 19 Inch</td>

                        <td>2</td>

                        <td>

                            <span class="badge badge-warning">

                                Menipis

                            </span>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

    {{-- GRAFIK --}}
    <div class="col-md-6">

        <div class="table-card">

            <h3 class="mb-4">
                Grafik Service
            </h3>

            <canvas id="serviceChart"></canvas>

        </div>

    </div>

</div>

{{-- SERVICE TERBARU --}}
<div class="table-card mt-4">

    <h3 class="mb-4">
        Service Terbaru
    </h3>

    <table class="table">

        <thead>

            <tr>

                <th>No Service</th>
                <th>Pelanggan</th>
                <th>Status</th>
                <th>Tanggal</th>

            </tr>

        </thead>

        <tbody>

            @foreach($serviceTerbaru as $item)

            <tr>

                <td>
                    {{ $item->no_service }}
                </td>

                <td>
                    {{ $item->pelanggan->nama ?? '-' }}
                </td>

                <td>

                    @if($item->status == 'Proses')

                        <span class="badge badge-warning">

                            Proses

                        </span>

                    @else

                        <span class="badge badge-success">

                            Selesai

                        </span>

                    @endif

                </td>

                <td>
                    {{ $item->tanggal }}
                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

{{-- CHART --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

const ctx = document.getElementById('serviceChart');

new Chart(ctx, {

    type: 'line',

    data: {

        labels: [

            'Minggu 1',
            'Minggu 2',
            'Minggu 3',
            'Minggu 4'

        ],

        datasets: [{

            label: 'Service',

            data: [5, 12, 8, 15],

            borderWidth: 3,

            tension: 0.4,

            fill: true

        }]

    }

});

</script>

@endsection