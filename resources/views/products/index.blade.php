@extends('layouts.app')

@section('title', 'Product List')

@section('content')
<h1>Product List</h1>
<ul>
    @foreach ($products as $product)
    <li>
        <a href="/products/{{ $product->id }}">
            {{ $product->name }} - ${{ $product->price }}
        </a>
    </li>
    @endforeach
</ul>
@endsection