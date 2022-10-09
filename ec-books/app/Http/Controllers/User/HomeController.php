<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function top()
    {
        //$brands = DB::table('brands')->orderBy('name','asc')->get();
        $products = DB::table('products')->orderBy('id', 'desc')->take(6)->get();
        $osususme = Product::find([1,2,3,4,5,6]);
        
        return view('welcome',compact('products','osususme'));
    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('User.show',compact('product'));
    }
}
