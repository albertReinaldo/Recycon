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
              <a class="navbar-brand" href= @yield('route'){{route('home-customer')}}>Home</a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active color:black" aria-current="page" href={{route('show-product-customer')}}>Show Product</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link active color:black" aria-current="page" href="/myCart/{{Auth::user()->id}}">My Cart</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link active color:black" aria-current="page" href="/transactionHistory/{{Auth::user()->id}}">Transaction History</a>
                  </li>
                </ul>

                <form action={{route('product-customer-search')}} class="d-flex" style="800px">
                    @csrf
                        <div class="input-group">
                            <input type="search" class="form-control me-2" placeholder="Search product..." aria-label="Search" aria-describedby="search-addon" name="searchName"></div>
                            <button type="submit" class="btn btn-outline-success text-light">search</button>
                        </div>
                </form>

                <div class="d-flex" role="right">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item">{{Auth::user()->username}}</a></li>
                            <li><a class="dropdown-item" href="/editProfile/customer/{{Auth::user()->id}}">Edit Profile</a></li>
                            <li><a class="dropdown-item" href="/changePassword/customer/{{Auth::user()->id}}">Change Password</a></li>
                            </ul>
                        </li>
                    </ul>
                    <button type="button" class="btn btn-danger"><a class="nav-link active" href="{{route('logout')}}">Logout</a></button>
                    </div>
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
