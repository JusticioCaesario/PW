<!DOCTYPE html>
<html lang="en">
    

@extends('layout')
<head>
      <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- Data Table -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/r-2.2.6/sc-2.0.3/sb-1.0.0/sp-1.2.1/datatables.min.css" />

<!-- Font awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalender Angkatan</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  @section('css')
  <style>
    
    /* Styling for the calendar */
    .calendar-container {
      max-width: 800px;
      margin: 0 auto;
    }

    /* Styling for the modal */
    .modal-dialog {
      max-width: 400px;
    }

    /* Styling for the save button */
    #saveBtn {
      background-color: #007bff;
      border-color: #007bff;
      transition: background-color 0.3s ease;
    }

    #saveBtn:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }

    /* Styling for the event dots */
    .fc-event-dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      display: inline-block;
      margin-right: 5px;
    }

    .fc-event-dot.red {
      background-color: #ff0000;
    }

    .fc-event-dot.green {
      background-color: #00ff00;
    }

    .fc-event-dot.blue {
      background-color: #0000ff;
    }

    /* Styling for the event titles */
    .fc-event-title {
      font-weight: bold;
    }

    /* Styling for the modal */
    .modal-title {
      color: #007bff;
      font-weight: bold;
    }

    /* Styling for the modal buttons */
    .modal-footer button {
      transition: background-color 0.3s ease;
    }

    .modal-footer button:hover {
      background-color: #0056b3;
    }
  </style>
  @endsection

  @section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 
 <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var booking = @json($events);

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev, next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,list',
                },
                events: booking,
                displayEventTime: false,
                selectable: false,
                selectHelper: false,
                select: function(start, end, allDays) {
                    $('#bookingModal').modal('toggle');

                    $('#saveBtn').click(function() {
                        var title = $('#title').val();
                        var start_date = moment(start).format('YYYY-MM-DD');
                        var end_date = moment(end).format('YYYY-MM-DD');

                        $.ajax({
                            url:"{{ route('calendar.store') }}",
                            type:"POST",
                            dataType:'json',
                            data:{ title, start_date, end_date  },
                            success:function(response)
                            {
                                $('#bookingModal').modal('hide')
                                $('#calendar').fullCalendar('renderEvent', {
                                    'title': response.title,
                                    'start' : response.start,
                                    'end'  : response.end,
                                    'color' : response.color
                                });

                            },
                            error:function(error)
                            {
                                if(error.responseJSON.errors) {
                                    $('#titleError').html(error.responseJSON.errors.title);
                                }
                            },

                            
                        });
                    });
                },
                editable: false,
                eventDrop: function(event) {
                    var id = event.id;
                    var start_date = moment(event.start).format('YYYY-MM-DD');
                    var end_date = moment(event.end).format('YYYY-MM-DD');

                    $.ajax({
                            url:"{{ route('calendar.update', '') }}" +'/'+ id,
                            type:"PATCH",
                            dataType:'json',
                            data:{ start_date, end_date  },
                            success:function(response)
                            {
                                swal("Good job!", "Event Updated!", "success");
                            },
                            error:function(error)
                            {
                                console.log(error)
                            },
                        });
                },
              
                



            });


            $("#bookingModal").on("hidden.bs.modal", function () {
                $('#saveBtn').unbind();
            });

            $('.fc-event').css('font-size', '13px');
            $('.fc-event').css('width', '20px');
            $('.fc-event').css('border-radius', '50%');


        });

    </script>
@endsection
</head>
<body>
@section('content') 
  <!-- Modal -->
  <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Booking title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="text" class="form-control" id="title">
          <span id="titleError" class="text-danger"></span>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" id="saveBtn" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center mt-5">Kalender Kegiatan Mahasiswa Angkatan 2021</h3>
                <div class="col-md-11 offset-1 mt-5 mb-5 calendar-container">

                    <div id="calendar">

                    </div>

                </div>
            </div>
        </div>
    </div>
  
</body>
</html>
@endsection
