<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\history;
use App\Models\historyDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class historyController extends Controller
{
    public function index($id){
        $histories = history::where('userId','=',$id)->get();
        $joinHistory = history::where('userId','=',$id)->join('history_detail','history_detail.historyId','=','history.id')->join('products','products.ItemID','=','history_detail.ItemID')->get();

        return view('history',compact('histories','joinHistory'));
    }

    public function insertHistory($userId, Request $request){
        $request->validate([
            "ReceiverName" =>"required",
            "ReceiverAddress" =>"required",
        ]);

        history::insert([
            'userId' => $userId,
            'TransactionDate' => Carbon::now()->toDateString()
        ]);

        $historyData = history::where('userId','=',$userId)->get();
        $historyDetail = cart::where('userId','=',$userId)->get();
        $orderDate = history::orderBy('id','desc')->first();
        $joinHistory = history::where('userId','=',$userId)->join('history_detail','history_detail.historyId','=','history.id')->join('products','products.ItemID','=','history_detail.ItemID')->get();

        foreach($historyDetail as $detail){

            historyDetail::insert([
                'ItemID' => $detail->ItemID,
                'historyId' => $orderDate->id,
                'Quantity' => $detail->Quantity,
                'ReceiverName' => $request->ReceiverName,
                'ReceiverAddress' => $request->ReceiverAddress
            ]);
        }
        cart::where('userId','=',$userId)->delete();

        return redirect()->to('/transactionHistory/'.$userId)->with(compact('joinHistory','historyData'));
    }
}
