<!DOCTYPE html>
@extends('layout')
<html>
<head>
    <title>Data Ajuan Angkatan</title>
    @section('css')
    <style>
        body {
            background-image: url('https://example.com/kitten-background.jpg'); /* Ganti URL dengan URL gambar latar belakang kucing */
            background-color: #f7f3e9;
            font-family: 'Arial', sans-serif;
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
        }

        /* Ganti font menjadi Just Another Hand */
        body, .card, th, td, h2 {
            font-family: 'Just Another Hand', cursive;
        }

        /* Ganti warna teks menjadi putih */
        body, .card, th, td, h2 {
            color: #fff;
        }

        /* Ganti ikon kucing di header */
        .card h2::before {
            content: "\f6be";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            margin-right: 10px;
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
