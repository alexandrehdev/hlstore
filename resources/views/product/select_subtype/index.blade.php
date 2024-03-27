@extends('layouts.base')
@section('title','Publicar')

@section('meta-data')

<meta property="storeProductRoute" content="{{ route('product.store') }}">
<meta property="csrf-token" content="{{ csrf_token() }}">

@endsection

@section('content')
    @include('partials.header')

    <div>
      <div class="py-8 overflow-hidden">
        <div>
         <button class="mb-10  text-gray-800 font-bold py-2  rounded inline-flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 p-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
          </svg>
          <span>Voltar</span>
        </button>
        </div>




        <div class="grid lg:grid-cols-3  grid-cols-1 place-items-center items-center gap-2 content-center" x-data>

              @foreach (getProductSubtypes() as $subtype)
                <x-products.subtype.card :subtype=$subtype />
              @endforeach

        </div>




   </div>


@endsection




