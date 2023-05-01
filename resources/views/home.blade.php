@extends('layouts.base')
@include('partials.header')

@section('content')
    <section class="h-1/3">
       
    </section>
    
    <section class="h-1/3 m-10">
        <h1>Acabou de Sair</h1>
        <div class="flex justify-center">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @if ($products)
                        @foreach ($products as $product)
                            <x-product-card :product="$product" />
                        @endforeach
                    @endif
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
@endsection
