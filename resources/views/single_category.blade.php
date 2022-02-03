@extends('layouts.default')
@section('content')



@livewire('single-category-product-list', ['category' => $category])




@livewire('shopping-cart')


@stop
