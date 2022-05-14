<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\City;

class CityController extends Controller
{


    public function index(){
        $cities = DB::select('select * from cities');
        return view('pages.cities',['cities'=>$cities]);
        }



    public function store(Request $request)
    {
        $cit = new City;
        $cit->Name = $request->name;
        $cit->save();
        return redirect('places')->with('status', 'The city has been added');
    }
    //
}
