@extends('template')

@section('title','login')

@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center" style="height:500px;background-color: #f1f1eb">
        <div class="card" style="background-color: #fafafa">
            <div class="card-body">
                <h1 style="color:rgb(82, 132, 141)">Login</h1>
                <br>
                <form action="{{route('login')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @if($message = Session::get('failed'))
                    <div class="alert-danger text-danger">{{$message}}</div>
                    @endif


                    <div class="form-floating mb-3">
                        <input type="email" style="width: 800px" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="email address" name = "email" value="{{Cookie::get('CookieEmail') !== null ? Cookie::get('CookieEmail'): "" }}">
                        <label for="InputEmail" class="form-label">Email address</label>
                        @error('email')
                            <div class="alert-danger text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="InputPassword" placeholder="password" name = "password" value="{{Cookie::get('CookiePassword') !== null ? Cookie::get('CookiePassword'): "" }}">
                        <label for="InputPassword" class="form-label">Password</label>
                        @error('password')
                            <div class="alert-danger text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-check text-right mt-3">
                        <input type="checkbox" class="form-check-input" name="remember" id="check" checked={{Cookie::get('CookieEmail')!== null }}>
                        <label class="form-check-label" for="check">Remember Me</label>
                    </div>

                    <div class="form-group text-right mt-3">
                        <button type="submit" class="btn btn-warning" >Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
