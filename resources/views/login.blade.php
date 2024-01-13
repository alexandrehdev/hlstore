@extends('layouts.base')

@section('content')

@include('errors.request-main')
<div class="flex justify-between h-screen">

    <div class="w-1/2 bg-white flex h-screen">
        
        <div class="m-auto">
            <div class="mb-10">
                <h2 class="text-lg">Login na HLStore</h2>
            </div>
            
            <form action="{{ route('check.login') }}" method="POST">
                @csrf

                <div class="mb-7">
                    <input type="text" name="email" class="rounded-lg p-2 w-[350px] text-sm border-0 bg-gray-200" placeholder="Email">
                </div>

                <div class="mb-7" x-data="{ open : true, closed : false }">
                    <svg xmlns="http://www.w3.org/2000/svg" id="open-eye-p1" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 absolute hover:cursor-pointer translate-y-2 translate-x-80" x-show='open' @click='open = ! open ; closed = ! closed; document.querySelector("#password").type = "text"'>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                      </svg>

                      <svg xmlns="http://www.w3.org/2000/svg" id="closed-eye-p1" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 absolute hover:cursor-pointer translate-y-2 translate-x-80" x-show='closed' @click='open = ! open ; closed = ! closed; document.querySelector("#password").type = "password"'>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                      </svg>
                      
                    <input type="password" name="password" id="password" class="placeholder:p-6 rounded-lg text-sm  w-[350px] border-0 bg-gray-200" placeholder="Senha">
                </div>

                
                <div class="mt-11">
                    <button class="bg-blue-500 hover:bg-blue-700 w-full text-sm text-white font-bold py-2 px-4 rounded-3xl">
                        Login
                      </button>
                </div>
            </form>
            <div class="mt-5 m-auto">
                <span class="text-sm text-gray-600">
                   Não possui conta ? <a href="{{ route('register') }}" class="text-red-500">Cadastre-se</a>
                </span>
            </div>
         </div>
    </div>  
    
    <div class="w-1/2 h-full">
        <img src="{{ Storage::url("public/images/cart-register.jpg") }}" alt="">
     </div>
</div> 
@endsection
