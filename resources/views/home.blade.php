@extends('template')

@section('title', 'Home')

@section('content')
    <div
    class="p-5 text-center bg-image"
    style="
    background-image: url('../storage/images/can_header.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    width : 100vw;
    height : 50vh;
    display: flex;
    justify-content: center;
    align-items: center;
    "
    >
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-black">
                <h1 class="mb-3">Recycon Shop</h1>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div
    class="p-3 mb-2 text-center bg-light text-dark"
    style="
    background-size: cover;
    background-repeat: no-repeat;
    width : 100vw;
    height : 50vh;
    display: flex;
    justify-content: center;
    align-items: center;
    "
    >
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-black">
                <h1 class="mb-3">About Us</h1>
                <h4>We are a shop for buying recycle things and second things</h4>
            </div>
        </div>
    </div>
@endsection
