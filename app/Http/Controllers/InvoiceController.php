<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    
    
    function getData(){
        $data = Invoice::all();

        return view("Invoice.list",["Invoices"=>$data]);
    }

    function addData(Request $req){
        $Invoice = new Invoice;

        $Invoice["invoice_no"] = $req->invoice_no;
        $Invoice["stock_code"] = $req->stock_code;
        $Invoice["quantity"] = $req->quantity;
        $Invoice["invoice_date"] = $req->invoice_date;
        $Invoice["customer_id"] = $req->customer_id;


        $Invoice->save();
        return redirect("/invoice");

    }

    function editData($id){
        $Invoice = Invoice::find($id);

        return view("Invoice.edit_stock",["data"=>$Invoice]);

    }

    function deleteData($id){
        $Invoice = Invoice::firstOrFail()->where("stock_code", $id);
        $Invoice->delete();

        return redirect("/invoice");
    }

    function update(Request $req){
        // Return "berhasil";
        $Invoice = Invoice::find($req->invoice_no);
        // return $req->country;
        $Invoice->stock_code = $req->stock_code;
        $Invoice->quantity = $req->quantity;
        $Invoice->invoice_date = $req->invoice_date;
        $Invoice->customer_id = $req->customer_id;

        $Invoice->save();

        return redirect("/invoice");
    }
}
