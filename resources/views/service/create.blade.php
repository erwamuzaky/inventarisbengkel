@extends('layouts.app')

@section('content')

    <h3 class="mb-4">
        Tambah Service
    </h3>

    <div class="card-dashboard">

        <form action="/service" method="POST">

            @csrf

            <div class="mb-3">

                <label>Pelanggan</label>

                <select name="pelanggan_id" class="form-control">

                    @foreach($pelanggan as $item)

                        <option value="{{ $item->id }}">
                            {{ $item->nama }}
                        </option>

                    @endforeach

                </select>

            </div>

            <div class="mb-3">

                <label>Kerusakan</label>

                <textarea name="kerusakan" class="form-control"></textarea>

            </div>

            <div class="mb-3">

                <label>Tanggal</label>

                <input type="date" name="tanggal" class="form-control">

            </div>

            <div class="mb-3">

                <label>Status</label>

                <select name="status" class="form-control">

                    <option value="Proses">
                        Proses
                    </option>

                    <option value="Selesai">
                        Selesai
                    </option>

                </select>

            </div>

            <div class="d-flex gap-2">

                <button class="btn btn-primary">
                    Simpan
                </button>

                <a href="/service" class="btn btn-secondary">

                    Kembali

                </a>

            </div>

        </form>

    </div>

@endsection