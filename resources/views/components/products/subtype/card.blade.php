<div>
    

<div class="w-96 p-6 cursor-pointer bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 transition ease-in-out hover:-translate-y-1 hover:scale-110" @click=" $dispatch('selectedsubtype',{ name : '{{ $subtype['name'] }}'}) ; subtype = '{{ $subtype['name'] }}' ">
    <img src="" alt="">
    <a href="#">
        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
            <img src="{{ $subtype['url'] }}" class="h-10 w-10" alt="">
        </h5>
    </a>
    <p class="mb-3 font-bold text-lg text-gray-500 dark:text-gray-400">{{ $subtype['title'] }}</p>
</div>



</div>