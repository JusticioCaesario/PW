<!DOCTYPE html>
<html>
<head>
    <title>Forms</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
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

        h1 {
            color: #333333;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Data Ajuan</h1>
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
</body>
</html>
