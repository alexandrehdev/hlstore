@extends('layouts.base')
@section('title','Publicar')
@vite(['resources/js/scripts/alpine.js'])
@section('content')
    @include('partials.header')
    

    <div class="mx-auto max-w-screen-lg bg-blue-500 p-8 text-white md:flex md:items-center md:justify-around md:p-16 lg:rounded-xl">
        <div class="mr-10 mb-10 md:mb-0">
          <h2 class="mb-4 max-w-lg text-3xl font-bold sm:text-4xl">Ola! Qual o tipo do produto que você deseja vender?</h2>
        </div>
      </div>
    

      
        <div class="flex py-20 items-center justify-center" x-data="{ type : '', firstStep : true, secondStep : false }">
            <form method="" action="" >

                <template x-if="firstStep">
                    <x-products.form.choice.choice-type/>
                </template>

                <div x-show="secondStep">
                    <div x-show="type == 'product' ? true : false" x-transition>
                        <x-products.form.type.product-solid />
                    </div>

                    <div x-show="type == 'vehicle' ? true : false" x-transition>
                        <x-products.form.type.vehicle />
                    </div>

                    <div x-show="type == 'digital' ? true : false" x-transition>
                        <x-products.form.type.digital />
                    </div>
                </div>

            

                <div class="group flex w-full cursor-pointer items-center justify-center mt-10 rounded-md bg-indigo-700 mt- px-6 py-2 text-white transition" x-show=firstStep>
                    <button type="button" @click="firstStep = ! firstStep ; secondStep = true" class="group flex w-full items-center justify-center rounded py-1 text-center font-bold"> Continuar </button>
                    <svg class="flex-0 ml-4 h-6 w-6 transition-all group-hover:ml-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </div>
            </div>
        </form>
    </div>

    
@endsection
