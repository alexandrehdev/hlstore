@extends('layouts.base')
@section('title','Publicar')
@vite(['resources/js/scripts/alpine.js'])

@section('meta-data')

<meta property="storeProductRoute" content="{{ route('product.store') }}">
<meta property="csrf-token" content="{{ csrf_token() }}">

@endsection

@section('content')
    @include('partials.header')

    <div x-data="{ firstStep: $persist(true), secondStep: $persist(false)}">
      <div class="py-16 bg-gray-50 overflow-hidden">
        <div x-show="secondStep" class="">
         <button @click="secondStep = false; firstStep = true" class="mb-10  text-gray-800 font-bold py-2  rounded inline-flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 p-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
          </svg>          
          <span>Voltar</span>
        </button>
        </div>
        <div class="container m-auto px-6 space-y-8 text-gray-500 md:px-12" x-show="firstStep" x-transition>
            <div>
                <span class="text-gray-600 text-lg font-semibold">Escolha o Tipo</span>
                <h2 class="mt-4 text-2xl text-gray-900 font-bold md:text-4xl">Qual o tipo de produto que deseja vender ?<br class="lg:block" hidden></h2>
            </div>
            <div class="mt-16 grid border divide-x divide-y rounded-xl overflow-hidden sm:grid-cols-2 lg:divide-y-0 lg:grid-cols-3 xl:grid-cols-4">
                <div class="relative group m-2 bg-white cursor-pointer transition hover:z-[1] hover:shadow-2xl">
                    <div class="relative p-8 space-y-8" @click="firstStep = false; secondStep = true">
                        <img src="https://www.svgrepo.com/show/530225/cell-phone.svg" class="w-14" width="512" height="512" alt="burger illustration">
                        
                        <div class="space-y-2">
                            <h5 class="text-xl text-gray-800 font-medium transition group-hover:text-yellow-600">Produtos</h5>
                            <p class="text-sm text-gray-600">Ex: Computadores, Periféricos, Roupas...</p>
                        </div>
                        <a href="#" class="flex justify-between items-center group-hover:text-yellow-600">
                            <span class="text-sm"></span>
                            <span class="-translate-x-4 opacity-0 text-2xl transition duration-300 group-hover:opacity-100 group-hover:translate-x-0">&RightArrow;</span>
                        </a>
                    </div>
                </div>
                <div class="relative group m-2 bg-white cursor-pointer transition hover:z-[1] hover:shadow-2xl">
                    <div class="relative p-8 space-y-8">
                        <img src="https://www.svgrepo.com/show/530235/transportation.svg" class="w-14" width="512" height="512" alt="burger illustration">
                        
                        <div class="space-y-2">
                            <h5 class="text-xl text-gray-800 font-medium transition group-hover:text-yellow-600">Veiculos</h5>
                            <p class="text-sm text-gray-600">Ex: Carros, Motos, Peças no Geral...</p>
                        </div>
                        <a href="#" class="flex justify-between items-center group-hover:text-yellow-600">
                            <span class="text-sm"></span>
                            <span class="-translate-x-4 opacity-0 text-2xl transition duration-300 group-hover:opacity-100 group-hover:translate-x-0">&RightArrow;</span>
                        </a>
                    </div>
                </div>
                <div class="relative group  m-2 bg-white cursor-pointer transition hover:z-[1] hover:shadow-2xl">
                    <div class="relative p-8 space-y-8">
                        <img src="https://tailus.io/sources/blocks/stacked/preview/images/avatars/package-delivery.png" class="w-10" width="512" height="512" alt="burger illustration">
                        
                        <div class="space-y-2">
                            <h5 class="text-xl text-gray-800 font-medium transition group-hover:text-yellow-600">Digital</h5>
                            <p class="text-sm text-gray-600">Cursos, Sistemas, Serviços.</p>
                        </div>
                        <a href="#" class="flex justify-between items-center group-hover:text-yellow-600">
                            <span class="text-sm"></span>
                            <span class="-translate-x-4 opacity-0 text-2xl transition duration-300 group-hover:opacity-100 group-hover:translate-x-0">&RightArrow;</span>
                        </a>
                    </div>
                </div>
            </div>
      </div>
      
      <div x-show="secondStep">

        
          <div class="grid lg:grid-cols-3 grid-cols-2 place-items-center  items-center gap-4 content-center">
      
            @foreach(range(1,12) as $key => $value)
            
              <div class="max-w-sm p-6 cursor-pointer bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 transition ease-in-out hover:-translate-y-1 hover:scale-110">
                <img src="" alt="">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Need a help in Claim?</h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
              </div>

            @endforeach
        
        </div>
        
      
        
      </div>


  </div>

    
@endsection



