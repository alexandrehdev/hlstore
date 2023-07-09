@extends('layouts.base')
@include('partials.header')
@vite(['resources/js/scripts/slide-behavior/home-slide.js','resources/css/slide-behavior/home-slide.css'])

@section('content')
    <section class="h-1/3">
        {{-- <div class="flex justify-center">
            <img src="{{ asset('img/no-image.png') }}" style="width:70%; height: 500px" alt="">
        </div> --}}
    </section>
    
    <section class="h-1/3 m-36 pt-10">
        <h1 class="text-2xl pb-2 block"> 
            
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


    <section class="h-1/3 m-36 pt-48">
        <h1 class="text-2xl pb-2 block"> 
            
            Recomendados !!
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
