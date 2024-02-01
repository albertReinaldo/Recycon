<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bd-navbar sticky-top" style="background-color: rgb(27, 84, 199)">
            <div class="container-fluid">
              <a class="navbar-brand" href= @yield('route'){{route('home')}}>Home</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active color:black" aria-current="page" href={{route('show-product')}}>Show Product</a>
                  </li>
                </ul>
                <form class="d-flex" role="right">
                    <div class="pe-2"><button class="btn btn-outline-light" type="button"><a class="nav-link active" href={{route('register')}}>Register</a></button></div>
                    <button class="btn btn-outline-light" type="button"><a class="nav-link active" href={{route('login-page')}}>Login</a></button>
                </form>
              </div>
            </div>
          </nav>
    </header>
    @yield('content')
    <footer>
        <div class="text-white text-center p-4" style="background-color: rgb(27, 84, 199);">
            © 2022 Copyright LC062
          </div>

    </footer>
</body>
</html>