@extends('default')

@section('appbar')
    @include('product.components.appbar--index')
@endsection

@section('content')
    @include('product.components.productCard--show')
@endsection