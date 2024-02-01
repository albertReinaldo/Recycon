@extends('templateAdmin')

@section('title','Edit Product')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center" style="height:1000px; background-color:#f1f1eb">
    <div class="card">
        <div class="card-body">
            <h1 style="color:rgb(82, 132, 141)">Edit Item</h1>
                <form action="/editProduct/{{$product->ItemID}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3 ms-5 me-5">
                        <label class="form-label">Item ID</label>
                        <input type="text" class="form-control" style="width:1200px" disabled value="{{$product->ItemID}}" name = "ItemID">
                    </div>

                    <div class="mb-3 ms-5 me-5">
                        <label class="form-label">Item Price</label>
                        <input type="text" class="form-control" value = "{{$product->Price}}" name = "Price">
                        @error('Price')
                            <div class="alert-danger text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3 ms-5 me-5">
                        <label class="form-label">Item Category</label>
                        <select class="form-select" aria-label="Item Category" name="Category" >
                            <option selected>{{$product->Category}}</option>
                            <option value="Recycle">Recycle</option>
                            <option value="Second">Second</option>
                            @error('Category')
                                <div class="alert-danger text-danger">{{$message}}</div>
                            @enderror
                        </select>
                    </div>

                    <div class="mb-3 ms-5 me-5">
                        <label class="form-label">Item Name</label>
                        <input type="text" class="form-control" required value="{{$product->Name}}" name = "Name">
                        @error('Name')
                            <div class="alert-danger text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3 ms-5 me-5">
                        <label class="form-label">Item Description</label>
                        <input type="text" class="form-control" name="Description" required value="{{$product->Description}}" style="width: 1200px; height: 80px;">
                        @error('Description')
                            <div class="alert-danger text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <input type="hidden" name="old_image" value="{{asset('storage/images/'.$product->Image)}}">

                    <div class="mb-3 ms-5 me-5">
                        <label for="formFile" class="form-label">Item Image</label>
                        <img src="{{asset('storage/images/'.$product->Image)}}" alt="" style="height:100px" width="100px">
                    </div>

                    <div class="mb-3 ms-5 me-5">
                        <label for="formFile" class="form-label">Item Image File</label>
                        <input type="text" class="form-control" required disabled value="{{$product->Image}}" name = "itemImage">
                    </div>

                    <div class="mb-3 ms-5 me-5">
                        <label for="formFile" class="form-label">Image File Upload</label>
                        <input class="form-control" type="file" placeholder="Image" name="Image" id="" value="{{$product->Image}}">
                        @error('Image')
                            <div class="alert-danger text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-warning mb-3 ms-5 me-5" >Edit Item</button>
                </form>
        </div>
    </div>
</div>
@endsection
