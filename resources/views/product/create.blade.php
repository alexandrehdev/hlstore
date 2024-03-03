@extends('layouts.base')
@section('title','Publicar')
@vite(['resources/js/scripts/alpine.js','resources/js/scripts/quill.js'])
@section('content')
    @include('partials.header')
    
    <div class="relative mx-auto w-full bg-white">
        <div class="grid min-h-screen grid-cols-10">
          <div class="col-span-full py-6 px-4 sm:py-12 lg:col-span-6 lg:py-24">
            <div class="mx-auto w-full max-w-lg">
              <h1 class="relative text-2xl font-medium text-gray-700 sm:text-3xl">Detalhes do Produto<span class="mt-2 block h-1 w-10 bg-sky-600 sm:w-20"></span></h1>

              <form action="" class="mt-10 flex flex-col space-y-4">
                <div>
                    <label for="email" class="text-xs font-semibold text-gray-500">Nome</label>
                    <input type="email" id="email" name="email" placeholder="john.capler@fang.com" class="mt-1 block w-full rounded border-gray-300 bg-gray-50 py-3 px-4 text-sm placeholder-gray-300 shadow-sm outline-none transition focus:ring-2 focus:ring-teal-500" />
                </div>
                <div id="editor">
                    <label for="text-xs font-semibold text-gray-500">Descrição do Produto</label>
                    <textarea name="" placeholder="Descrição do Produto" cols="70" rows="50"></textarea>
                </div>
                <div class="relative">
                    <label for="card-number" class="text-xs font-semibold text-gray-500">Card number</label>
                    <input type="text" id="card-number" name="card-number" placeholder="1234-5678-XXXX-XXXX" class="block w-full rounded border-gray-300 bg-gray-50 py-3 px-4 pr-10 text-sm placeholder-gray-300 shadow-sm outline-none transition focus:ring-2 focus:ring-teal-500" /><img src="/images/uQUFIfCYVYcLK0qVJF5Yw.png" alt="" class="absolute bottom-3 right-3 max-h-4" /></div>
                <div>
                  <p class="text-xs font-semibold text-gray-500">Expiration date</p>
                  <div class="mr-6 flex flex-wrap">
                    <div class="my-1">
                      <label for="month" class="sr-only">Select expiration month</label
                      ><select name="month" id="month" class="cursor-pointer rounded border-gray-300 bg-gray-50 py-3 px-2 text-sm shadow-sm outline-none transition focus:ring-2 focus:ring-teal-500">
                        <option value="">Month</option>
                      </select>
                    </div>
                    <div class="my-1 ml-3 mr-6">
                      <label for="year" class="sr-only">Select expiration year</label
                      ><select name="year" id="year" class="cursor-pointer rounded border-gray-300 bg-gray-50 py-3 px-2 text-sm shadow-sm outline-none transition focus:ring-2 focus:ring-teal-500">
                        <option value="">Year</option>
                      </select>
                    </div>
                    <div class="relative my-1"><label for="security-code" class="sr-only">Security code</label><input type="text" id="security-code" name="security-code" placeholder="Security code" class="block w-36 rounded border-gray-300 bg-gray-50 py-3 px-4 text-sm placeholder-gray-300 shadow-sm outline-none transition focus:ring-2 focus:ring-teal-500" /></div>
                  </div>
                </div>
                <div><label for="card-name" class="sr-only">Card name</label><input type="text" id="card-name" name="card-name" placeholder="Name on the card" class="mt-1 block w-full rounded border-gray-300 bg-gray-50 py-3 px-4 text-sm placeholder-gray-300 shadow-sm outline-none transition focus:ring-2 focus:ring-teal-500" /></div>
              </form>
              <p class="mt-10 text-center text-sm font-semibold text-gray-500">By placing this order you agree to the <a href="#" class="whitespace-nowrap text-teal-400 underline hover:text-teal-600">Terms and Conditions</a></p>
              <button type="submit" class="mt-4 inline-flex w-full items-center justify-center rounded bg-teal-600 py-2.5 px-4 text-base font-semibold tracking-wide text-white text-opacity-80 outline-none ring-offset-2 transition hover:text-opacity-100 focus:ring-2 focus:ring-teal-500 sm:text-lg">Place Order</button>
            </div>
          </div>

          <div class="relative col-span-full flex flex-col py-6 pl-8 pr-4 sm:py-12 lg:col-span-4 lg:py-24">
            
            <div>
              <div class="absolute inset-0 h-full w-full opacity-95"></div>
            </div>
            <div class="relative">
              <ul class="space-y-5">
                <li class="flex justify-between w-full">
                <div class="relative">
                    <input class="peer hidden" id="radio_1" type="radio" name="radio" checked />
                    <span class="absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white peer-checked:border-indigo-500"></span>
                    <label class="flex cursor-pointer w-44 flex-col rounded-lg border border-gray-300 p-4 peer-checked:border-4 peer-checked:border-indigo-700" for="radio_1">
                        <span class="text-xs font-semibold uppercase">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                            </svg> 
                        </span>
                        <span class="mt-2 text-xl font-bold">Produtos</span>
                    </label>
                    </div>
                </li>
                <li class="flex justify-between">
                    <div class="relative">
                        <input class="peer hidden" id="radio_2" type="radio" name="radio" />
                        <span class="absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white peer-checked:border-indigo-500"></span>
                    
                        <label class="flex cursor-pointer w-44 flex-col rounded-lg border border-gray-300 p-4 peer-checked:border-4 peer-checked:border-indigo-700" for="radio_2">
                            <span class="text-xs font-semibold uppercase">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                                  </svg>
                                  
                            </span>
                            <span class="mt-2 text-xl font-bold">Veiculos</span>
                        </label>
                    </div>
                </li>

                <li class="flex justify-between">
                    <div class="relative">
                        <input class="peer hidden" id="radio_3" type="radio" name="radio" />
                        <span class="absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white peer-checked:border-indigo-500"></span>
                    
                        <label class="flex cursor-pointer w-44 flex-col rounded-lg border border-gray-300 p-4 peer-checked:border-4 peer-checked:border-indigo-700" for="radio_3">
                            <span class="text-xs font-semibold uppercase">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                                  </svg>
                                  
                            </span>
                            <span class="mt-2 text-xl font-bold">Digital</span>
                        </label>
                    </div>
                </li>
              </ul>
              
        </div>
      </div>
      
      

    
@endsection
