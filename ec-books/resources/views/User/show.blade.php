@extends('layouts.app')
@section('content')
<div class="conteiner">
    <div class="row">
        <div class="col-5">
            {{-- 詳細写真表示 --}}
            <img src="{{ Storage::url($product->image) }}" height="435px">           
        </div>
        <div class="col-7">
            {{-- 商品詳細 --}}
            <div class="book-title-block">
                <div class="book-title">
                    {{ $product->name}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection