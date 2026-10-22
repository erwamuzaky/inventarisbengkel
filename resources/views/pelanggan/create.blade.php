@extends('layouts.app')

@section('content')

    <h3 class="mb-4">
        Tambah Pelanggan
    </h3>

    <div class="card-dashboard">

        <form action="/pelanggan" method="POST">

            @csrf

            <div class="mb-3">

                <label>Nama</label>

                <input type="text" name="nama" class="form-control">

            </div>

            <div class="mb-3">

                <label>No HP</label>

                <input type="text" name="no_hp" class="form-control">

            </div>

            <div class="mb-3">

                <label>Alamat</label>

                <textarea name="alamat" class="form-control"></textarea>

            </div>

            <div class="d-flex gap-2">

                <button class="btn btn-primary">
                    Simpan
                </button>

                <a href="/pelanggan" class="btn btn-secondary">

                    Kembali

                </a>

            </div>

        </form>

    </div>

@endsection