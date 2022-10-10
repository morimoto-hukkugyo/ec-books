@extends('layouts.app')
@section('content')
<div class="conteiner">
    <div class="row">
        <div class="col-12">
            <div class="row mx-auto mt-3">
                @foreach ($products as $product)
                    <div class="col-4">
                        <img src="{{ Storage::url($product->image) }}" height="400px" width="90%">
                        <div class="book-title">
                            {{ $product->name}}
                        </div>
                    </div>
                    
                @endforeach
            </div>
            
        </div>
    </div>
</div>
@endsection