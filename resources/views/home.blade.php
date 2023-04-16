@extends('layouts.base')
@include('partials.header')

@section('content')
    <section class="h-1/3">

    </section>

    <section class="h-1/3">
        <div>
            <h1>Acabou de sair</h1>
        </div>
        
        @if ($products)
            @foreach ($products as $product)
                <x-product-card :product="$product" />
            @endforeach
        @endif

        </div>
    </section>
@endsection
