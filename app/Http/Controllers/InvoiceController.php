<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    
    
    function getData(){
        $data = Invoice::simplepaginate(50);

        // return $data;
        return view("Invoice.list",["Invoices"=>$data]);
    }

    function addData(Request $req){
        $Invoice = new Invoice;

        $Invoice["invoice_id"] = $req->invoice_id;
        $Invoice["stock_id"] = $req->stock_id;
        $Invoice["quantity"] = $req->quantity;
        $Invoice["invoice_date"] = $req->invoice_date;
        $Invoice["customer_id"] = $req->customer_id;


        $Invoice->save();
        return redirect("/invoice");

    }

    function editData($id){
        $Invoice = Invoice::find($id);

        return view("Invoice.edit_invoice",["data"=>$Invoice]);

    }

    function deleteData($id){
        $Invoice = Invoice::firstOrFail()->where("invoice_id", $id);
        // $Invoice = Invoice::find($id);

        $Invoice->delete();
        


        return redirect("/invoice");
    }

    function update(Request $req){
        // Return "berhasil";
        $Invoice = Invoice::find($req->invoice_id);
        $Invoice->stock_id = $req->stock_id;
        $Invoice->quantity = $req->quantity;
        $Invoice->invoice_date = $req->invoice_date;
        $Invoice->customer_id = $req->customer_id;

        $Invoice->save();

        return redirect("/invoice");
    }
}
