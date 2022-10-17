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
        $osususme = Product::find([1,2,3,4,5,6,7]);
        
        return view('welcome',compact('products','osususme'));
    }

    public function serch(Request $request)
    {
        $keyword_name = $request->name;
        $keyword_name2 = $request->writer_name;
        if(!empty($keyword_name || $keyword_name2))
        {
            $query = Product::query();
            $products = $query->where('name','like', '%' .$keyword_name. '%')->paginate(10);
            $products = $query->where('writer_name','like', '%' .$keyword_name2. '%')->paginate(10);
            return view('user.index',compact('request'))->with([
                'products' => $products
            ]);
        }
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

    public function update(Request $request,$id)
    {
        $user = User::find($id);

        // $user->update($request->only(['last_name','first_name','last_name_kana','first_name_kana','postl_code','address','telephone_number']));
        $user->last_name = $request->input('last_name');
        $user->first_name = $request->input('first_name');
        $user->last_name_kana = $request->input('last_name_kana');
        $user->first_name_kana = $request->input('first_name_kana');
        $user->postal_code  = $request->input('postal_code');
        $user->addres = $request->input('address');
        $user->telephone_number= $request->input('telephone_number');
        $user->email= $request->input('email');
        $user->save();

        return redirect()->route('user.home');
    }
}
