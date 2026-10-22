@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h3 class="fw-bold">
        Data Pelanggan
    </h3>

    <a href="/pelanggan/create"
    class="btn btn-primary">
        + Tambah Pelanggan
    </a>

</div>

<div class="card-dashboard">

    <form
method="GET"
action="/pelanggan"
class="mb-4">

    <input
    type="text"
    name="search"
    class="form-control"
    placeholder="Cari pelanggan...">

</form>

    <table class="table align-middle">

        <tr>

            <th>No</th>
            <th>Nama</th>
            <th>No HP</th>
            <th>Alamat</th>
            <th>Aksi</th>

        </tr>

        @foreach($pelanggan as $item)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $item->nama }}</td>

            <td>{{ $item->no_hp }}</td>

            <td>{{ $item->alamat }}</td>

            <td>

                <a
href="/pelanggan/{{ $item->id }}"
class="btn btn-info">

    <i class="fa-solid fa-eye"></i>

</a>

                <a href="/pelanggan/{{ $item->id }}/edit"
                class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form
                action="/pelanggan/{{ $item->id }}"
                method="POST"
                style="display:inline;">

                    @csrf
                    @method('DELETE')

                    <button
                    class="btn btn-danger btn-sm"

                    onclick="return confirm(
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