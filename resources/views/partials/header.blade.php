@vite(['resources/js/scripts/dropdown.js'])

<nav class="fixed top-0 z-50 w-full bg-indigo-800 text-white">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start h-auto w-44 p-2 rounded-sm bg-white">
          <a href="{{ route('home') }}" class="flex ml-2 md:mr-24">
            <img src="{{ asset('img/hlstore.svg') }}" class="h-8 mr-3" alt="FlowBite Logo" />
            <span class="self-center text-xl text-indigo-800 font-semibold sm:text-2xl whitespace-nowrap ">HLStore</span>
          </a>
        </div>
        <div>
          <ul class="flex flex-row">
            <li class="pr-20 opacity-80 hover:opacity-100">
              <a href="{{ route('home') }}">
              Home
            </a>
            </li>
            <li class="pr-20 opacity-80 hover:opacity-100">
              <a href="">
              Categorias
            </a>
            </li>
            <li class="pr-20 opacity-80 hover:opacity-100">
              <a href="{{ route('product.create') }}">
                Publicar Produto
              </a>
            </li>
            <li class="pr-20 opacity-80 hover:opacity-100">
              <a href="">
                Contato
              </a>
            </li>
          </ul>
        </div>
        @if (Illuminate\Support\Facades\Auth::user())
        <div class="flex items-center">
            <div class="flex items-center ml-3">
              <div>
                <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                  <span class="sr-only">Open user menu</span>
                  <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                </button>
              </div>
              <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                <div class="px-4 py-3" role="none">
                  <p class="text-sm text-gray-900 dark:text-white" role="none">
                     {{ Illuminate\Support\Facades\Auth::user()->name }}
                  </p>
                  <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                    {{ Illuminate\Support\Facades\Auth::user()->email }}
                  </p>
                </div>
                <ul class="py-1" role="none">
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Perfil</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Configurações</a>
                  </li>
                  <li>
                    <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </div>

      @else
      
      <a href="{{ route('register') }}" class="bg-indigo-500 rounded p-4">
          Cadastrar
      </a>
      @endif
    </div>
  </nav>

