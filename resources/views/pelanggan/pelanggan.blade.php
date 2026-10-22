@extends('layouts.app')

@section('content')

<h1 class="page-title">
    Detail Pelanggan
</h1>

<div class="table-card">

    <table class="table">

        <tr>

            <th width="250">
                Nama
            </th>

            <td>
                {{ $pelanggan->nama }}
            </td>

        </tr>

        <tr>

            <th>
                No HP
            </th>

            <td>
                {{ $pelanggan->no_hp }}
            </td>

        </tr>

        <tr>

            <th>
                Alamat
            </th>

            <td>
                {{ $pelanggan->alamat }}
            </td>

        </tr>

    </table>

    <a
    href="/pelanggan"
    class="btn btn-secondary">

        Kembali

    </a>

</div>

@endsection