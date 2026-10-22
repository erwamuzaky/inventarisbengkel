@extends('layouts.app')

@section('content')

    <h3 class="mb-4">
        Edit Barang
    </h3>

    <div class="card-dashboard">

        <form action="/inventaris/{{ $inventaris->id }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label>Nama Barang</label>

                <input type="text" name="nama_barang" class="form-control" value="{{ $inventaris->nama_barang }}">

            </div>

            <div class="mb-3">

                <label>Kategori</label>

                <input type="text" name="kategori" class="form-control" value="{{ $inventaris->kategori }}">

            </div>

            <div class="mb-3">

                <label>Stok</label>

                <input type="number" name="stok" class="form-control" value="{{ $inventaris->stok }}">

            </div>

            <div class="mb-3">

                <label>Satuan</label>

                <input type="text" name="satuan" class="form-control" value="{{ $inventaris->satuan }}">

            </div>

            <div class="mb-3">

                <label>Harga</label>

                <input type="number" name="harga" class="form-control" value="{{ $inventaris->harga }}">

            </div>

            <div class="mb-3">

                <label>Foto Lama</label>

                <br>

                @if($inventaris->gambar)

                    <img src="/gambar/{{ $inventaris->gambar }}" width="120" class="rounded">

                @endif

            </div>

            <div class="mb-3">

                <label>Ganti Foto</label>

                <input type="file" name="foto">

            </div>

            <div class="d-flex gap-2">

                <button class="btn btn-primary">
                    Update
                </button>

                <a href="/inventaris" class="btn btn-secondary">

                    Kembali

                </a>

            </div>

        </form>

    </div>

@endsection