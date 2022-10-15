@extends('layouts.app')
@section('content')
<div class="conteiner">
    <div class="row">
        {{-- <div class="sidebar">
            <h1>サイドバー</h1>
        </div> --}}
        @foreach ($products as $product)
            {{-- <div class="user-index"> --}}
                <a href="{{ route('user.show',['id'=>$product->id]) }}">
                <div class="user-index">
                    <div class="col-2">
                        {{-- 詳細写真表示 --}}
                        <div class="book_image">
                            <img src="{{ Storage::url($product->image) }}" height="200px"> 
                        </div>        
                    </div>
                    <div class="book-index">
                        <div class="col-8">
                            <div class="book-title">
                                {{ $product->name}}
                            </div>
                            <div class="writername">
                                著者: {{ $product->writer_name }}
                            </div>
                            <div class="writerprice">
                                値段: {{ $product->price}}円
                            </div>
                            {{-- <div class="book_introduction">
                                <h4>[商品詳細]</h2>
                                {{ $product->introduction }}
                            </div> --}}
                            <div class="book_write_introduction">
                                <h4>[著者紹介]</h2>
                                {{ $product->writer_intro }}
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            {{-- </div> --}}
        @endforeach
    </div>
</div>
@endsection