<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\user;
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

    public function index()
    {
        $products = Product::paginate(10);

        return view('user.index',compact('products'));
    }

    public function home()
    {
        $users = User::get();

        return view('user.home',compact('users'));
    }

    public function show($id)
    {
        $product = Product::getItem($id);

        return view('User.show',compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('User.edit',compact('product'));
    }
}
