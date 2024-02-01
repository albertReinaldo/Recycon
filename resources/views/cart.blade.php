@extends('templateCustomer')

@section('title', 'My Cart')

@section('content')
    <div style="background-color: #f1f1eb">
        <div class="d-none">{{$price = 0}}</div>
        @if ($cartData->isEmpty())
            <h1 class="d-flex flex-column justify-content-center align-items-center" style="height:500px;">Cart is empty! Let's go shopping</h1>
        @else
            <h1 class="display-1 text-center">My Cart</h1>
            <div class="mb-3 ms-5 me-5 ">
                <table class="table table-warning table-striped table-bordered border-primary">
                    <thead>
                    <tr>
                        <th scope="col">Item Image</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartData as $cart)
                            <tr>

                                <td><img src="{{asset('storage/images/'.$cart->products->Image)}}" alt="" style="height:100px" width="200px"></td>
                                <td>{{$cart->products->Name}}</td>
                                <td>IDR.{{$cart->products->Price}}</td>
                                <td>{{$cart->Quantity}}</td>
                                <td>{{$cart->products->Price * $cart->Quantity}}</td>
                                <td><button class="btn btn-warning" type="button"><a class="nav-link active" href='/showProduct/customer/update/{{$cart->products->ItemID}}/{{$cart->id}}'>Edit</a></button> | <button class="btn btn-danger" type="button"><a class="nav-link active" href='/myCart/delete/{{Auth::User()->id}}/{{$cart->id}}'>Delete</a></button></td>
                        </tr>
                        <div class="d-none">{{$price += $cart->products->Price * $cart->Quantity}}</div>
                        @endforeach
                    </tbody>
                </table>
                Total Price : IDR.{{$price}}
            </div>
            <div class="card ms-5 me-5" style="background-color: #fafafa">
                <br>
                <h1 class="ms-3 me-5" style="color:rgb(82, 132, 141)">Receiver</h1>
                <div class="card-body">
                    <form action="/history/{{Auth::user()->id}}" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" value="{{Auth::user()->username}}" name = "ReceiverName" placeholder="Receiver Name" id="inputName">
                            <label class="form-label" for="inputname">Receiver Name</label>
                            @error('ReceiverName')
                                <div class="alert-danger text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name = "ReceiverAddress" placeholder="Receiver Address" id="inputAddress">
                            <label class="form-label" for="inputAddress">Receiver Address</label>
                            @error('ReceiverAddress')
                                <div class="alert-danger text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-warning" >Checkout</button>
                    </form>
                </div>
            </div>
            <br>
        @endif
    </div>
@endsection
