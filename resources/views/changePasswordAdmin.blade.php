@extends('templateAdmin')

@section('title', 'Change Password')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center" style="height:500px;background-color: #f1f1eb">
    <div class="card" style="background-color: #fafafa">
        <div class="card-body">
            <h1 style="color:rgb(82, 132, 141)">Change Password</h1>
            <br>
            <form action="/changePassword" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" placeholder="Old Password" name = "old_password" id="inputOldPassword" style="width: 800px">
                    <label class="form-label" for="inputOldPassword">Old Password</label>
                    @error('old_password')
                        <div class="alert-danger text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" placeholder="New Password" name = "password" id="inputPassword" style="width: 800px">
                    <label class="form-label" for="inputPassword">New Password</label>
                    @error('password')
                        <div class="alert-danger text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" placeholder="Confirm New Password" name = "confirm_password" id="inputConfirmPassword" style="width: 800px">
                    <label class="form-label" for="inputConfirmPassword">Confirm New Password</label>
                    @error('confirm_password')
                        <div class="alert-danger text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group text-right mt-3">
                    <button type="submit" class="btn btn-warning" >Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
