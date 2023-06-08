<!DOCTYPE html>
@extends('layout')
<html>
<head>
    <title>Forms</title>
    @section('css')
    <style>
        body {
            background-color: #f7f3e9;
            font-family: 'Sabon', serif; /* Ganti font body menjadi Sabon */
            color: #614c3d;
        }

        .card {
            width: 80%;
            margin: 0 auto;
            padding: 40px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 3px;
            background-color: #f2e8da;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin: 0 auto;
            background-color: #fafafa;
        }

        th, td {
            border: 1px solid #d9c6b9;
            text-align: left;
            padding: 8px;
            background-color: #fff;
        }

        th {
            background-color: #614c3d;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f5ede2;
        }

        tr:hover {
            background-color: #ece4d9;
        }

        h2 {
            color: #614c3d;
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
            letter-spacing: 1px;
            font-weight: bold;
            font-family: 'Sabon', serif; /* Ganti font h2 menjadi Sabon */
        }

        /* Ganti font menjadi Just Another Hand */
        .card, th, td {
            font-family: 'Just Another Hand', cursive;
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
