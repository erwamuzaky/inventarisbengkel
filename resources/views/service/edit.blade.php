@extends('layouts.app')

@section('content')

    <h3 class="mb-4">
        Edit Service
    </h3>

    <div class="card-dashboard">

        <form action="/service/{{ $service->id }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label>Pelanggan</label>

                <select name="pelanggan_id" class="form-control">

                    @foreach($pelanggan as $item)

                        <option value="{{ $item->id }}" @if($service->pelanggan_id == $item->id) selected @endif>

                            {{ $item->nama }}

                        </option>

                    @endforeach

                </select>

            </div>

            <div class="mb-3">

                <label>Kerusakan</label>

                <textarea name="kerusakan" class="form-control">{{ $service->kerusakan }}</textarea>

            </div>

            <div class="mb-3">

                <label>Tanggal</label>

                <input type="date" name="tanggal" class="form-control" value="{{ $service->tanggal }}">

            </div>

            <div class="mb-3">

                <label>Status</label>

                <select name="status" class="form-control">

                    <option value="Proses" @if($service->status == 'Proses') selected @endif>

                        Proses

                    </option>

                    <option value="Selesai" @if($service->status == 'Selesai') selected @endif>

                        Selesai

                    </option>

                </select>

            </div>

            <div class="d-flex gap-2">

                <button class="btn btn-primary">
                    Update
                </button>

                <a href="/service" class="btn btn-secondary">

                    Kembali

                </a>

            </div>

        </form>

    </div>

@endsection