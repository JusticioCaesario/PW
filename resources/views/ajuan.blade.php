<!DOCTYPE html>
@extends('layout')
<html>
<head>
    <title>Forms</title>
    @section('css')
    <style>
        body {
            background-color: #ffffff;
            font-family: 'Arial', sans-serif;
            color: #0e0600;
        }

        .card {
            width: 80%;
            margin: 0 auto;
            padding: 40px;
            box-shadow: 0 4px 6px rgba(255, 255, 255, 0.1);
            border-radius: 3px;
            background-color: #ffffff;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin: 0 auto;
            background-color: #fafafa;
        }

        th, td {
            border: 1px solid #000000;
            text-align: left;
            padding: 8px;
            background-color: #fff;
        }

        th {
            background-color: #000000;
            color: #ffffff;
        }

        tr:nth-child(even) {
            background-color: #f5ede2;
        }

        tr:hover {
            background-color: #ffffff;
        }

        h2 {
            color: #000000;
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
            letter-spacing: 1px;
            font-weight: bold;
        }

        /* Ganti font menjadi Just Another Hand */
        body, .card, th, td, h2 {
            font-family: 'Arial', serif;
        }

        /* Ganti warna teks menjadi hitam */
        body, .card, td, h2 {
            color: #000000;
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