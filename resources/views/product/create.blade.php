@extends('layouts.base')
@section('title', 'Publicar')

@section('meta-data')

    <meta property="storeProductRoute" content="">
    <meta property="csrf-token" content="{{ csrf_token() }}">

@endsection

@section('content')
    @include('partials.header')

    <form action="{{ route('product.details') }}" id="typeForm" method="POST">
        @csrf
        <div x-data="{ data: '', type : true, product: false, vehicle: false, digital : false }">
            <div class="py-8 overflow-hidden">
                <div x-show="product || vehicle || digital" @click="type = true; product = false; vehicle = false; digital = false">
                    <button type="button" class="inline-flex items-center py-2 mb-10 font-bold text-gray-800 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="p-2 w-9 h-9">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                        </svg>
                        <span>Voltar</span>
                    </button>
                </div>


                <div x-show="type" x-transition class="container px-6 m-auto space-y-8 text-gray-500 md:px-12">
                    <div>
                        <span class="text-lg font-semibold text-gray-600">Escolha o Tipo</span>
                        <h2 class="mt-4 text-2xl font-bold text-gray-900 md:text-4xl">Qual o tipo de produto que deseja
                            vender ?<br class="lg:block" hidden></h2>
                    </div>

                    <div class="grid mt-16 overflow-hidden border divide-x divide-y rounded-xl sm:grid-cols-2 lg:divide-y-0 lg:grid-cols-3 xl:grid-cols-4"
                        x-data="{ data: '' }">
                        <div class="relative group m-2 bg-white cursor-pointer transition hover:z-[1] hover:shadow-2xl"
                            @click="product = true; vehicle = false; type = false; document.querySelector('#type-input').value = 'produto'">
                            <div class="relative p-8 space-y-8">
                                <img src="https://www.svgrepo.com/show/530225/cell-phone.svg" class="w-14" width="512"
                                    height="512" alt="burger illustration">

                                <div class="space-y-2">
                                    <h5 class="text-xl font-medium text-gray-800 transition group-hover:text-yellow-600">
                                        Produtos</h5>
                                    <p class="text-sm text-gray-600">Ex: Computadores, Periféricos, Roupas...</p>
                                </div>
                                <a href="#" class="flex items-center justify-between group-hover:text-yellow-600">
                                    <span class="text-sm"></span>
                                    <span
                                        class="text-2xl transition duration-300 -translate-x-4 opacity-0 group-hover:opacity-100 group-hover:translate-x-0">&RightArrow;</span>
                                </a>
                            </div>
                        </div>
                        <div class="relative group m-2 bg-white cursor-pointer transition hover:z-[1] hover:shadow-2xl"
                            @click="product = false; vehicle = true; digital = false; type = false; document.querySelector('#type-input').value = 'veiculos'">
                            <div class="relative p-8 space-y-8">
                                <img src="https://www.svgrepo.com/show/530235/transportation.svg" class="w-14"
                                    width="512" height="512" alt="burger illustration">

                                <div class="space-y-2">
                                    <h5 class="text-xl font-medium text-gray-800 transition group-hover:text-yellow-600">
                                        Veiculos</h5>
                                    <p class="text-sm text-gray-600">Ex: Carros, Motos, Peças no Geral...</p>
                                </div>
                                <a href="#" class="flex items-center justify-between group-hover:text-yellow-600">
                                    <span class="text-sm"></span>
                                    <span
                                        class="text-2xl transition duration-300 -translate-x-4 opacity-0 group-hover:opacity-100 group-hover:translate-x-0">&RightArrow;</span>
                                </a>
                            </div>
                        </div>
                        <div class="relative group  m-2 bg-white cursor-pointer transition hover:z-[1] hover:shadow-2xl"
                            @click="product = false; vehicle = false; digital = true; type = false; document.querySelector('#type-input').value = 'digital'">
                            <div class="relative p-8 space-y-8">
                                <img src="https://tailus.io/sources/blocks/stacked/preview/images/avatars/package-delivery.png"
                                    class="w-10" width="512" height="512" alt="burger illustration">

                                <div class="space-y-2">
                                    <h5 class="text-xl font-medium text-gray-800 transition group-hover:text-yellow-600">
                                        Digital</h5>
                                    <p class="text-sm text-gray-600">Cursos, Sistemas, Serviços.</p>
                                </div>
                                <a href="#" class="flex items-center justify-between group-hover:text-yellow-600">
                                    <span class="text-sm"></span>
                                    <span
                                        class="text-2xl transition duration-300 -translate-x-4 opacity-0 group-hover:opacity-100 group-hover:translate-x-0">&RightArrow;</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>



                <div x-show="product" x-transition
                    class="grid items-center content-center grid-cols-1 gap-2 lg:grid-cols-3 place-items-center">
                    @foreach (getSubtypes() as $subtype)
                        <div class="p-6 transition ease-in-out bg-white border border-gray-200 rounded-lg shadow cursor-pointer w-96 dark:bg-gray-800 dark:border-gray-700 hover:-translate-y-1 hover:scale-110" 
                        @click="document.querySelector('#subtype-input').value = '{{ $subtype['name'] }}' ; document.querySelector('#typeForm').submit()">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                    <img src="{{ $subtype['url'] }}" class="w-10 h-10" alt="">
                                </h5>
                            </a>
                            <p class="mb-3 text-lg font-bold text-gray-500 dark:text-gray-400">{{ $subtype['title'] }}</p>
                        </div>
                    @endforeach
                </div>


                <div x-show="vehicle">
                    <h1>Veiculo</h1>
                </div>

                <div x-show="digital">
                    <h1>Digital</h1>
                </div>

            </div>
            <input type="hidden" id="type-input" name="type">
            <input type="hidden" id="subtype-input" name="subtype">
    </form>


@endsection
