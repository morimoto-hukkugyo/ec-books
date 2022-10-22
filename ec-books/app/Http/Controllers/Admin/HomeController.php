<?php
 
namespace App\Http\Controllers\Admin;  // Adminを追加
 
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 
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
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $search_id = $request->search_id;
        // 商品を10件取得
        $products = Product::getItemList($keyword, $search_id);
        return view('admin.home', compact('products', 'keyword', 'search_id'));
    }
}