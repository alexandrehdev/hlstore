<nav class="fixed top-0 z-50 w-full bg-white text-white">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start h-auto w-auto p-2 rounded-sm">
          <a href="{{ route('home') }}" class="flex ml-2 md:mr-24">
            <span class="self-center text-lg text-zinc-800 font-semibold sm:text-2xl whitespace-nowrap ">HLStore</span>
          </a>

          <ul class="flex flex-row">
            <li class="pr-20 text-black opacity-60 rounded-sm hover:opacity-100">
              <a href="{{ route('home') }}" class="hover:bg-slate-100 rounded-sm p-2">
              Home
            </a>
            </li>
            <li class="pr-20 text-black opacity-60 rounded-sm hover:opacity-100">
              <a href="" class="hover:bg-slate-100 rounded-sm  p-2">
              Categorias
            </a>
            </li>
            <li class="pr-20 text-black opacity-60 rounded-sm hover:opacity-100">
              <a href="{{ route('product.create') }}" class="hover:bg-slate-100 rounded-sm  p-2">
                Publicar Produto
              </a>
            </li>
            <li class="pr-20 text-black opacity-60  rounded-sm hover:opacity-100">
              <a href="" class="hover:bg-slate-100 rounded-sm p-2 ">
                Contato
              </a>
            </li>
          </ul>
        </div>
        
        <div class="relative">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-indigo-400">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
          </div>
          <input type="text" id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  " placeholder="Buscar produtos">
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

