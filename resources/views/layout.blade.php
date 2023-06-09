<!DOCTYPE html>
<html>

<head>

  <!-- Stylesheet -->
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- Data Table -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/r-2.2.6/sc-2.0.3/sb-1.0.0/sp-1.2.1/datatables.min.css" />

  <!-- Font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <!--add this to have this styles on all pages-->
  @yield('css')
  <!--for adding additional styles-->
</head>

<body>

  <!-- Navbar Area Start -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark @if(auth()->check()) bg-info @else bg-info @endif">
      <a class="navbar-brand" href="#">Kalangan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
           <span class="navbar-toggler-icon"></span>
       </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          @auth
          @if(Auth::user()->role === 'Admin')
          <li class="nav-item active">
            <a class="nav-link" href="{{route('calendar.index')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          @endif
          @if(Auth::user()->role === 'mahasiswa')
          <li class="nav-item active">
            <a class="nav-link" href="{{route('calendar.show')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          @endif
          @endauth
          @guest
          <li class="nav-item active">
            <a class="nav-link" href="{{route('calendar.show')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          @endguest

          @auth
          @if(Auth::user()->role === 'mahasiswa')
        <li class="nav-item">
          <a class="nav-link" href="{{route('create')}}">Ajuan</a>
        </li>
        @endif
        @endauth

        @auth
          @if(Auth::user()->role === 'Admin')
        <li class="nav-item">
          <a class="nav-link" href="{{route('ajuan')}}">Ajuan</a>
        </li>
        @endif
        @endauth

        </ul>

        <ul class="navbar-nav">
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}"><i class="fas fa-sign-in-alt"></i> Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}"><i class="fas fa-user-plus"></i> Signup</a>
          </li>
          @endguest @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>
              {{Auth::user()->role}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{route('actionlogout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
          </li>
          @endauth
        </ul>
      </div>
    </nav>
  </header>
  <!-- Navbar Area End -->


  @yield('content')
  <!--for adding your content-->

  <!-- Add Footer Area Start -->
  <footer class="fixed-bottom bg-dark text-white text-center">
    <div class="card-header">
      2023
    </div>
  </footer>
  <!-- Add Footer Area End -->

  <!-- **** All JS Files here ***** -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/r-2.2.6/sc-2.0.3/sb-1.0.0/sp-1.2.1/datatables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 
  <!--add this to have this scripts on all pages-->
  @yield('scripts')
  <!--for adding additional scripts-->

</body>

</html>
