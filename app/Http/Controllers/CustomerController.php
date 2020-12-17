<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    function getData(){
        $data = Customer::all();

        // return $data;
        return view("Customer.list",["customers"=>$data]);
    }

    function addData(Request $req){
        $cus = new Customer;

        $cus["customer_id"] = $req->customer_id;
        $cus["country"] = $req->country;

        $cus->save();

    }

    function editData($id){
        // $customer = Customer::firstOrFail()->where("customer_id",$id)->get();
        $customer = Customer::find($id);

        // return $customer;
        return view("Customer.edit_customer",["data"=>$customer]);

    }

    function deleteData($id){
        $customer = Customer::firstOrFail()->where("customer_id", $id);
        $customer->delete();

        return redirect("/customer");
    }

    function update(Request $req){
        // Return "berhasil";
        $customer = Customer::find($req->customer_id);
        // return $req->country;
        $customer->country_id = $req->country_id;
        $customer->save();

        return redirect("/customer");
    }
}
