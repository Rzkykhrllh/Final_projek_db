<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    function getData(){
        $data = Country::all();

        // return $data;
        return view("Country.list",["countries"=>$data]);
    }

    function addData(Request $req){
        $cus = new Country;

        $cus["country_id"] = $req->country_id;
        $cus["country_name"] = $req->country_name   ;

        $cus->save();

    }

    function editData($id){
        // $country = Country::firstOrFail()->where("country_id",$id)->get();
        $country = Country::find($id);

        // return $country;
        return view("Country.edit_country",["data"=>$country]);

    }

    function deleteData($id){
        $country = Country::firstOrFail()->where("country_id", $id);
        $country->delete();

        return redirect("/country");
    }

    function update(Request $req){

        $country = Country::find($req->country_id);

        $country->country_name = $req->country_name;
        $country->save();

        return redirect("/country");
    }
}
