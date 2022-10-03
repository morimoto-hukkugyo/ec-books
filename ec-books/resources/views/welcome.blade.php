@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="col-10">
                {{-- いつかスライドショー --}}
                <div class="slider">
                    <img src="{{ asset('img/夜行.jpg') }}" height="500" alt="">
                    <img src="{{ asset('img/medium.jpg') }}" height="500" alt=""> 
                    <img src="{{ asset('img/WE11DONE_L.jpg') }}" height="500" alt=""> 
                    <img src="{{ asset('img/balenciaga.jpg') }}"  height="500" alt="">
                    <img src="{{ asset('img/fear-of-god.jpg') }}"  height="500" alt="">
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
                            <img src="{{ asset('img/medium.jpg')}}" height="140" width="215">
                            
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
</div>    
@endsection