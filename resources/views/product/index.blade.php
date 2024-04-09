@extends('layouts.base')

@section('title', 'Produtos')
@section('content')
@include('partials.header')

<div>

<!-- <div class="flex items-left justify-end p-4 mb-4 text-sm text-green-800 rounded-lg dark:bg-gray-800 dark:text-green-400" role="alert">
    <div class="bg-lime-50 fixed flex p-4">
    <svg class="flex-shrink-0 inline h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <span class="sr-only">Info</span>
    <div>
        <span class="font-medium">Success alert!</span> Change a few things up and try submitting again.
    </div>
  </div>
</div> -->

    <div class="bg-cover bg-center h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1558981806-ec527fa84c39?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80)">
      <div class="md:w-1/2">
      <p class="font-bold text-sm uppercase">Services</p>
      <p class="text-3xl font-bold">Multimedia products</p>
      <p class="text-2xl mb-10 leading-none">Atractive designs for your brand</p>
      <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>
      </div>  
  </div>


    <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-4 place-items-center">

        @foreach ($products as $product)

          <x-product-card :product=$product/>
          
        @endforeach
        
    </div>

</div>

@endsection
