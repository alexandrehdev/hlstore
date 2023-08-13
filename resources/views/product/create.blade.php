@extends('layouts.base')

@include('partials.header')

@include('errors.request-main')

@section('content')
    <div class="flex justify-center h-screen w-auto">
        <form class="w-screen h-screen pt-36 m-7" method="POST" action="{{ route('product.store') }}"
            enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usuário</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                    </div>
                    <input type="text" value="{{ getLoggedUser()->name }}" id="email-address-icon" disabled
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="name@flowbite.com">
                </div>
            </div>
            <div class="mb-6">
                <label for="product_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome do Produto</label>
                <input type="text" id="product_name" autocomplete="off"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >
            </div>
        
            <div class="mb-6">
                <label for="product_price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Preço do Produto</label>
                <input type="text" id="product_price" autocomplete="off" placeholder="R$ 0,00" style="text-align: left"
                class="bg-gray-50 money border border-gray-300 text-gray-900 w-60 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >
            </div>

        </form>
    </div>




    {{-- <form method="POST" id="info-product-form" class="w-2/3" id="my-form" action="{{ route('product.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="user" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usuário</label>
                <input type="user" id="user"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    disabled value="{{ Illuminate\Support\Facades\Auth::user()->name }}">
            </div>

            <div class="mb-6">
                <label for="product_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome do Produto</label>
                    
                <input type="text" value="{{ old('product_name') }}" id="product_name" name="name"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    autocomplete="off" placeholder="Ex: Celular">
            </div>

            <div class="mb-6" >
                <label for="product_price" class="block mb-2 text-sm font-medium money text-gray-900 dark:text-white">Preço do Produto</label>
                    
                <input type="text" value="{{ old('product_price') }}" id="product_price" name="price"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    autocomplete="off" placeholder="R$ 0,00">
            </div>

            <label for="product_price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Valor do Produto</label>
            <div class="mb-6 relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>  
                </div>
                <input type="text" id="simple-search"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="R$ 0,00" required>
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
                <button
                    type="submit"class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Proximo
                </button>
            </div>
        </form> --}}
@endsection
