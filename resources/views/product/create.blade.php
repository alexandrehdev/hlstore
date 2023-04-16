@extends('layouts.base')

@section('content')
    @include('partials.header')
    @include('errors.request-main')
    <div class=" bg-indigo-500 h-1/4">
        <div class="flex justify-center top-28 relative z-50  p-0 items-center">
            <h1 class="text-white uppercase text-4xl">Olá, o que gostaria de anunciar ?</h1>
        </div>
    </div>

    <div class="flex justify-center items-center h-screen">
      <div>
        <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
          @csrf

            <div class="mb-6">
                <label for="user" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usuário</label>
                <input type="user" id="user"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    disabled value="{{ Illuminate\Support\Facades\Auth::user()->name }}">
            </div>

            <div class="mb-6">
                <label for="product_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome do Produto</label>
                <input type="text" id="product_name" name="name"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    autocomplete="off" placeholder="Ex: Celular">
            </div>

            <div class="mb-6">
                <label for="countries"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoria</label>
                <select id="countries" name="category"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Escolha a Categoria</option>
                    <option value="clothes">Roupas</option>
                    <option value="eletronic">Eletronicos</option>
                    <option value="vehicle">Veiculos</option>
                    <option value="properties">Imóveis</option>
                </select>
            </div>

            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                    
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    id="file_input" name="file" type="file">
            </div>

            <div class="mb-6">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição</label>
                <textarea id="message" name="description" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Escreva uma descrição do produto aqui."></textarea>
            </div>
            
            <input type="hidden" name="user_id" value="{{ getLoggedUser()->id }}">

            <div class="mb-6 flex justify-center">
                <button type="submit"class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  Publicar   
                </button>
            </div>
        </form>
      </div>
    </div>
@endsection
