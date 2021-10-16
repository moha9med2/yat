<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function contact(){

        $arr = 'ali, ahmed, gfdg d,dfg dfg fd';
        $names = explode(',',$arr);

        $n = $names[0];

        foreach($names as $name){
            $name;
        }
        
        
       
        return view('contact',compact('name','arr','n'));
    }

    public function about(){

        $category =  Category::all();


        return view('about',compact('category'));

    }
}
