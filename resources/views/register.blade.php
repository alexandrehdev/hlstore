@extends('layouts.base')
@section('content')
    @include('errors.request-main')

    @vite(['resources/js/scripts/hideSeePassword.js', 'resources/css/style.css'])

    <div class="flex justify-between items-center h-full">

        <div class="w-2/5 h-full bg-indigo-700">
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

        <div class="w-3/5 h-auto p-48">
            <div>
                <h1 class="text-xl">Crie uma conta.</h1>
                <h3>É gratuito.</h3>
            </div>
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="bg-white h-full rounded p-10">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2 select-none" for="username">
                            Nome de Usuário
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            autocomplete="off" id="username" value="{{ old('username') }}" type="text" name="username"
                            placeholder="Nome de Usuário">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2 select-none" for="email">
                            Email
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            autocomplete="off" id="email" value="{{ old('email') }}" type="text" name="email"
                            placeholder="Email">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2 select-none" for="username">
                            Senha
                        </label>
                        <div class="relative text-gray-600">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6 hidden cursor-pointer" id="opened-eye-icon-pwd">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 cursor-pointer"
                                    id="closed-eye-icon-pwd">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                                </svg>

                            </span>
                            <input type="password" name="password"
                                class="py-2 shadow appearance-none border password-input rounded w-full px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Senha" id="password" autocomplete="off">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2 select-none" for="username">
                            Confirmar Senha
                        </label>
                        <div class="relative text-gray-600">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6 hidden" id="closed-eye-icon-cpwd">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6" id="opened-eye-icon-cpwd">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                                </svg>

                            </span>
                            <input type="password" name="password_confirmation"
                                class="py-2 shadow appearance-none border password-input rounded w-full px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Confirme sua Senha" id="password_confirmation" autocomplete="off">
                        </div>
                    </div>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Cadastrar
                    </button>

                    <a href="{{ route('login') }}">
                        Já possui conta?
                    </a>
                </div>
            </form>
        </div>


    </div>
@endsection
