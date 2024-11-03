@extends('layouts.main')
@section('title', "D'rio | Dashboard")

@section('content')
    <div class="grid grid-cols-2 gap-4 mb-4 lg:grid-cols-4">
        <x-cashier.product-card />
        <x-cashier.product-card />
        <x-cashier.product-card />
        <x-cashier.product-card />
    </div>
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"></div>
    <div class="grid grid-cols-2 gap-4">
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
    </div>
@endsection
