<a href="#">
<div class="w-60 inline-flex bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="flex justify-center items-center h-36">
        <a href="#">
            <img class="rounded-t-lg h-32" src="{{ url($product->file) }}" alt="" />
        </a>
    </div>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ $product->name}}
            </h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            {{ $product->description}}
        </p>
    </div>
</div>
</a>
