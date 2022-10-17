@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-10">
            {{-- いつかスライドショー --}}
            <div class="container-2">
                <div class="swiper infinite-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ asset('img/夜行.jpg') }}" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('img/medium.jpg') }}" alt=""></div> 
                        <div class="swiper-slide"><img src="{{ asset('img/invert.jpg') }}" alt=""></div> 
                        <div class="swiper-slide"><img src="{{ asset('img/かがみの弧城.jpg') }}" alt=""></div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="col-9">
            {{-- 新着 --}}
            <div class="topics">
                <div class="event_fream">
                    <h3>新着商品</h3>
                    <img src="{{ asset('img/title_border.jpg') }}">
                    <div class="aaa">
                        @foreach ($products as $product)
                        <div class="event_box_l">
                            <a href="{{ route('user.show',['id'=>$product->id]) }}">
                                {{-- 写真 --}}
                                <img src="{{ asset($product->image) }}" height="180px" width="250px" alt="">
                            </a>
                            <a href="{{ route('user.show',['id'=>$product->id]) }}" class="event_box_link">
                                <div class="event_box">
                                    <img src="{{ asset('img/icon_item.jpg') }}">
                                    <div class="txt_sub">
                                        {{-- 商品名 --}}
                                        {{ $product->name }}
                                        <br>
                                    </div>
                                    <div class="text_main">
                                        {{-- 作家名 --}}
                                        <p>作者: {{ $product->writer_name}}</p>
                                        {{-- 商品値段 --}}
                                        <p>値段: {{ $product->price}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
            {{-- event end --}}

            {{-- オススメの本 --}}
            <div class="book_list">
                <h3>オススメの本</h3>
                {{-- <img src="{{ asset('img/title_border.jpg') }}"> --}}
                <ul>
                    @foreach ($osususme as $os)
                        <li class="first_child">
                            <a href="{{ route('user.show',['id'=>$os->id]) }}" target="_blank">
                                <img src="{{ asset($os->image) }}" alt="">
                                <span class="books_title">{{ $os->name }}</span>
                                <span class="books_writer">{{ $os->writer_name }}</span>
                                <span class="books_price">税込価格: {{ $os->price }}円</span>
                                <span class="books_ather"></span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            {{-- オススメの本終了 --}}
        </div>
        <div class="col-3">
            <div class="twitter">
                <a class="twitter-timeline" data-width="400" data-height="1000" href="https://twitter.com/offwhiteDITA?ref_src=twsrc%5Etfw">Tweets by offwhiteDITA</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </div>  
</div>    
@endsection