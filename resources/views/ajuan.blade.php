<!DOCTYPE html>
@extends('layout')
<html>
<head>
    <title>Data Ajuan Angkatan</title>
    @section('css')
    <style>
        .card {
            width: 80%;
            margin: 0 auto;
            padding: 40px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 3px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin: 0 auto; /* Menengahkan tabel */
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover { /* Responsif terhadap hover */
            background-color: #ebebeb;
        }

        h2 {
            color: #333333;
            text-align: center;
            margin-top: 20px;
            font-size:20;
        }
    </style>
    @endsection
    @section('content')
</head>
<body>
    <br>
    <div class="card">
        <h2>Data Ajuan</h2>
        <br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Event</th>
                    <th>Deskripsi</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Dibuat Pada</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ajuan as $table)
                <tr>
                    <td>{{ $table->id }}</td>
                    <td>{{ $table->namaevent }}</td>
                    <td>{{ $table->deskripsi }}</td>
                    <td>{{ $table->start_date }}</td>
                    <td>{{ $table->end_date }}</td>
                    <td>{{ $table->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <br><br><br>
    <br><br><br>
</body>
</html>
@endsection
