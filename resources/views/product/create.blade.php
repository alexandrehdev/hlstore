@extends('layouts.base')
@section('title','Publicar')
@vite(['resources/js/scripts/alpine.js','resources/js/scripts/quill.js'])
@section('content')
    @include('partials.header')

    <div x-data="{ firstStep: true, secondStep: false }">
      <div class="py-16 bg-gray-50 overflow-hidden">
        <div x-show="secondStep" class="fixed">
         <button @click="secondStep = false; firstStep = true" class="bg-sky-300 mb-10 hover:bg-sky-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
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

      <div x-show="secondStep" class="h-full w-full flex justify-center" x-transition>
          <div>
            <main class="flex-1 md:p-0 lg:pt-8 lg:px-8 md:ml-24 flex flex-col">
              <section class="bg-cream-lighter p-4 shadow">
              <div class="md:flex">
                <h2 class="md:w-1/3 uppercase tracking-wide text-sm sm:text-lg mb-6">Detalhes do Produto</h2>
              </div>
              <form>
                <div class="md:flex mb-8">
                  <div class="md:w-1/3">
                    <legend class="uppercase tracking-wide text-sm">Location</legend>
                    <p class="text-xs font-light text-red">This entire section is required.</p>
                  </div>
                <div class="md:flex-1 mt-2 mb:mt-0 md:px-3">
                  <div class="mb-4">
                    <label class="block uppercase tracking-wide text-xs font-bold">Name</label>
                    <input class="w-full shadow-inner p-4 border-0" type="text" name="name" placeholder="Acme Mfg. Co.">
                  </div>
                  <div class="md:flex mb-4">
                    <div class="md:flex-1 md:pr-3">
                      <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Street Address</label>
                      <input class="w-full shadow-inner p-4 border-0" type="text" name="address_street" placeholder="555 Roadrunner Lane">
                    </div>
                    <div class="md:flex-1 md:pl-3">
                      <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Building/Suite No.</label>
                      <input class="w-full shadow-inner p-4 border-0" type="text" name="address_number" placeholder="#3">
                      <span class="text-xs mb-4 font-thin">We lied, this isn't required.</span>
                    </div>
                  </div>
                  <div class="md:flex mb-4">
                    <div class="md:flex-1 md:pr-3">
                        <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Latitude</label>
                        <input class="w-full shadow-inner p-4 border-0" type="text" name="lat" placeholder="30.0455542">
                      </div>
                      <div class="md:flex-1 md:pl-3">
                        <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Longitude</label>
                        <input class="w-full shadow-inner p-4 border-0" type="text" name="lon" placeholder="-99.1405168">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="md:flex mb-8">
                  <div class="md:w-1/3">
                    <legend class="uppercase tracking-wide text-sm">Contact</legend>
                  </div>
                  <div class="md:flex-1 mt-2 mb:mt-0 md:px-3">
                    <div class="mb-4">
                      <label class="block uppercase tracking-wide text-xs font-bold">Phone</label>
                      <input class="w-full shadow-inner p-4 border-0" type="tel" name="phone" placeholder="(555) 555-5555">
                    </div>
                    <div class="mb-4">
                      <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">URL</label>
                      <input class="w-full shadow-inner p-4 border-0" type="url" name="url" placeholder="acme.co">
                    </div>
                    <div class="mb-4">
                      <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Email</label>
                      <input class="w-full shadow-inner p-4 border-0" type="email" name="email" placeholder="contact@acme.co">
                    </div>
                  </div>
                </div>
                <div class="md:flex">
                  <div class="md:w-1/3">
                    <legend class="uppercase tracking-wide text-sm">Social</legend>
                  </div>
                  <div class="md:flex-1 mt-2 mb:mt-0 md:px-3">
                    <div class="md:flex mb-4">
                      <div class="md:flex-1 md:pr-3">
                        <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Facebook</label>
                        <div class="w-full flex">
                          <span class="text-xs py-4 px-2 bg-grey-light text-grey-dark">facebook.com/</span>
                          <input class="flex-1 shadow-inner p-4 border-0" type="text" name="facebook" placeholder="acmeco">
                        </div>
                      </div>
                      <div class="md:flex-1 md:pl-3 mt-2 md:mt-0">
                        <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Twitter</label>
                        <div class="w-full flex">
                          <span class="text-xs py-4 px-2 bg-grey-light text-grey-dark">twitter.com/</span>
                          <input class="flex-1 shadow-inner p-4 border-0" type="text" name="twitter" placeholder="acmeco">
                        </div>
                      </div>
                    </div>
                    <div class="md:flex mb-4">
                      <div class="md:flex-1 md:pr-3">
                        <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Instagram</label>
                        <div class="w-full flex">
                          <span class="text-xs py-4 px-2 bg-grey-light text-grey-dark">instagram.com/</span>
                          <input class="flex-1 shadow-inner p-4 border-0" type="text" name="instagram" placeholder="acmeco">
                        </div>
                      </div>
                      <div class="md:flex-1 md:pl-3 mt-2 md:mt-0">
                        <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Yelp</label>
                          <div class="w-full flex">
                            <span class="text-xs py-4 px-2 bg-grey-light text-grey-dark">yelp.com/</span>
                            <input class="flex-1 shadow-inner p-4 border-0" type="text" name="yelp" placeholder="acmeco">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="md:flex mb-6">
                    <div class="md:w-1/3">
                      <legend class="uppercase tracking-wide text-sm">Description</legend>
                    </div>
                    <div class="md:flex-1 mt-2 mb:mt-0 md:px-3">
                      <textarea class="w-full shadow-inner p-4 border-0" placeholder="We build fine acmes." rows="6"></textarea>
                    </div>
                  </div>
                  <div class="md:flex mb-6">
                    <div class="md:w-1/3">
                      <legend class="uppercase tracking-wide text-sm">Cover Image</legend>
                    </div>
                    <div class="md:flex-1 px-3 text-center">
                      <div class="button bg-gold hover:bg-gold-dark text-cream mx-auto cusor-pointer relative">
                        <input class="opacity-0 absolute pin-x pin-y" type="file" name="cover_image">
                        Add Cover Image
                      </div>
                    </div>
                  </div>
                  <div class="md:flex mb-6 border border-t-1 border-b-0 border-x-0 border-cream-dark">
                    <div class="md:flex-1 px-3 text-center md:text-right">
                      <input type="hidden" name="sponsor" value="0">
                      <input class="button text-cream-lighter bg-brick hover:bg-brick-dark" type="submit" value="Create Location">
                    </div>
                  </div>
                </form>
              </section>
              </main>
          </div>
      </div>
    </div>


  </div>

    
@endsection
