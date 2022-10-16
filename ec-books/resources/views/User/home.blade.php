@extends('layouts.app')
@section('content')
    <div class="conteiner">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">{{ __('マイページ') }}
                        <table class="table table-borderless">
                            <thead class="thead-light">
                                <tr>
                                    <th>氏名</th>
                                    <td>{{ Auth::user()->last_name }}{{ Auth::user()->first_name }}</td>
                                </tr>
                                <tr>
                                    <th>フリガナ</th>
                                    <td>{{ Auth::user()->last_name_kana }}{{ Auth::user()->first_name_kana }}</td>
                                </tr>
                                <tr>
                                    <th>郵便番号</th>
                                    <td>{{ Auth::user()->postal_code }}</td>
                                </tr>
                                <tr>
                                    <th>住所</th>
                                    <td>{{ Auth::user()->addres }}</td>
                                </tr>
                                <tr>
                                    <th>電話番号</th>
                                    <td>{{ Auth::user()->telephone_number }}</td>
                                </tr>
                                <tr>
                                    <th>メールアドレス</th>
                                    <td>{{ Auth::user()->email }}</td>
                                </tr>
                            </thead>
                        </table>
                        <div class="edit">
                            <a href="{{route('user.edit',['id=>$user->id']) }}" class="btn btn-success">編集</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection