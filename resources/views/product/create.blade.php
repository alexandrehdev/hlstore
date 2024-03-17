@extends('layouts.base')
@section('title','Publicar')

@section('meta-data')

<meta property="storeProductRoute" content="{{ route('product.store') }}">
<meta property="csrf-token" content="{{ csrf_token() }}">

@endsection

@section('content')
    @include('partials.header')

    <div x-data="{ subtype:'', firstStep: $persist(true), secondStep: $persist(false), thirdStep : $persist(false)}">
      <div class="py-8 overflow-hidden">
        <div x-show="secondStep || thirdStep" class="">
         <button @click="thirdStep = false; secondStep = false; firstStep = true" class="mb-10  text-gray-800 font-bold py-2  rounded inline-flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 p-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
          </svg>          
          <span>Voltar</span>
        </button>
        </div>


        
     
        <div x-show="secondStep" class="grid lg:grid-cols-3  grid-cols-1 place-items-center items-center gap-2 content-center" x-data>
            
              @foreach (getProductSubtypes() as $subtype)
                <x-products.subtype.card :subtype=$subtype />
              @endforeach
        
        </div>


      <div x-show="thirdStep" @selectedsubtype.window="thirdStep=true; secondStep=false; firstStep=false">

        <div class="container m-auto lg:w-1/2 p-2">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="hidden" x-model="subtype" name="subtype">

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

                  <div x-data="{ typeform : $persist('') }">
                    <div @selectedsubtype.window="typeform = $event.detail.name">
                      <x-products.form.product-form ::typeform="typeform"/>
                    </div>
                  </div>
                
              
                </div>
              
                <div class="mt-6 flex items-center justify-start gap-x-6">
                  <button type="button" class="text-base font-semibold leading-8 text-gray-900">Cancelar</button>
                  <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Criar</button>
                </div>
              </form>
        </div>
       

      </div>


   </div>

    
@endsection




