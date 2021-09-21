<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetable</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <header class="container">
        <div class="row">
            <div class="col-6 text-center vert">
                <h1><a class="text-decoration-none text-secondary" href="/">Timetable</a></h1></div>
            <div class="col-6 text-center">
                @if(Auth::check())
                <div class="dropdown m-2">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  {{Auth::user()->name}}
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="/logout">Chiqish</a></li>
  </ul>
</div>
               

  
</div> 
                @else
                <a href="login" class="btn btn-primary m-2">Kirish</a>
                <a href="register" class="btn btn-primary m-2">Registratsiya</a>
                @endif
            </div>
        </div>
        <hr>
    </header>
@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>