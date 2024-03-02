<div class="col-span-8 overflow-hidden rounded-xl bg-gray-50 px-8 sm:shadow" x-show="account" x-transition>
  <div class="pt-4">
    <h1 class="py-2 text-2xl font-semibold">Conta</h1>
     <p class="font- text-slate-600">Infomações Gerais</p>
  </div>
  <hr class="mt-4 mb-8" />
  <p class="py-2 text-xl font-semibold">Usuario</p>
  <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between" x-data="{ changeName : false }"> 
    <p class="text-gray-600">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
      </svg>
      <strong class="relative">{{ loggedUser()->name }}</strong>
    </p>
    <button  class="inline-flex text-sm font-semibold text-blue-600 underline decoration-2">Mudar</button>
  </div>
  <hr class="mt-4 mb-8" />
  <p class="py-2 text-xl font-semibold">Email</p>
  <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
    <p class="text-gray-600">Seu email é <strong>{{ loggedUser()->email }}</strong></p>
    <button class="inline-flex text-sm font-semibold text-blue-600 underline decoration-2">Change</button>
  </div>
  <hr class="mt-4 mb-8" />
  <p class="py-2 text-xl font-semibold">Password</p>
  <div class="flex items-center">
    <div class="flex flex-col space-y-2 sm:flex-row sm:space-y-0 sm:space-x-3">
      <label for="login-password">
        <span class="text-sm text-gray-500">Senha Atual</span>
        <div class="relative flex overflow-hidden rounded-md border-2 transition focus-within:border-blue-600">
          <input type="password" id="login-password" class="w-full flex-shrink appearance-none border-gray-300 bg-white py-2 px-4 text-base text-gray-700 placeholder-gray-400 focus:outline-none" placeholder="***********" />
        </div>
      </label>
      <label for="login-password">
        <span class="text-sm text-gray-500">Nova Senha</span>
        <div class="relative flex overflow-hidden rounded-md border-2 transition focus-within:border-blue-600">
          <input type="password" id="login-password" class="w-full flex-shrink appearance-none border-gray-300 bg-white py-2 px-4 text-base text-gray-700 placeholder-gray-400 focus:outline-none" placeholder="***********" />
        </div>
      </label>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" class="mt-5 ml-2 h-6 w-6 cursor-pointer text-sm font-semibold text-gray-600 underline decoration-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
    </svg>
  </div>
  <p class="mt-2">Não lembra da senha atual?. <a class="text-sm font-semibold text-blue-600 underline decoration-2" href="#">Recuperar Conta</a></p>
  <button class="mt-4 rounded-lg bg-blue-600 px-4 py-2 text-white">Salvar Senha</button>
  <hr class="mt-4 mb-8" />

  <div class="mb-10">
    <p class="py-2 text-xl font-semibold">Apagar Conta</p>
    <p class="inline-flex items-center rounded-full bg-rose-100 px-4 py-1 text-rose-600">
      <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
      </svg>
      Cuidado
    </p>
    <p class="mt-4">Tenha certeza de que realmente deseja apagar sua conta, pois é um processo que não há como reverter.</p>
    <button class="ml-auto mt-4 text-sm font-semibold text-rose-600 underline decoration-2">Seguir para apagar a conta</button>
  </div>
</div>
</div>
</div>

