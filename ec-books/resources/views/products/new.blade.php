@extends('layouts.app_admin')

@section('content')
<form action="{{ route('product.new') }}" id="l-adminForm" class="" method="post" enctype="multipart/form-data">
    @csrf

    <label for="name" class="c-form__label">
        タイトル
        <input id="" name="name" type="text" maxlength="100" class="c-form__input js-count-title-input 
        @error('title') error @enderror" value="" required autocomplete="title" autofocus placeholder="本のタイトル" >
        <div class="c-form__msg">
            <p class="c-form__error">
                @error('title')
                    {{ $message }}
                @enderror
            </p>
        </div>
    </label>
    <label for="category_id" class="c-form__label">
        カテゴリー
        <select class="c-form__input @error('category_id') error @enderror" name="category_id" id="category_id">
            @foreach ($categories as $key => $val)
                <option value="{{ $val->id }}">{{ $val->name }}</option>
            @endforeach
        </select>
        <div class="c-form__msg">
            @error('category_id')
                <p class="c-form__error">{{ $message }}</p>
            @enderror
        </div>
    </label>
    <label for="category_id" class="c-form__label">
        画像
        <input type="file" name="image" id="">
    </label>
    <label for="introduction" class="c-form__label">
        紹介
        <textarea name="introduction" id="" cols="30" rows="10" class="c-form__textarea"></textarea>
    </label>
    <label for="category_id" class="c-form__label">
        価格
        <input name="price" type="text" class="c-form__input">
    </label>
    <label for="writer_name" class="c-form__label">
        著者
        <input name="writer_name" type="text" class="c-form__input">
    </label>
    <label for="writer_name" class="c-form__label">
        著者紹介
        <textarea name="writer_intro" id="" cols="30" rows="10" class="c-form__textarea"></textarea>
    </label>
    
    <button class="c-form__submit" type="submit">作成</button>
</form>
@endsection