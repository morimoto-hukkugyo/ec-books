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
}
