@extends('layouts.base')
@include('partials.header')

@section('content')
    <section class="h-1/3">
        <div class="flex justify-center">
            <img src="{{ asset('img/no-image.png') }}" style="width:70%; height: 500px" alt="">
        </div>
    </section>
    
    <section class="h-1/3 m-56 pt-24">
        <h2 class="text-base uppercase pb-2">Acabou de Sair</h2>
        <div class="flex justify-center">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @if ($products)
                        @foreach ($products as $index => $product)
                            @if($index <= 5)
                                <x-product-card :product="$product" />
                            @endif
                        @endforeach
                    @endif
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
@endsection
