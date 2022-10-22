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
    public static function getItemList($keyword, $search_id)
    {
        return Product::when( $keyword, function($query) use ($keyword) {
                                return $query->where('name', 'like', "%$keyword%");
                            })
                            ->when( $search_id, function($query) use ($search_id) {
                                return $query->where('id', 'like', "%$search_id%");
                            })
                            ->paginate(10);
    }
}
