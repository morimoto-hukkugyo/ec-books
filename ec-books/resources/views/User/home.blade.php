@extends('layouts.app')
@section('content')
<h1>マイページ</h1>
{{ Auth::user()->last_name }}
{{ Auth::user()->first_name }}
{{ Auth::user()->last_name_kana }}
{{ Auth::user()->first_name_kana }}
{{ Auth::user()->postal_code }}
{{ Auth::user()->addres }}
{{ Auth::user()->telephone_number }}
{{ Auth::user()->email }}
@endsection