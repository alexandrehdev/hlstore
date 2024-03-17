@extends('layouts.base')
@section('title','Selecionar Tipo')

@section('content')
    @include('partials.header')


    <div class="container m-auto px-6 space-y-8 text-gray-500 md:px-12">
        <div>
            <span class="text-gray-600 text-lg font-semibold">Escolha o Tipo</span>
            <h2 class="mt-4 text-2xl text-gray-900 font-bold md:text-4xl">Qual o tipo de produto que deseja vender ?<br class="lg:block" hidden></h2>
        </div>
        <form action="{{ route('handleType') }}" method="POST" id="selectType">
            @csrf
            <div class="mt-16 grid border divide-x divide-y rounded-xl overflow-hidden sm:grid-cols-2 lg:divide-y-0 lg:grid-cols-3 xl:grid-cols-4" x-data="{ data : '' }">
                <div class="relative group m-2 bg-white cursor-pointer transition hover:z-[1] hover:shadow-2xl" @click="document.querySelector('#type').value='products'; document.querySelector('#selectType').submit()">
                    <div class="relative p-8 space-y-8">
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
                <div class="relative group m-2 bg-white cursor-pointer transition hover:z-[1] hover:shadow-2xl" @click="document.querySelector('#type').value='vehicles'; document.querySelector('#selectType').submit()">
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
                <div class="relative group  m-2 bg-white cursor-pointer transition hover:z-[1] hover:shadow-2xl" @click="document.querySelector('#type').value='digital'; document.querySelector('#selectType').submit()">
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
            <input type="hidden" id="type" name="type" />
        </form>
        
  </div>
  

@endsection    