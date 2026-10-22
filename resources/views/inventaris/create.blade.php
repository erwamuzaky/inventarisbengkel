@extends('layouts.app')

@section('content')

    <h3 class="mb-4">
        Tambah Barang
    </h3>

    <div class="card-dashboard">

        @if($errors->any())

            <div class="alert alert-danger">

                <ul class="mb-0">

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

        <form action="/inventaris" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label>Nama Barang</label>

                <input type="text" name="nama_barang" class="form-control">
            </div>

            <div class="mb-3">
                <label>Kategori</label>

                <input type="text" name="kategori" class="form-control">
            </div>

            <div class="mb-3">
                <label>Stok</label>

                <input type="number" name="stok" class="form-control">
            </div>

            <div class="mb-3">
                <label>Satuan</label>

                <input type="text" name="satuan" class="form-control">
            </div>

            <div class="mb-3">
                <label>Harga</label>

                <input type="number" name="harga" class="form-control">
            </div>

            <div class="mb-3">

                <label>Gambar Barang</label>

                <input type="file" name="foto">

            </div>

            <div class="d-flex gap-2">

                <button class="btn btn-primary">
                    Simpan
                </button>

                <a href="/inventaris" class="btn btn-secondary">

                    Kembali

                </a>

            </div>

        </form>

    </div>

@endsection