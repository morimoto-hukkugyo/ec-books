@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('新規作成画面') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        {{-- 名前 --}}
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('名前') }}</label>
                            {{-- 苗字 --}}
                            <div class="col-md-4">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" placeholder="山田" required autocomplete="first_name" autofocus>
                            </div>
                            {{-- 名前 --}}
                            <div class="col-md-4">
                                <input id="last_name"  type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" placeholder="太郎" required autocomplete="last_name" autofocus>
                            </div>
                        </div>

                        {{-- フリガナ --}}
                        <div class="row mb-3">
                            <label for="furigana" class="col-md-3 col-form-label text-md-right">{{ __('フリガナ') }}</label>
                            {{-- 苗字カナ --}}
                            <div class="col-md-4">
                                <input id="first_name_kana" type="text" class="form-control @error('first_name_kana') is-invalid @enderror" name="first_name_kana" value="{{ old('first_name_kana') }}" placeholder="ヤマダ" required autocomplete="first_name_kana" autofocus>
                            </div>
                            {{-- 名前カナ --}}
                            <div class="col-md-4">
                                <input id="last_name_kana" type="text" class="form-control @error('last_name_kana') is-invalid @enderror" name="last_name_kana" value="{{ old('last_name_kana') }}" placeholder="タロウ" required autocomplete="last_name_kana" autofocus>  
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="postal_code" class="col-md-3 col-form-label text-md-right">{{ __('郵便番号')}}</label>
                            {{-- 郵便番号 --}}
                            <div class="col-md-3">
                                <input id="postal_code" type="text" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" value="{{ old('postal_code') }}" placeholder="0000000" required autocomplete="postal_code" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="addres" class="col-md-3 col-form-label text-md-right">{{ __('住所')}}</label>
                            {{-- 住所 --}}
                            <div class="col-md-6">
                                <input id="addres" type="text" class="form-control @error('addres') is-invalid @enderror" name="addres" value="{{ old('addres') }}" placeholder="東京都中央区銀座６丁目１０−１" required autocomplete="addres" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="telephone_number" class="col-md-3 col-form-label text-md-right">{{__('電話番号')}}</label>
                            <div class="col-md-3">
                                <input id="telephone_number" type="text" class="form-control @error('telephone_number') is-invalid @enderror" name="telephone_number" value="{{ old('telephone_number')}}" placeholder="09012345678" required autocomplete="telephone_number" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('メールアドレス') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="sample@com" required autocomplete="email">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('パスワード') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('再確認') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('新規作成') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
