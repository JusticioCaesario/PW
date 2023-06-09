<!DOCTYPE html>
<html lang="en">
    @extends('layout')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ajuan</title>
    @section('css')
    <!-- Tautan ke Bootstrap CSS -->
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- Data Table -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/r-2.2.6/sc-2.0.3/sb-1.0.0/sp-1.2.1/datatables.min.css" />

<!-- Font awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
 <style>
        body {
            background-color: rgb(255, 255, 255);
           
        }
        
        .card {
            margin: 0 auto;
            margin-top: 50px;
            width: 400px;
            font-family: 'Arial', sans-serif;
        }
        
        .form-control {
            background-color: rgb(255, 255, 255);
        }
        
        .btn-primary {
            background-color: #0d469c;
            border-color: #0d469c;
        }
        
        .btn-primary:hover {
            background-color: #084a9c;
            border-color: #084a9c;
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
