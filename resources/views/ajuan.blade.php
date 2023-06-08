<!DOCTYPE html>
@extends('layout')
<html>
<head>
    <title>Forms</title>
    @section('css')
    <style>
        body {
            background-color: rgba(0, 33, 71, 0.8);
            font-family: 'Sabon', serif; /* Ganti font body menjadi Sabon */
            color: rgba(0, 33, 71, 0.8);
        }

        .card {
            width: 80%;
            margin: 0 auto;
            padding: 40px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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
            border: 1px solid rgb(230, 219, 180);
            text-align: left;
            padding: 8px;
            background-color: rgba(0, 0, 0, 0.1);
        }

        th {
            background-color: rgb(230, 219, 180);
            color: #rgba(0, 0, 0, 0.1);
        }

        tr:nth-child(even) {
            background-color: #rgb(230, 219, 180);
        }

        tr:hover {
            background-color: #rgb(230, 219, 180);
        }

        h2 {
            color: #rgb(253, 200, 0);
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
            letter-spacing: 1px;
            font-weight: bold;
            font-family: 'Sabon', serif; /* Ganti font h2 menjadi Sabon */
        }

        /* Ganti font menjadi Just Another Hand */
        .card, th, td {
            font-family: 'Sabon', serif;
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
