<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
