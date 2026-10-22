<!DOCTYPE html>
<html>
<head>

    <title>Laporan Service</title>

    <style>

        body{
            font-family: Arial, sans-serif;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }

        table, th, td{
            border:1px solid black;
        }

        th, td{
            padding:10px;
            text-align:left;
        }

        h2{
            text-align:center;
        }

    </style>

</head>

<body>

<h2>
    Laporan Service Bengkel Komputer
</h2>

<table>

    <tr>

        <th>No</th>
        <th>No Service</th>
        <th>Pelanggan</th>
        <th>Kerusakan</th>
        <th>Status</th>
        <th>Tanggal</th>

    </tr>

    @foreach($service as $item)

    <tr>

        <td>{{ $loop->iteration }}</td>

        <td>{{ $item->no_service }}</td>

        <td>{{ $item->pelanggan->nama }}</td>

        <td>{{ $item->kerusakan }}</td>

        <td>{{ $item->status }}</td>

        <td>{{ $item->tanggal }}</td>

    </tr>

    @endforeach

</table>

</body>
</html>