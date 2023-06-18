@extends('layouts.base')

@include('partials.header')
@vite(['resources/js/scripts/slide-behavior/show-slide.js', 'resources/css/slide-behavior/show-slide.css'])

@section('content')
    <div class="flex justify-center h-full w-screen items-center">
      <div class="flex justify-around w-1/2 h-auto">
        <div class="items-center h-full">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="{{ Storage::url($product->file) }}"  style="height: 400px; width: 600px" alt="">
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="flex w-1/2 pl-2">
           <div class="p-4">
              <h1 class="text-4xl font-bold">{{ $product->name }}</h1>

              <span>Por <strong class="text-indigo-600 cursor-pointer"> {{ $product->user->name }} </strong></span>

              <div class="mt-16 w-28 p-2 rounded-xl bg-gray-200">
                <span class="text-indigo-500 font-extrabold text-base">R$</span>
                <span class="text-indigo-500 text-3xl font-extrabold">
                   {{ number_format(floatval($product->price),2, ',' , '.') }}
                </span>
              </div>

              <div class="mt-12">
                <p class="text-lg">
                  {{ $product->description }}
                </p>
              </div>
              
              <div class="flex py-4 space-x-4" x-data="{ count: 1 }">
                <div class="flex justify-evenly w-48">
                    <div>
                      <button type="button" x-on:click="count--;if(count < 1){count = 1;}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                        </svg>
                        
                        <span class="sr-only">Icon description</span>
                      </button>
                    </div>
                    
                    <div>
                      <div class="bg-gray-400 rounded-md">
                        <input type="text" id="quantityProduct" x-model="count" x-mask="999999" class="bg-gray-50 border w-20 text-center border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      </div>
                    </div>

                    <div>
                      <button type="button" x-on:click="count++" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>                        
                        <span class="sr-only">Icon description</span>
                      </button>
                    </div>
                </div>
      
                <button type="button" class="h-14 px-6 py-2 font-semibold rounded-xl bg-indigo-600 hover:bg-indigo-500 block text-white">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                  </svg>
                  
                   Carrinho
                </button>
              </div>
           </div>
        </div>


      </div>
    </div>
@endsection


