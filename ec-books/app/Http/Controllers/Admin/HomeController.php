<?php
 
namespace App\Http\Controllers\Admin;  // Adminを追加
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
 
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');  //変更
    }
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 商品を10件取得
        $products = Product::getItemList();
        return view('admin.home', compact('products'));
    }
}