@extends('layouts.app')
@section('content')
<div class="conteiner">
<form method="POST" action="{{ route('user.update',Auth::user()->id) }}">@csrf
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('編集画面') }}
                    <div class="card-body">
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('名前') }}</label>
                            <div class="col-md-4">
                                <input id="last_name" type="text" class="form-control @error('name') is-invalid @enderror" name="last_name" value="{{ old('last_name', Auth::user()->last_name)  }}" required autocomplete="name" autofocus>
                            </div>
                            <div class="col-md-4">
                                <input id="first_name" type="text" class="form-control @error('name') is-invalid @enderror" name="first_name" value="{{ old('first_name', Auth::user()->first_name)  }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('フリガナ') }}</label> 
                            <div class="col-md-4">
                                <input id="last_name_kana" type="text" class="form-control @error('name') is-invalid @enderror" name="last_name_kana" value="{{ Auth::user()->last_name_kana }}" required autocomplete="last_name_kana" autofocus>
                            </div>
                            <div class="col-md-4">
                                <input id="first_name_kana" type="text" class="form-control @error('name') is-invalid @enderror" name="first_name_kana" value="{{ Auth::user()->first_name_kana  }}" required autocomplete="first_name_kana" autofocus>
                            </div>      
                        </div>

                        <div class="row mb-3">
                            <label for="postal_code" class="col-md-4 col-form-label text-md-end">{{ __('郵便番号') }}</label>
                            <div class="col-md-4">
                                <input id="postal_code" type="text" class="form-control @error('name') is-invalid @enderror" name="postal_code" value="{{ Auth::user()->postal_code  }}" required autocomplete="postal_code" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('住所') }}</label>
                            <div class="col-md-4">
                                <input id="address" type="text" class="form-control @error('name') is-invalid @enderror" name="address" value="{{ Auth::user()->addres  }}" required autocomplete="address" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="telephone_number" class="col-md-4 col-form-label text-md-end">{{ __('電話番号') }}</label>
                            <div class="col-md-4">
                                <input id="telephone_number" type="text" class="form-control @error('name') is-invalid @enderror" name="telephone_number" value="{{ Auth::user()->telephone_number  }}" required autocomplete="telephone_number" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('メールアドレス') }}</label>
                            <div class="col-md-4">
                                <input id="email" type="text" class="form-control @error('name') is-invalid @enderror" name="email" value="{{ Auth::user()->email  }}" required autocomplete="email" autofocus>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger">更新</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
@endsection