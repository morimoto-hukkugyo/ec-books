@extends('layouts.app')
@section('content')
<div class="conteiner">
    <div class="row">
        <div class="col-3">
            {{-- 詳細写真表示 --}}
            <div class="book_image">
                <img src="{{ asset($product->image) }}" height="435px" alt="">
            </div>        
        </div>
        <div class="col-7">
            {{-- 商品詳細 --}}
            <div class="book-title-block">
                <div class="book-title">
                    {{ $product->product_name}}
                </div>
                <div class="writer_name">
                    著者: {{ $product->writer_name }}
                </div>
                <div class="categoriy">
                    カテゴリー:{{ $product->name}}
                </div>
                <div class="writer_price">
                    値段: {{ $product->price}}円
                </div>
                <div class="book_introduction">
                    <h4>[商品詳細]</h2>
                    {{ $product->introduction }}
                </div>
                <div class="book_writer_introduction">
                    <h4>[著者紹介]</h2>
                    {{ $product->writer_intro }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection