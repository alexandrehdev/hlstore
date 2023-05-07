<div class="swiper-slide bg-stone-200">
    <a href="{{ route("show", ["product" => $product->id]) }}">
        <div class="w-60 bg-slate-500 p-2">
            <div>
                <img src="{{ Storage::url($product->file) }}" alt="{{ $product->name }}" class="rounded object-cover" style="height:200px; width:240px">
            </div>
        </div>
        <div class="bg-white w-60">
            <h5 class="text-lg text-left p-2 font-semibold tracking-tight text-black">R${{ number_format(floatval($product->price), 2, ',', '.') }}</h5>
        </div>
    </a>
</div>
