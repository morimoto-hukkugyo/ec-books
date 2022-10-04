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
        $product = new Product;
        $product->fill($request->all())->save();

        return redirect()->route('admin.home');
    }
}
