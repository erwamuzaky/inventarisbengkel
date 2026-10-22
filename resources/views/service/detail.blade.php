@extends('layouts.app')

@section('content')

<h1 class="page-title">
    Detail Service
</h1>

<div class="table-card">

    <table class="table">

        <tr>

            <th width="250">
                No Service
            </th>

            <td>
                {{ $service->no_service }}
            </td>

        </tr>

        <tr>

            <th>
                Pelanggan
            </th>

            <td>
                {{ $service->pelanggan->nama }}
            </td>

        </tr>

        <tr>

            <th>
                Kerusakan
            </th>

            <td>
                {{ $service->kerusakan }}
            </td>

        </tr>

        <tr>

            <th>
                Status
            </th>

            <td>
                {{ $service->status }}
            </td>

        </tr>

    </table>

    <a
    href="/service"
    class="btn btn-secondary">

        Kembali

    </a>

</div>

@endsection