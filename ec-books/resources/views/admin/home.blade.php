@extends('layouts.app_admin')

@section('content')
<section class="l-adminHome">
    <div class="c-container p-adminHome">
        <h2 class="c-container__tit">管理者ホーム画面</h2>
        <div class="p-adminHome__body">
            <form action="{{ route('admin.home') }}" class="c-sidebar" method="GET">
                @csrf
                <label class="c-sidebar__item" for="search_text">
                    <p>フリーワード</p>
                    <input id="search_text" name="keyword" type="text" class="c-form__input" value="{{ $keyword }}">
                </label>
                <label class="c-sidebar__item" for="search_id">
                    <p>商品ID</p>
                    <input id="search_id" name="search_id" type="text" class="c-form__input" value="{{ $search_id }}">
                </label>
                <button class="c-sidebar__btn" type="submit">検索</button>
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
                <div class="p-productList__body">
                    <ul class="p-productList__list">
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
                                <a class="p-productList__btn u-btn__edit" href="{{ route('product.edit', $val->id) }}">
                                    編集
                                </a>
                                <form action="{{ route('product.delete',$val->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="p-productList__btn u-btn__remove" onclick='return confirm("商品ID{{ $val->id }}を削除しますか？");'>削除</button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                    {{ $products->appends(request()->query())->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
