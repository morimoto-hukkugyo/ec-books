<?php

namespace App\Http\Controllers;

use App\Product;
use App\P_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    // 商品作成画面表示
    public function new()
    {
        $categories = P_category::all();
        return view('products.new', compact('categories'));
    }
    // 商品作成
    public function create(Request $request)
    {
        $product = new Product;
        $image = $request->image;
        $image_path = (!empty($image)) ? 'storage/'.substr($image->store('public/uploads'), 7) : '';

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
    // 商品編集画面表示
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = P_category::all();
        return view('products.edit', compact('product', 'categories'));
    }
    // 商品情報を更新
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $image = $request->image;
        $image_path = (!empty($image)) ? 'storage/'.substr($image->store('public/uploads'), 7) : '';
        // 新たに画像がアップロードされていた場合、前回登録した画像を削除する
        if(!empty($icon_img_path) && !empty($product->image) && $product->image !== $image_path) {
            Storage::delete($product->image);
        }
        $product->category_id = $request['category_id'];
        $product->name = $request['name'];
        $product->image = (!empty($image)) ? $image_path : $product->image;
        $product->introduction = $request['introduction'];
        $product->price = $request['price'];
        $product->writer_name = $request['writer_name'];
        $product->writer_intro = $request['writer_intro'];
        $product->save();
        return redirect()->route('admin.home');
    }
    // 商品削除
    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->route('admin.home');
    }
}
