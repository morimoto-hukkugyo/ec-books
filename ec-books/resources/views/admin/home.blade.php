@extends('layouts.app_admin')

@section('content')
<section class="l-adminHome">
    <div class="c-container p-adminHome">
        <h2 class="c-container__tit">管理者ホーム画面</h2>
        <div class="p-adminHome__body">
            <form class="c-sidebar">
                <label class="c-sidebar__item" for="search-text">
                    <p>フリーワード</p>
                    <input id="search-text" type="text" class="c-form__input">
                </label>
                <button type="submit">検索</button>
            </form>
            <div class="p-productList">
                <div class="p-productList__head">
                    <div class="p-productList__img">
                        <img src="" alt="" class="">
                    </div>
                    <ul class="c-menu">
                        <li class="c-menu__item u-bgColor__add">
                            <a class="c-menu__text" href="{{ route('product.new') }}">商品追加</a>
                        </li>
                        <li class="c-menu__item u-bgColor__edit">編集</li>
                        <li class="c-menu__item u-bgColor__remove">削除</li>
                    </ul>
                </div>
                <ul class="p-productList__body">
                    <li class="p-productList__colName">
                        <p class="p-productList__col">
                            商品ID
                        </p>
                        <p class="p-productList__col">
                            商品名
                        </p>
                        <p class="p-productList__col">
                            作家
                        </p>
                        <p class="p-productList__col">
                            値段
                        </p>
                    </li>
                    @foreach($products as $key => $val)
                        <li class="p-productList__item">
                            <p class="p-productList__col">
                                {{ $val->id }}
                            </p>
                            <p class="p-productList__col">
                                {{ $val->name }}
                            </p>
                            <p class="p-productList__col">
                                {{ $val->writer_name }}
                            </p>
                            <p class="p-productList__col">
                                {{ $val->price }}
                            </p>
                            <a class="p-productList__btn" href="{{ route('product.edit', $val->id) }}">
                                編集
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
