<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    //

    public function index(){
        $data = Category::all();
        return view('admin.categories.index',compact(['data'=>$data]));

    }

    public function create(){


    }



}
