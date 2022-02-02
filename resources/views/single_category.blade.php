@extends('layouts.default')
@section('content')



@livewire('single-category-product-list', ['category' => $category, 'products' => $products])

@livewire('shopping-cart')


@stop
