@extends('layouts.app_admin')

@section('content')
<form action="{{ route('product.new') }}" class="c-form" method="post" enctype="multipart/form-data">
    @csrf

    <label for="name" class="c-form__label">
        タイトル
        <input id="" name="name" type="text" maxlength="100" class="c-input js-count-title-input @error('title') error @enderror" value="" 
        required autocomplete="title" autofocus placeholder="本のタイトル" >
        <div class="c-form__msg">
            <p class="c-form__error">
                {{-- @error('title')
                    {{ $message }}
                @enderror --}}
            </p>
        </div>
    </label>
    <label for="category_id" class="c-form__label">
        カテゴリー
        <select class="c-select @error('category_id') error @enderror" name="category_id" id="category_id">
            <option value="0">未分類</option>
        </select>
        <div class="c-form__msg">
            {{-- @error('category_id')
                <p class="c-form__error">{{ $message }}</p>
            @enderror --}}
        </div>
    </label>
    <label for="category_id" class="c-form__label">
        画像
        <input type="file" name="image" id="">
    </label>
    <label for="introduction" class="c-form__label">
        紹介
        <textarea name="introduction" id="" cols="30" rows="10"></textarea>
    </label>
    <label for="category_id" class="c-form__label">
        価格
        <input name="price" type="text">
    </label>
    <label for="writer_name" class="c-form__label">
        著者
        <input name="writer_name" type="text">
    </label>
    <label for="writer_name" class="c-form__label">
        著者紹介
        <textarea name="writer_intro" id="" cols="30" rows="10"></textarea>
    </label>
    
    <button class="c-form__submit c-btn" type="submit">作成</button>
</form>
@endsection