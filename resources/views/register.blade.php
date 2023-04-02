@extends('layouts.base')

@section('content')
    <div class="flex justify-between items-center h-full">
        <div class="w-1/2 p-10">
            tchurusbango
        </div>

        <div class="w-1/2 p-10">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="bg-white h-2/4 rounded p-10">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Nome de Usuário
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            autocomplete="off" id="username" value="{{ old('username')}}" type="text" name="username" placeholder="Nome de Usuário">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Email
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            autocomplete="off" id="username" value="{{ old('email') }}" type="text" name="email" placeholder="Email">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Senha
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            autocomplete="off" id="username" type="password" name="password" placeholder="Senha">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Confirmar Senha
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            autocomplete="off" id="username" type="password" name="password_confirmation" placeholder="Confirmar Senha">
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

