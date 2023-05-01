<div class="swiper-slide p-12 m-4">
    <a href="{{ route("show", ["product" => $product->id]) }}">
        <div class="h-auto bg-white">
            <img class="p-8 rounded-t-lg" src="{{ Storage::url($product->file) }}" alt="product image" />
            <div class="px-5 pb-5">
                <a href="#">
                    <h5 class="text-lg font-semibold tracking-tight text-black">{{ $product->name }}</h5>
                </a>
                <div class="flex items-center justify-center">
                    <span
                        class="text-md font-bold text-lime-500">R${{ number_format(floatval($product->price), 2, ',', '.') }}
                    </span>
                </div>
                <span class="text-lime-600">
                    Frete Grátis
                </span>
            </div>
        </div>
    </a>
</div>
