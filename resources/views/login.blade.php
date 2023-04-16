@extends('layouts.base')

@section('content')

@include('errors.request-main')
    <div class="flex justify-between items-center h-full">
    
        <div class="w-2/5 h-auto p-48 ">
            <div>
                <h1>Bom te ver novamente</h1>
            </div>

            <form action="{{ route('check.login') }}" method="POST">
                @csrf
                <div class="bg-white h-2/4 rounded p-10">

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Email
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            autocomplete="off" id="username" type="text" name="email" placeholder="Email">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Senha
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            autocomplete="off" id="username" type="password" name="password" placeholder="Senha">
                    </div>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Login
                    </button>

                    <a href="{{ route('register') }}">
                        Não possui conta?
                    </a>
                </div>
            </form>
        </div>


        <div class="w-3/5 h-full bg-indigo-700">
            <div class="flex justify-center pt-28">
                <h1 class="uppercase text-white text-5xl pacific">HLStore</h1>
            </div>
            <div class="flex justify-center m-6 p-4 rounded-sm">
                <img class="h-80" src="{{ asset('img/shopping.svg') }}" alt="">
            </div>
            <div class="flex justify-center pt-28 text-white">
                <span>Compra e venda de produtos de todos os tipos</span>
            </div>
        </div>
    </div>
@endsection
