@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h3 class="fw-bold">
        Laporan Service
    </h3>

    <div class="d-flex gap-2">

        <button
        onclick="window.print()"
        class="btn btn-success">

            Print

        </button>

        <a href="/laporan/pdf"
        class="btn btn-danger">

            Download PDF

        </a>

    </div>

</div>

<div class="card-dashboard">

    <table class="table align-middle">

        <tr>

            <th>No</th>
            <th>No Service</th>
            <th>Pelanggan</th>
            <th>Kerusakan</th>
            <th>Status</th>
            <th>Tanggal</th>

        </tr>

        @foreach($service as $item)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $item->no_service }}</td>

            <td>{{ $item->pelanggan->nama }}</td>

            <td>{{ $item->kerusakan }}</td>

            <td>

                @if($item->status == 'Proses')

                    <span class="badge bg-warning">
                        Proses
                    </span>

                @else

                    <span class="badge bg-success">
                        Selesai
                    </span>

                @endif

            </td>

            <td>{{ $item->tanggal }}</td>

        </tr>

        @endforeach

    </table>

</div>

@endsection