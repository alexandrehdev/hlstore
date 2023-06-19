@extends('layouts.base')
@include('partials.header')
@vite(['resources/js/scripts/slide-behavior/home-slide.js','resources/css/slide-behavior/home-slide.css'])

@section('content')
    <section class="h-1/3">
        <div class="flex justify-center">
            <img src="{{ asset('img/no-image.png') }}" style="width:70%; height: 500px" alt="">
        </div>
    </section>
    
    <section class="h-1/3 m-56 pt-24">
        <h1 class="text-xl uppercase pb-2 block"> 
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline text-red-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
              </svg>
            Acabou de Sair
        </h1>
        <div class="flex justify-center">
            <div class="swiper mySwiper swiper-home">
                <div class="swiper-wrapper">
                    @if ($products)
                        @foreach ($products as $index => $product)
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
