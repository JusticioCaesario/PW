<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Bootstrap</title>
    
    <!-- Tautan ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Tautan ke Bootstrap JavaScript dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
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
                <input type="datetime-local" name="start_date" class="form-control">
            </div>
            <div class="form-group">
                <label for="tglevent">Tanggal Akhir Event :</label>
                <input type="datetime-local" name="end_date" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Ajukan</button>
        </form>
    </div>

</body>
</html>
