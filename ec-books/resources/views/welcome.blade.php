@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
            <div class="col-10">
                {{-- いつかスライドショー --}}
                <div class="container">
                    <div class="swiper infinite-slider">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ asset('img/夜行.jpg') }}" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('img/medium.jpg') }}" alt=""></div> 
                        <div class="swiper-slide"><img src="{{ asset('img/invert.jpg') }}" alt=""></div> 
                        <div class="swiper-slide"><img src="{{ asset('img/かがみの弧城.jpg') }}" alt=""></div> 
                      </div>
                    </div>
                </div>
                {{-- オススメ --}}
                <div class="topics">
                    <div class="event_fream">
                        <div class="event_box_l">
                            <a href="https://www.amazon.co.jp/%E5%A4%9C%E8%A1%8C-%E6%A3%AE%E8%A6%8B-%E7%99%BB%E7%BE%8E%E5%BD%A6/dp/409386456X">
                                <img src="{{ asset('img/夜行.jpg')}}" height="140" width="215">
                            </a>
                            <a href="https://www.amazon.co.jp/%E5%A4%9C%E8%A1%8C-%E6%A3%AE%E8%A6%8B-%E7%99%BB%E7%BE%8E%E5%BD%A6/dp/409386456X" class="event_box_link">
                                <div class="event_box">
                                    <img src="{{ asset('img/icon_item.jpg') }}">
                                    <div class="txt_sub">
                                        <p>夜行</p>
                                        <br>
                                    </div>
                                    <div class="text_main">
                                        <p>作者:森見</p>
                                        {{-- ￥{{ $item->price}} --}}
                                        <p>値段: 1000</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="event_box_l">
                            <a href="https://www.amazon.co.jp/medium-%E9%9C%8A%E5%AA%92%E6%8E%A2%E5%81%B5%E5%9F%8E%E5%A1%9A%E7%BF%A1%E7%BF%A0-%E7%9B%B8%E6%B2%A2-%E6%B2%99%E5%91%BC/dp/406517094X">
                                <img src="{{ asset('img/medium.jpg')}}" height="140" width="215">
                            </a>
                            <a href="https://www.amazon.co.jp/medium-%E9%9C%8A%E5%AA%92%E6%8E%A2%E5%81%B5%E5%9F%8E%E5%A1%9A%E7%BF%A1%E7%BF%A0-%E7%9B%B8%E6%B2%A2-%E6%B2%99%E5%91%BC/dp/406517094X" class="event_box_link">
                                <div class="event_box">
                                    <img src="{{ asset('img/icon_item.jpg') }}">
                                    <div class="txt_sub">
                                        <p>medium 霊媒探偵城塚翡翠</p>
                                        <br>
                                    </div>
                                    <div class="text_main">
                                        <p>作者:相沢 沙呼 </p>
                                        {{-- ￥{{ $item->price}} --}}
                                        <p>値段: 1870</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="event_box_l">
                            <a href="https://www.amazon.co.jp/medium-%E9%9C%8A%E5%AA%92%E6%8E%A2%E5%81%B5%E5%9F%8E%E5%A1%9A%E7%BF%A1%E7%BF%A0-%E7%9B%B8%E6%B2%A2-%E6%B2%99%E5%91%BC/dp/406517094X">
                                <img src="{{ asset('img/medium.jpg')}}" height="140" width="215">
                            </a>
                            <a href="https://www.amazon.co.jp/medium-%E9%9C%8A%E5%AA%92%E6%8E%A2%E5%81%B5%E5%9F%8E%E5%A1%9A%E7%BF%A1%E7%BF%A0-%E7%9B%B8%E6%B2%A2-%E6%B2%99%E5%91%BC/dp/406517094X" class="event_box_link">
                                <div class="event_box">
                                    <img src="{{ asset('img/icon_item.jpg') }}">
                                    <div class="txt_sub">
                                        <p>medium 霊媒探偵城塚翡翠</p>
                                        <br>
                                    </div>
                                    <div class="text_main">
                                        <p>作者:相沢 沙呼 </p>
                                        {{-- ￥{{ $item->price}} --}}
                                        <p>値段: 1870</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    {{-- 2段目 --}}
                    <div class="event_fream">
                        <div class="event_box_l">
                            <a href="https://www.amazon.co.jp/%E5%A4%9C%E8%A1%8C-%E6%A3%AE%E8%A6%8B-%E7%99%BB%E7%BE%8E%E5%BD%A6/dp/409386456X">
                                <img src="{{ asset('img/夜行.jpg')}}" height="140" width="215">
                            </a>
                            <a href="https://www.amazon.co.jp/%E5%A4%9C%E8%A1%8C-%E6%A3%AE%E8%A6%8B-%E7%99%BB%E7%BE%8E%E5%BD%A6/dp/409386456X" class="event_box_link">
                                <div class="event_box">
                                    <img src="{{ asset('img/icon_item.jpg') }}">
                                    <div class="txt_sub">
                                        <p>夜行</p>
                                        <br>
                                    </div>
                                    <div class="text_main">
                                        <p>作者:森見</p>
                                        {{-- ￥{{ $item->price}} --}}
                                        <p>値段: 1000</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="event_box_l">
                            <a href="https://www.amazon.co.jp/medium-%E9%9C%8A%E5%AA%92%E6%8E%A2%E5%81%B5%E5%9F%8E%E5%A1%9A%E7%BF%A1%E7%BF%A0-%E7%9B%B8%E6%B2%A2-%E6%B2%99%E5%91%BC/dp/406517094X">
                                <img src="{{ asset('img/medium.jpg')}}" height="140" width="215">
                            </a>
                            <a href="https://www.amazon.co.jp/medium-%E9%9C%8A%E5%AA%92%E6%8E%A2%E5%81%B5%E5%9F%8E%E5%A1%9A%E7%BF%A1%E7%BF%A0-%E7%9B%B8%E6%B2%A2-%E6%B2%99%E5%91%BC/dp/406517094X" class="event_box_link">
                                <div class="event_box">
                                    <img src="{{ asset('img/icon_item.jpg') }}">
                                    <div class="txt_sub">
                                        <p>medium 霊媒探偵城塚翡翠</p>
                                        <br>
                                    </div>
                                    <div class="text_main">
                                        <p>作者:相沢 沙呼 </p>
                                        {{-- ￥{{ $item->price}} --}}
                                        <p>値段: 1870</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="event_box_l">
                            <a href="https://www.amazon.co.jp/medium-%E9%9C%8A%E5%AA%92%E6%8E%A2%E5%81%B5%E5%9F%8E%E5%A1%9A%E7%BF%A1%E7%BF%A0-%E7%9B%B8%E6%B2%A2-%E6%B2%99%E5%91%BC/dp/406517094X">
                                <img src="{{ asset('img/medium.jpg')}}" height="140" width="215">
                            </a>
                            <a href="https://www.amazon.co.jp/medium-%E9%9C%8A%E5%AA%92%E6%8E%A2%E5%81%B5%E5%9F%8E%E5%A1%9A%E7%BF%A1%E7%BF%A0-%E7%9B%B8%E6%B2%A2-%E6%B2%99%E5%91%BC/dp/406517094X" class="event_box_link">
                                <div class="event_box">
                                    <img src="{{ asset('img/icon_item.jpg') }}">
                                    <div class="txt_sub">
                                        <p>medium 霊媒探偵城塚翡翠</p>
                                        <br>
                                    </div>
                                    <div class="text_main">
                                        <p>作者:相沢 沙呼 </p>
                                        {{-- ￥{{ $item->price}} --}}
                                        <p>値段: 1870</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                {{-- event end --}}
                <div class="book_list">
                    <h3>オススメの本</h3>
                    <img src="{{ asset('img/title_border.jpg') }}">
                    <ul>
                        <li class="first_child">
                            <a href="https://www.amazon.co.jp/%E3%81%8B%E3%81%8C%E3%81%BF%E3%81%AE%E5%AD%A4%E5%9F%8E-%E8%BE%BB%E6%9D%91-%E6%B7%B1%E6%9C%88/dp/4591153320" target="_blank">
                                <img src="{{ asset('img/かがみの弧城.jpg') }}">
                                <span class="books_title">かがみの弧城</span>
                                <span class="books_writer">辻村　深月</span>
                                <span class="books_price">税込価格 1980円</span>
                                <span class="books_ather"></span>
                            </a>
                        </li>
                        <li class="first_child">
                            <a href="https://www.amazon.co.jp/%E3%81%8B%E3%81%8C%E3%81%BF%E3%81%AE%E5%AD%A4%E5%9F%8E-%E8%BE%BB%E6%9D%91-%E6%B7%B1%E6%9C%88/dp/4591153320" target="_blank">
                                <img src="{{ asset('img/夜行.jpg') }}">
                                <span class="books_title">かがみの弧城</span>
                                <span class="books_writer">辻村　深月</span>
                                <span class="books_price">税込価格 1980円</span>
                                <span class="books_ather"></span>
                            </a>
                        </li>
                    </ul>
                </div>
              </div>
        </div>
    </div>
</div>    
@endsection