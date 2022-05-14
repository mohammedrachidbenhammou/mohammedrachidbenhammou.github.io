<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index(){
        $categories = DB::select('select * from categories');
        return view('pages.categories',['categories'=>$categories]);
        }



    public function store(Request $request)
    {
        $cat = new Category;
        $cat->nom_cat = $request->name;
        $cat->save();
        return redirect('categories')->with('status', 'The category has been added');
    }
    //
}
