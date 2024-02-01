@extends('templateAdmin')

@section('title','Edit Profile')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center" style="height:500px;background-color: #f1f1eb">
    <div class="card" style="background-color: #fafafa">
        <div class="card-body">
            <h1 style="color:rgb(82, 132, 141)">Edit Profile</h1>
            <br>
            <form action="/editProfile/{{$profile->id}}" method="post">
                @csrf
                @method('patch')
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" value="{{$profile->username}}" name = "username" placeholder="New Username" id="inputUsername" style="width:800px">
                    <label class="form-label" for="inputUsername">New Username</label>
                    @error('username')
                        <div class="alert-danger text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" value="{{$profile->email}}" name = "email" placeholder="New Email" id="inputEmail">
                    <label class="form-label" for="inputEmail">New Email</label>
                    @error('email')
                        <div class="alert-danger text-danger">{{$message}}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-warning" >Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
