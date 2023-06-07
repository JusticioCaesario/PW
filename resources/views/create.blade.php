
<!DOCTYPE html>
<html lang="en">
@extends('layout')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Bootstrap</title>
    
    <!-- Tautan ke Bootstrap CSS -->
    @section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
@endsection
@section('scripts')
    <!-- Tautan ke Bootstrap JavaScript dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@endsection

</head>
@section('content')
<body>

    <div class="container">
        <form action="/create" method="POST">
            @csrf
            <div class="form-group">
                <label for="namaevent">Nama Event :</label>
                <input type="text" name="namaevent" class="form-control">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi :</label>
                <textarea name="deskripsi" class="form-control" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="tglevent">Tanggal Mulai Event :</label>
<<<<<<< HEAD
                <input type="datetime-local" name="start_date" class="form-control">
            </div>
            <div class="form-group">
                <label for="tglevent">Tanggal Akhir Event :</label>
                <input type="datetime-local" name="end_date" class="form-control">
=======
                <input type="date" name="start_date" class="form-control">
            </div>
            <div class="form-group">
                <label for="tglevent">Tanggal Akhir Event :</label>
                <input type="date" name="end_date" class="form-control">
>>>>>>> 07e87ba981395be2c3a331dfdb22e17289d7c0e1
            </div>
            <button type="submit" class="btn btn-primary">Ajukan</button>
        </form>
    </div>

</body>
</html>
@endsection