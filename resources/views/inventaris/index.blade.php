@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h3 class="fw-bold">
            Data Inventaris
        </h3>

        <a href="/inventaris/create" class="btn btn-primary">
            + Tambah Barang
        </a>

    </div>

    <div class="card-dashboard">

        <form method="GET" action="/inventaris" class="mb-4">

            <input type="text" name="search" class="form-control" placeholder="Cari barang...">

        </form>



        <table class="table align-middle">

            <tr>

                <th>No</th>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Satuan</th>
                <th>Harga</th>
                <th>Aksi</th>


            </tr>

            @foreach($inventaris as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>

                        @if($item->gambar)

                            <img src="/gambar/{{ $item->gambar }}" width="70" class="rounded">

                        @endif

                    </td>

                    <td>{{ $item->nama_barang }}</td>

                    <td>{{ $item->kategori }}</td>

                    <td>{{ $item->stok }}</td>

                    <td>{{ $item->satuan }}</td>

                    <td>
                        Rp {{ number_format($item->harga) }}
                    </td>

                    <td>

                        <a href="/inventaris/{{ $item->id }}" class="btn btn-info">

                            <i class="fa-solid fa-eye"></i>

                        </a>

                        <a href="/inventaris/{{ $item->id }}/edit" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="/inventaris/{{ $item->id }}" method="POST" style="display:inline;">

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm" onclick="return confirm(
                                    'Yakin ingin menghapus data?')">

                                Hapus

                            </button>

                        </form>

                    </td>

                </tr>

            @endforeach

        </table>

    </div>

@endsection