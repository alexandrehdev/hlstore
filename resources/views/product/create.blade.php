@extends('layouts.base')
@section('title','Publicar')

@section('meta-data')

<meta property="storeProductRoute" content="{{ route('product.store') }}">
<meta property="csrf-token" content="{{ csrf_token() }}">

@endsection

@section('content')
    @include('partials.header')

    <script src="{{ asset('data/typeProducts.js') }}"></script>

    <div x-data="{ type:'', subtype:'', firstStep: $persist(true), secondStep: $persist(false), thirdStep : $persist(false)}">
      <div class="py-8 overflow-hidden">
        <div x-show="secondStep || thirdStep" class="">
         <button @click="thirdStep = false; secondStep = false; firstStep = true" class="mb-10  text-gray-800 font-bold py-2  rounded inline-flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 p-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
          </svg>          
          <span>Voltar</span>
        </button>
        </div>


        <div class="container m-auto px-6 space-y-8 text-gray-500 md:px-12" x-show="firstStep" x-transition.duration.500ms>
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
      
      <div x-show="secondStep" x-transition.duration.500ms>

          <div class="grid lg:grid-cols-3  grid-cols-1 place-items-center items-center gap-2 content-center" x-data>
            
            <template x-for="product in typeProducts">
                <div class="w-96 p-6 cursor-pointer bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 transition ease-in-out hover:-translate-y-1 hover:scale-110" @click=" $dispatch('getsubtype',{ name : product.title }) ; secondStep = false; thirdStep = true;">
                    <img src="" alt="">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                            <img x-bind:src="product.url" class="h-10 w-10" alt="">
                        </h5>
                    </a>
                    <p class="mb-3 font-bold text-lg text-gray-500 dark:text-gray-400" x-text="product.title"></p>
                  </div>
    
            </template> 
        
        </div>
        
      </div>


      <div x-show="thirdStep" x-transition x-data>

        <div class="container m-auto lg:w-1/2 p-2" @getsubtitle.window="console.log($event.detail.name)">
            <form action="{{ route('product.create')  }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="space-y-12">
                  <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Detalhes do Produto</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Essas informações será mostrada publicamente, então tenha cuidado com o que digitar.</p>
              
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6" >
                      <div class="sm:col-span-4">
                        <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nome (obrigatório)</label>
                        <div class="mt-2">
                          <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            {{-- <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">workcation.com/</span> --}}
                            <input type="text" name="name" id="username" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Produto">
                          </div>
                        </div>
                      </div>
              
                      <div class="col-span-full mb-10">
                        <label for="about" class="block mb-4 text-sm font-medium leading-6 text-gray-900">Decrição (obrigatório)</label>
                        <div class="mt-2" id="editor">
                          <textarea placeholder="Descrição" id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                        <p class="mt-3 text-sm leading-6 text-gray-600">Faça uma descrição do seu produto.</p>
                      </div>
              
                      <div class="col-span-full mt-24">
                        <label class="text-sm mb-24 font-medium leading-6 text-gray-900">Imagens (obrigatório)</label>
                        <div class="dropzone-preview"></div>
                        <div class="dropzone upload-zone dz-preview dz-file-preview" 
                            data-url="{{ route('product.store') }}"
                            data-accepted-files="image/*"
                            data-csrf-token="{{ csrf_token() }}"
                            id="dropzone">
                            <img data-dz-thumbnail />
                            <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
                            
                          <div class="dz-message" data-dz-message>
                            <span class="dz-message-text">Arraste e solte arquivos</span>
                            <span class="dz-message-or">ou</span>
                            <button class="btn btn-primary">SELECIONE</button>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>


                 @livewire('product-form')
              
                </div>
              
                <div class="mt-6 flex items-center justify-end gap-x-6">
                  <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancelar</button>
                  <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Criar</button>
                </div>
              </form>
        </div>
       

      </div>


   </div>

    
@endsection




