@extends('template')

@section('title', 'Register')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center" style="height:500px;background-color: #f1f1eb">
    <div class="card" style="background-color: #fafafa">
        <div class="card-body">
            <h1 style="color:rgb(82, 132, 141)">Register</h1>
            <br>
            <form action="{{route('register-logic')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="username" name = "username" id="floatingInput" style="width: 800px">
                    <label class="form-label" for="floatingInput">Username</label>
                    @error('username')
                        <div class="alert-danger text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="email address" name = "email">
                    <label class="form-label" for="InputEmail" >Email address</label>
                    @error('email')
                        <div class="alert-danger text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="InputPassword" placeholder="password" name = "password">
                    <label class="form-label" for="InputPassword" >Password</label>
                    @error('password')
                        <div class="alert-danger text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="confirmPassword" placeholder="confirm password" name = "confirm_password">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    @error('confirm_password')
                        <div class="alert-danger text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group text-right mt-3">
                    <button type="submit" class="btn btn-warning" >Register Now</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
