<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'image',
        'introduction',
        'price',
        'writer_name',
        'writer_intro'
    ];
    /**
     * メソッド
     */
    // 商品一覧を取得
    public static function getItemList()
    {
        return Product::paginate(10);
    }

    public static function getItem($id)
    {
        $products = DB::table('products')
            ->select('products.name as product_name','image','price','p_categories.name','writer_name','introduction','writer_intro')
            ->leftjoin('p_categories', 'p_categories.id', '=', 'products.category_id')
            ->where('products.id', '=', $id)
            ->get();

        return $products[0];

    }
}
