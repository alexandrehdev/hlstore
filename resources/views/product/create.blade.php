@extends('layouts.base')
@section('title','Publicar')
@vite(['resources/js/scripts/alpine.js','resources/js/scripts/quill.js', 'resources/js/scripts/dropzone.js', 'resources/js/dump/index.js'])

@section('meta-data')

<meta property="storeProductRoute" content="{{ route('product.store') }}">
<meta property="csrf-token" content="{{ csrf_token() }}">

@endsection

@section('content')
    @include('partials.header')

    <div x-data="{ firstStep: $persist(true), secondStep: $persist(false)}">
      <div class="py-16 bg-gray-50 overflow-hidden">
        <div x-show="secondStep" class="">
         <button @click="secondStep = false; firstStep = true" class="mb-10  text-gray-800 font-bold py-2  rounded inline-flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 p-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
          </svg>          
          <span>Voltar</span>
        </button>
        </div>
        <div class="container m-auto px-6 space-y-8 text-gray-500 md:px-12" x-show="firstStep" x-transition>
            <div>
                <span class="text-gray-600 text-lg font-semibold">Escolha o Tipo</span>
                <h2 class="mt-4 text-2xl text-gray-900 font-bold md:text-4xl">Qual o tipo de produto que deseja vender ?<br class="lg:block" hidden></h2>
            </div>
            <div class="mt-16 grid border divide-x divide-y rounded-xl overflow-hidden sm:grid-cols-2 lg:divide-y-0 lg:grid-cols-3 xl:grid-cols-4">
                <div class="relative group m-2 bg-white cursor-pointer transition hover:z-[1] hover:shadow-2xl">
                    <div class="relative p-8 space-y-8" @click="firstStep = false; secondStep = true">
                        <img src="https://www.svgrepo.com/show/530225/cell-phone.svg" class="w-14" width="512" height="512" alt="burger illustration">
                        
                        <div class="space-y-2">
                            <h5 class="text-xl text-gray-800 font-medium transition group-hover:text-yellow-600">Produtos</h5>
                            <p class="text-sm text-gray-600">Ex: Computadores, Periféricos, Roupas...</p>
                        </div>
                        <a href="#" class="flex justify-between items-center group-hover:text-yellow-600">
                            <span class="text-sm"></span>
                            <span class="-translate-x-4 opacity-0 text-2xl transition duration-300 group-hover:opacity-100 group-hover:translate-x-0">&RightArrow;</span>
                        </a>
                    </div>
                </div>
                <div class="relative group m-2 bg-white cursor-pointer transition hover:z-[1] hover:shadow-2xl">
                    <div class="relative p-8 space-y-8">
                        <img src="https://www.svgrepo.com/show/530235/transportation.svg" class="w-14" width="512" height="512" alt="burger illustration">
                        
                        <div class="space-y-2">
                            <h5 class="text-xl text-gray-800 font-medium transition group-hover:text-yellow-600">Veiculos</h5>
                            <p class="text-sm text-gray-600">Ex: Carros, Motos, Peças no Geral...</p>
                        </div>
                        <a href="#" class="flex justify-between items-center group-hover:text-yellow-600">
                            <span class="text-sm"></span>
                            <span class="-translate-x-4 opacity-0 text-2xl transition duration-300 group-hover:opacity-100 group-hover:translate-x-0">&RightArrow;</span>
                        </a>
                    </div>
                </div>
                <div class="relative group  m-2 bg-white cursor-pointer transition hover:z-[1] hover:shadow-2xl">
                    <div class="relative p-8 space-y-8">
                        <img src="https://tailus.io/sources/blocks/stacked/preview/images/avatars/package-delivery.png" class="w-10" width="512" height="512" alt="burger illustration">
                        
                        <div class="space-y-2">
                            <h5 class="text-xl text-gray-800 font-medium transition group-hover:text-yellow-600">Digital</h5>
                            <p class="text-sm text-gray-600">Cursos, Sistemas, Serviços.</p>
                        </div>
                        <a href="#" class="flex justify-between items-center group-hover:text-yellow-600">
                            <span class="text-sm"></span>
                            <span class="-translate-x-4 opacity-0 text-2xl transition duration-300 group-hover:opacity-100 group-hover:translate-x-0">&RightArrow;</span>
                        </a>
                    </div>
                </div>
            </div>
      </div>
      
      <div x-show="secondStep" x-init="$watch('secondStep', value => initDropzone() )" class=" w-full p-2 flex justify-center" x-transition x-data="{ brands : getAllPhoneBrands(), currentBrand : '' }">
        <form action="{{ route('product.create')  }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
              <h2 class="text-base font-semibold leading-7 text-gray-900">Detalhes do Produto</h2>
              <p class="mt-1 text-sm leading-6 text-gray-600">Essas informações será mostrada publicamente, então tenha cuidado com o que digitar.</p>
        
              <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6" >
                <div class="sm:col-span-4">
                  <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nome</label>
                  <div class="mt-2">
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                      {{-- <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">workcation.com/</span> --}}
                      <input type="text" name="name" id="username" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Ex: IPhone PRO MAX">
                    </div>
                  </div>
                </div>
        
                <div class="col-span-full mb-32">
                  <label for="about" class="block mb-4 text-sm font-medium leading-6 text-gray-900">Decrição (obrigatório)</label>
                  <div class="mt-2" id="editor">
                    <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                  </div>
                  <p class="mt-3 text-sm leading-6 text-gray-600">Faça uma descrição do seu produto.</p>
                </div>

                <div class="col-span-full">
                  <label class="text-sm mb-24 font-medium leading-6 text-gray-900">Imagens (obrigatório)</label>
                  <div class="dropzone-preview"></div>
                  <div class="dropzone upload-zone dz-preview dz-file-preview" 
                      data-url="{{ route('product.store') }}"
                      data-accepted-files="image/*"
                      data-csrf-token="{{ csrf_token() }}"
                      id="dropzone">
                      <img data-dz-thumbnail />
                      <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
                      
                    <div class="dz-message" data-dz-message>
                      <span class="dz-message-text">Arraste e solte arquivos</span>
                      <span class="dz-message-or">ou</span>
                      <button class="btn btn-primary">SELECIONE</button>
                  </div>
                  </div>
                </div>
                

              </div>
            </div>
        
            <div class="border-b border-gray-900/10 pb-12">
              <h2 class="text-base font-semibold leading-7 text-gray-900">Mais algumas informações</h2>
              <p class="mt-1 text-sm leading-6 text-gray-600">Informações referente ao estado do produto e suas características.</p>
        
              <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                  <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Marca</label>
                  <div class="mt-2">
                    <select id="brand" name="brand" x-model="currentBrand" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                      <template x-for="brand in brands">
                        <option x-text="brand"></option>
                      </template>
                    </select>
                  </div>
                </div>
        
                <div class="sm:col-span-3">
                  <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Modelo</label>
                  <div class="mt-2">
                    <select id="model" name="brand" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                     <option value=""></option>
                    </select>
                  </div>
                </div>
        
                <div class="sm:col-span-4">
                  <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                  <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
        
                <div class="sm:col-span-3">
                  <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Country</label>
                  <div class="mt-2">
                    <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                      <option>United States</option>
                      <option>Canada</option>
                      <option>Mexico</option>
                    </select>
                  </div>
                </div>
        
                <div class="col-span-full">
                  <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">Street address</label>
                  <div class="mt-2">
                    <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
        
                <div class="sm:col-span-2 sm:col-start-1">
                  <label for="city" class="block text-sm font-medium leading-6 text-gray-900">City</label>
                  <div class="mt-2">
                    <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
        
                <div class="sm:col-span-2">
                  <label for="region" class="block text-sm font-medium leading-6 text-gray-900">State / Province</label>
                  <div class="mt-2">
                    <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
        
                <div class="sm:col-span-2">
                  <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">ZIP / Postal code</label>
                  <div class="mt-2">
                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
              </div>
            </div>
        
            <div class="border-b border-gray-900/10 pb-12">
              <h2 class="text-base font-semibold leading-7 text-gray-900">Notifications</h2>
              <p class="mt-1 text-sm leading-6 text-gray-600">We'll always let you know about important changes, but you pick what else you want to hear about.</p>
        
              <div class="mt-10 space-y-10">
                <fieldset>
                  <legend class="text-sm font-semibold leading-6 text-gray-900">By Email</legend>
                  <div class="mt-6 space-y-6">
                    <div class="relative flex gap-x-3">
                      <div class="flex h-6 items-center">
                        <input id="comments" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                      </div>
                      <div class="text-sm leading-6">
                        <label for="comments" class="font-medium text-gray-900">Comments</label>
                        <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p>
                      </div>
                    </div>
                    <div class="relative flex gap-x-3">
                      <div class="flex h-6 items-center">
                        <input id="candidates" name="candidates" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                      </div>
                      <div class="text-sm leading-6">
                        <label for="candidates" class="font-medium text-gray-900">Candidates</label>
                        <p class="text-gray-500">Get notified when a candidate applies for a job.</p>
                      </div>
                    </div>
                    <div class="relative flex gap-x-3">
                      <div class="flex h-6 items-center">
                        <input id="offers" name="offers" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                      </div>
                      <div class="text-sm leading-6">
                        <label for="offers" class="font-medium text-gray-900">Offers</label>
                        <p class="text-gray-500">Get notified when a candidate accepts or rejects an offer.</p>
                      </div>
                    </div>
                  </div>
                </fieldset>
                <fieldset>
                  <legend class="text-sm font-semibold leading-6 text-gray-900">Push Notifications</legend>
                  <p class="mt-1 text-sm leading-6 text-gray-600">These are delivered via SMS to your mobile phone.</p>
                  <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                      <input id="push-everything" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                      <label for="push-everything" class="block text-sm font-medium leading-6 text-gray-900">Everything</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                      <input id="push-email" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                      <label for="push-email" class="block text-sm font-medium leading-6 text-gray-900">Same as email</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                      <input id="push-nothing" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                      <label for="push-nothing" class="block text-sm font-medium leading-6 text-gray-900">No push notifications</label>
                    </div>
                  </div>
                </fieldset>
              </div>
            </div>
          </div>
        
          <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancelar</button>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Criar</button>
          </div>
        </form>
        
      </div>


  </div>

    
@endsection

@section('scripts')

<script>
  function getAllPhoneBrands(){
      return [
        "Apple",
          "Samsung",
          "Xiaomi",
          "Motorola",
          "Sony",
          "Asus",
      ];
  }

  function getAppleModels() {
    return {
        brand: "Apple",
        models: [
            "iPhone 13",
            "iPhone 12",
            "iPhone SE (2020)",
            "iPhone 11",
            "iPhone XR",
            "iPhone 8",
            "iPhone 7",
            "iPhone SE",
            "iPhone XS",
            "iPhone X"
        ]
    };
}

// Função para obter modelos de celulares da Samsung
function getSamsungModels() {
    return {
        brand: "Samsung",
        models: [
            "Galaxy S21",
            "Galaxy S20",
            "Galaxy Note 20",
            "Galaxy A52",
            "Galaxy A32",
            "Galaxy S21 Ultra",
            "Galaxy Note 10",
            "Galaxy Z Fold 3",
            "Galaxy Z Flip 3",
            "Galaxy A12"
        ]
    };
}

// Função para obter modelos de celulares da Motorola
function getMotorolaModels() {
    return {
        brand: "Motorola",
        models: [
            "Moto G Power (2021)",
            "Moto G Stylus (2021)",
            "Moto G9 Plus",
            "Moto G Fast",
            "Moto E7 Plus",
            "Moto G Power (2020)",
            "Moto G Stylus (2020)",
            "Moto G Pro",
            "Moto G8 Plus",
            "Moto G8 Power"
        ]
    };
}

// Função para obter modelos de celulares da Sony
function getSonyModels() {
    return {
        brand: "Sony",
        models: [
            "Sony Xperia 1 III",
            "Sony Xperia 5 III",
            "Sony Xperia 1 II",
            "Sony Xperia 5 II",
            "Sony Xperia 10 III",
            "Sony Xperia 10 II",
            "Sony Xperia L4",
            "Sony Xperia XZ3",
            "Sony Xperia XZ2",
            "Sony Xperia XA2"
        ]
    };
}

// Função para obter modelos de celulares da Nokia
function getNokiaModels() {
    return {
        brand: "Nokia",
        models: [
            "Nokia 9 PureView",
            "Nokia 8.3 5G",
            "Nokia 7.2",
            "Nokia 6.2",
            "Nokia 5.3",
            "Nokia 3.4",
            "Nokia 2.4",
            "Nokia 1.4",
            "Nokia 5.4",
            "Nokia 3.1 Plus"
        ]
    };
}

// Função para obter modelos de celulares da Asus
function getAsusModels() {
    return {
        brand: "Asus",
        models: [
            "Asus ZenFone 8",
            "Asus ZenFone 7 Pro",
            "Asus ROG Phone 5",
            "Asus ZenFone 6",
            "Asus ZenFone 5Z",
            "Asus ZenFone Max Pro (M2)",
            "Asus ZenFone Max Plus (M1)",
            "Asus ZenFone Max (M2)",
            "Asus ZenFone Live",
            "Asus ZenFone AR"
        ]
    };
}

// Função para obter modelos de celulares da Xiaomi
function getXiaomiModels() {
    return {
        brand: "Xiaomi",
        models: [
            "Xiaomi Mi 11",
            "Xiaomi Mi 10",
            "Xiaomi Redmi Note 10",
            "Xiaomi Redmi Note 9",
            "Xiaomi Redmi 9",
            "Xiaomi Poco X3",
            "Xiaomi Mi 10T",
            "Xiaomi Mi Note 10",
            "Xiaomi Redmi Note 8",
            "Xiaomi Mi 9"
        ]
    };
}



  

</script>

@endsection

