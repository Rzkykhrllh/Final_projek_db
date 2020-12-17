<?php

namespace App\Http\Controllers;
use App\Models\Stock;

use Illuminate\Http\Request;

class StockController extends Controller
{
    
    function getData(){
        $data = Stock::all();

        return view("Stock.list",["Stocks"=>$data]);
    }

    function addData(Request $req){
        $stock = new Stock;

        $stock["stock_id"] = $req->stock_id;
        $stock["description"] = $req->description;
        $stock["unit_price"] = $req->unit_price;

        $stock->save();
        return redirect("/stock");

    }

    function editData($id){
        $stock = Stock::find($id);

        return view("Stock.edit_stock",["data"=>$stock]);

    }

    function deleteData($id){
        $stock = Stock::firstOrFail()->where("stock_id", $id);
        $stock->delete();

        return redirect("/stock");
    }

    function update(Request $req){
        // Return "berhasil";
        $stock = Stock::find($req->stock_id);
        // return $req->country;
        $stock->description = $req->description;
        $stock->unit_price = $req->unit_price;
        $stock->save();

        return redirect("/stock");
    }
}
