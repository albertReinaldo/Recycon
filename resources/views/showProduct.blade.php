@extends('template')

@section('title', 'Show Product')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center" style="background-color: #f1f1eb">
    <h1 class="display-1 text-center">Our Products</h1>
    <div class="row">
        @foreach ($products as $product)
                <div class="col">
                    <div class="card mb-3 ms-2" style="width: 400px; border-width:3px; border-color:yellow">
                        <img src="{{asset('storage/images/'.$product->Image)}}" class="card-img-top" alt="" style="height: 200px " >
                        <div class="card-body">
                            <div class="d-flex w-100 justify-content-between"><h5 class="mb-1">{{$product->Name}} </h5> <p>{{$product->Category}}</p></div>
                            <h5 class="card-text">IDR.{{$product->Price}}</h5>
                            <a href="/showProduct/{{$product->ItemID}}" class="btn btn-warning">Detail</a>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
    {{$products->links()}}
</div>

@endsection
