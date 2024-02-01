@extends('templateCustomer')

@section('title', 'Transaction History')

@section('content')
<div style="background-color: #f1f1eb">
    @if ($histories->isEmpty())
            <h1 class="d-flex flex-column justify-content-center align-items-center" style="height:500px;">Transaction History is empty! Let's go shopping</h1>
    @else
        <div class="container">
            <h1>Transaction History</h1>
            @foreach ($histories as $history)
            <div class="dropdown">
                <table class="table table-warning table-striped table-bordered">
                    <div class="d-none">{{$price = 0}}</div>
                    <thead>
                        <tr>
                            {{$history->TransactionDate}}
                        </tr>
                        <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Price</th>
                        </tr>
                        @foreach ($joinHistory as $join)
                            @if ($join->historyId == $history->id)
                                <tr>
                                    <td><img src="{{asset('storage/images/'.$join->Image)}}" alt="" style="height:100px" width="200px"></td>
                                    <td>{{$join->Name}}</td>
                                    <td>IDR.{{$join->Price}}</td>
                                    <td>{{$join->Quantity}}</td>
                                    <td>IDR.{{$join->Price * $join->Quantity}}</td>
                                </tr>
                                <div class="d-none">{{$price += $join->Price * $join->Quantity}}</div>
                            @endif
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <th>Total Price :</th>
                            <td>IDR.{{$price}}</td>
                        </tr>
                    </thead>
                </table>
            </div>
            @endforeach
        </div>
    @endif
</div>

@endsection
