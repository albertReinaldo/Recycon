@extends('templateAdmin')

@section('title', 'Product Detail')

@section('content')
<div class="row mb-2" style="background-color:#f1f1eb">
    <span class="display-1 text-center text-black">Product Detail</span>
    <div class="col-3">
        <img src="{{asset('storage/images/'.$view->Image)}}" alt="" style="height:500px" width="300px">
    </div>
    <div class="col-8 ">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><h5>{{$view->Name}}</h5></li>
            <li class="list-group-item">
                <h5>Category:</h5>
                <p>{{$view->Category}}</p>
            </li>
            <li class="list-group-item">
                <h5>Price:</h5>
                <p>{{$view->Price}}</p>
            </li>
            <li class="list-group-item">
                <h5>Description:</h5>
                <p>{{$view->Description}}</p>
            </li>
            <li class="list-group-item"></li>
        </ul>
    </div>
</div>
@endsection
