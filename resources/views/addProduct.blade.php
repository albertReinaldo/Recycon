@extends('templateAdmin')

@section('title','Add Product')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center" style="height:750px; background-color:#f1f1eb">
    <div class="card">
        <div class="card-body">
            <h1 style="color:rgb(82, 132, 141)">Add Item</h1>
            <form action="{{route('add-product-logic')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 ms-5 me-5">
                    <label class="form-label">Item ID</label>
                    <input type="text" class="form-control" placeholder="ItemID" name = "ItemID" style="width: 1200px">
                    @error('ItemID')
                        <div class="alert-danger text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3 ms-5 me-5">
                    <label class="form-label">Item Price</label>
                    <input type="text" class="form-control" placeholder="Item Price" name = "Price">
                    @error('Price')
                        <div class="alert-danger text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3 ms-5 me-5">
                    <label class="form-label">Item Category</label>
                    <select class="form-select" aria-label="Item Category" name="Category" >
                        <option selected>Item Category</option>
                        <option value="Recycle">Recycle</option>
                        <option value="Second">Second</option>
                        @error('Category')
                            <div class="alert-danger text-danger">{{$message}}</div>
                        @enderror
                    </select>
                </div>

                <div class="mb-3 ms-5 me-5">
                    <label class="form-label">Item Name</label>
                    <input type="text" class="form-control" placeholder="Item Name" name = "Name">
                    @error('Name')
                        <div class="alert-danger text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3 ms-5 me-5">
                    <label class="form-label">Item Description</label>
                    <textarea class="form-control" rows="3" name="Description" placeholder="Insert Description"></textarea>
                    @error('Description')
                        <div class="alert-danger text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3 ms-5 me-5">
                    <label for="formFile" class="form-label">Image File Upload</label>
                    <input class="form-control" type="file" placeholder="Image" name="Image" id="">
                    @error('Image')
                        <div class="alert-danger text-danger">{{$message}}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-warning mb-3 ms-5 me-5" >Add Item</button>
            </form>
        </div>
    </div>
</div>
@endsection
