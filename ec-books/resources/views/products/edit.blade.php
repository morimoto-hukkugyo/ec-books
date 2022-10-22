@extends('layouts.app_admin')

@section('content')
<form action="{{ route('product.edit', $product->id) }}" id="l-adminForm" method="post" class="" enctype="multipart/form-data">
    @method('PATCH')
    @csrf

    <label for="name" class="c-form__label">
        タイトル
        <input id="" name="name" type="text" maxlength="100" class="c-form__input js-count-title-input 
        @error('title') error @enderror" value="{{ $product->name }}" required autocomplete="title" autofocus placeholder="本のタイトル" >
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
                <option value="{{ $val->id }}" @if((int)$product->category_id === $val->id) selected @endif >{{ $val->name }}</option>
            @endforeach
        </select>
        <div class="c-form__msg">
            @error('category_id')
                <p class="c-form__error">{{ $message }}</p>
            @enderror
        </div>
    </label>
    <label for="image" class="c-form__label">
        <p>画像</p>
        @if (!empty($product->image))
            <img class="c-form__image" src="{{ asset($product->image) }}" alt="">
        @endif
        <input type="file" name="image" id="image">
    </label>
    <label for="introduction" class="c-form__label">
        紹介
        <textarea name="introduction" id="" cols="30" rows="10" class="c-form__textarea">{{ $product->introduction }}</textarea>
    </label>
    <label for="price" class="c-form__label">
        価格
        <input name="price" type="text" class="c-form__input" value="{{ $product->price }}">
    </label>
    <label for="writer_name" class="c-form__label">
        著者
        <input name="writer_name" type="text" class="c-form__input" value="{{ $product->writer_name }}">
    </label>
    <label for="writer_intro" class="c-form__label">
        著者紹介
        <textarea name="writer_intro" id="" cols="30" rows="10" class="c-form__textarea">{{ $product->writer_intro }}</textarea>
    </label>
    
    <button class="c-form__submit" type="submit">更新</button>
</form>
@endsection