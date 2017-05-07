@extends('layouts.admin')
@section('page-header','檢視商品')

@section('page-content')

@if (isset($product))
{{ $product->id }}
{{ $product->catno }}
{{ $product->name }}
{{ $product->price }}
{{ $product->cost }}
{{ $product->stock }}
{{ $product->save }}
{{ $product->unit }}
{{ $product->note }}
@endif

@endsection
