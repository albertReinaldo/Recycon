@extends('templateCustomer')

@section('title', 'Product Detail')

@section('content')

    <div class="row mb-2" style="background-color:#f1f1eb">
        <span class="display-1 text-center text-black">Product Detail</span>
        <div class="col-3">
            <img src="{{asset('storage/images/'.$viewJoin->Image)}}" alt="" style="height:500px" width="300px">
        </div>
        <div class="col-8 ">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><h5>{{$viewJoin->Name}}</h5></li>
                <li class="list-group-item">
                    <h5>Category:</h5>
                    <p>{{$viewJoin->Category}}</p>
                </li>
                <li class="list-group-item">
                    <h5>Price:</h5>
                    <p>{{$viewJoin->Price}}</p>
                </li>
                <li class="list-group-item">
                    <h5>Description:</h5>
                    <p>{{$viewJoin->Description}}</p>
                </li>
                <li class="list-group-item">
                    <form action="/myCart/update/{{$viewJoin->id}}/{{$viewJoin->userId}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <label for="Qty">Qty: </label>
                        <input type="number" name="Qty" id="Qty" min="1" style="width: 60px" placeholder="1">
                        <button class="btn btn-warning" type="submit">Update To Cart</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>

@endsection
