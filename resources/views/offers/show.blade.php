@extends('layouts.base')

@include('partials.header')


@section('content')
    <div class="flex justify-center items-center h-full w-full">
        <div class="flex justify-center mt-96 w-2/3">
            <div class="grid grid-cols-4 gap-6 md:grid-cols-6">
                @foreach ($products as $index => $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>
        </div>

    </div>
@endsection
