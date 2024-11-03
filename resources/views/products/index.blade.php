@extends('layouts.main')
@section('title', "D'rio | Dashboard")

@section('content')
    <div class="grid grid-cols-2 gap-4 lg:grid-cols-4 ">
        @foreach ($products as $product)
            <x-product.product-item :product="$product" />
        @endforeach
    </div>
@endsection
