<!DOCTYPE html>
<html lang="en">
    @extends('layout')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ajuan</title>
    @section('css')
    <!-- Tautan ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .card {
            margin: 0 auto;
            margin-top: 50px;
            width: 400px;
        }
    </style>
    @endsection
</head>
@section('content')
<body>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Pengajuan Event</h5>
                @if($errors->any())
                    <div style="color: red">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/create" method="POST">
                    @if(session('message'))
                        <div class="alert alert-success">
                           {{ session('message') }}
                             </div>
                                @endif

                    @csrf
                    <div class="form-group">
                        <label for="namaevent">Nama Event:</label>
                        <input type="text" name="namaevent" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi:</label>
                        <textarea name="deskripsi" class="form-control" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tglevent">Tanggal Mulai Event:</label>
                        <input type="date" name="start_date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tglevent">Tanggal Akhir Event:</label>
                        <input type="date" name="end_date" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Ajukan</button>
                </form>
                
            </div>
        </div>
    </div>
    <br><br>
</body>
</html>

@endsection