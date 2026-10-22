@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h3 class="fw-bold">
            Data Service
        </h3>

        <a href="/service/create" class="btn btn-primary">
            + Tambah Service
        </a>

    </div>

    <div class="card-dashboard">

        <form method="GET" action="/service" class="mb-4">

            <input type="text" name="search" class="form-control" placeholder="Cari service...">

        </form>

        <table class="table align-middle">

            <tr>

                <th>No</th>
                <th>No Service</th>
                <th>Pelanggan</th>
                <th>Kerusakan</th>
                <th>Status</th>
                <th>Tanggal</th>
                <th>Aksi</th>

            </tr>

            @foreach($service as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $item->no_service }}</td>

                    <td>{{ $item->pelanggan->nama }}</td>

                    <td>{{ $item->kerusakan }}</td>

                    <td>

                        @if($item->status == 'Proses')

                            <span class="badge bg-warning">
                                Proses
                            </span>

                        @else

                            <span class="badge bg-success">
                                Selesai
                            </span>

                        @endif

                    </td>

                    <td>{{ $item->tanggal }}</td>

                    <td>

                        <a href="/service/{{ $item->id }}" class="btn btn-info">

                            <i class="fa-solid fa-eye"></i>

                        </a>
                        <a href="/service/{{ $item->id }}/edit" class="btn btn-warning btn-sm">
                            Edit
                        </a>



                        <form action="/service/{{ $item->id }}" method="POST" style="display:inline;">

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