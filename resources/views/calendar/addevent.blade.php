<!DOCTYPE html>
@extends('layout')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel-heading" style="background: #ffe260; color:white";>
                    Add Event to calendar
                </div>
                <div class="panel-body">
                    <h1>Add Event</h1>
                    <form method="POST" action="{{action('CalendarController@store')}}">
                        {{ csrf_field() }}
                        <label for="">Nama Event</label>
                        <input type="text" class="form-control" name="title"/><br />
                        <label for="">Pilih Warna Tanda Event</label>
                        <input type="color" class="form-color" name="color"/><br />
                        <label for="">Tanggal Mulai Event</label>
                        <input type="date" class="form-control" name="start_date" class="date"/><br />
                        <label for="">Tanggal Selsai Event</label>
                        <input type="date" class="form-control" name="end_date" class="date"/><br />

                        <input type="submit" name="submit" class="btn btn-primary" value="Add Event Data"/>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

