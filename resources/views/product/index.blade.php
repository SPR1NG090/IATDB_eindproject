@extends('default')

@section('appbar')
    @include('product.components.appbar--index')
@endsection

@section('content') 
    <main class="homepage">

        @include('product.components.checkbox--index')
        <ul class="u-grid-12 u-grid-gap-2">
            @foreach($product as $product)
                @include('product.components.productCard--index')
            @endforeach
        </ul>
    </main>
    
@endsection