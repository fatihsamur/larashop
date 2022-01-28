@extends('layouts.default')
@section('content')
@forelse($categories as $category)

<h1>{{$category->name}}</h1>

@empty
<h1> No available category </h1>
@endforelse
@stop
