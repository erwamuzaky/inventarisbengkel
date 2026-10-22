@extends('layouts.app')

@section('content')

<h1 class="page-title">
    Detail Barang
</h1>

<p class="page-subtitle">
    Informasi lengkap barang inventaris
</p>

<div class="table-card">

    <div class="row">

        <div class="col-md-4">

            <img
            src="{{ asset('gambar/' . $inventaris->gambar) }}"
            class="img-fluid rounded">

        </div>

        <div class="col-md-8">

            <table class="table">

                <tr>

                    <th width="200">
                        Nama Barang
                    </th>

                    <td>
                        {{ $inventaris->nama_barang }}
                    </td>

                </tr>

                <tr>

                    <th>
                        Kategori
                    </th>

                    <td>
                        {{ $inventaris->kategori }}
                    </td>

                </tr>

                <tr>

                    <th>
                        Stok
                    </th>

                    <td>
                        {{ $inventaris->stok }}
                    </td>

                </tr>

            </table>

            <a
            href="/inventaris"
            class="btn btn-secondary mt-3">

                Kembali

            </a>

        </div>

    </div>

</div>

@endsection