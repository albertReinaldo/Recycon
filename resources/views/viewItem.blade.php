@extends('templateAdmin')

@section('title','View Item')

@section('content')
<h1 class="display-1 text-center">Manage Item</h1>
<div class="mb-3 ms-5 me-5 ">
<table class="table table-warning table-striped table-bordered border-primary">
    <thead>
      <tr>
        <th scope="col">Item ID</th>
        <th scope="col">Item Image</th>
        <th scope="col">Item Name</th>
        <th scope="col">Item Description</th>
        <th scope="col">Item Price</th>
        <th scope="col">Item Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{$product->ItemID}}</td>
                <td></td>
                <td>{{$product->Name}}</td>
                <td>{{$product->Description}}</td>
                <td>{{$product->Price}}</td>
                <td>{{$product->Category}}</td>
                <td><button class="btn btn-warning" type="button"><a class="nav-link active" href='/editProduct/{{$product->ItemID}}'>Edit</a></button> | <button class="btn btn-danger" type="button"><a class="nav-link active" href='/deleteProduct/{{$product->ItemID}}'>Delete</a> </button></td>
          </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection
