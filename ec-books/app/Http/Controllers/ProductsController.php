<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductsController extends Controller
{
    // 初期表示画面
    public function new()
    {
        return view('products.new');
    }
    // 商品作成
    public function create(Request $request)
    {
        Log::debug($request);
        $product = new Product;
        $image = $request->image;
        $image_path = (!empty($image)) ? $image->store('public/uploads') : '';

        $product->category_id = $request['category_id'];
        $product->name = $request['name'];
        $product->image = $image_path;
        $product->introduction = $request['introduction'];
        $product->price = $request['price'];
        $product->writer_name = $request['writer_name'];
        $product->writer_intro = $request['writer_intro'];
        $product->save();

        return redirect()->route('admin.home');
    }
}
