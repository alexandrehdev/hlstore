
@extends('layouts.base')
@section('title', 'HLStore | Roupas')

@vite(['resources/js/scripts/dropzone.js'])

@section('meta-data')
    <meta property="targeUrl" content="{{ route('type_product.subtype.fashion.store') }}">
    <meta property="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<div>
    <a href="{{ route('type_product.create') }}" class="inline-flex items-center py-2 my-10 font-bold text-gray-800 rounded">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="p-2 w-9 h-9">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
        </svg>
        <span>Voltar</span>
    </a>
</div>
    <div class="container m-auto lg:w-1/2 p-2" x-data>
        <form action="{{ route('type_product.subtype.fashion.store') }}" method="POST" id="productForm" enctype="multipart/form-data">
            @csrf
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Detalhes do Produto</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Essas informações será mostrada publicamente, então tenha cuidado com o que digitar.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6" >
                    <div class="sm:col-span-4">
                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nome (obrigatório)</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                         <!-- <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">workcation.com/</span> -->
                            <input type="text" name="name" id="name" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Produto">
                        </div>
                    </div>
                </div>

                    <div class="col-span-full mb-10">
                        <label for="about" class="block mb-4 text-sm font-medium leading-6 text-gray-900">Decrição (obrigatório)</label>
                        <div class="mt-2">
                            <div class="max-w-2xl">
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400"></label>
                                <textarea id="message" rows="4" name="description" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..."></textarea>
                            </div>
                            
                        </div>
                        <p class="mt-3 text-sm leading-6 text-gray-600">
                            Faça uma descrição do seu produto.
                        </p>
                    </div>

                    
                    <div class="col-span-full mt-9">
                    <div id="myDropzone" class="dropzone dz-clickable" style="border: 2px dashed #ccc; background: white; padding: 20px; margin: 20px;">
                        <form action="">
                        <div class="dz-default dz-message">
                            <span>
                                Arraste e solte arquivos aqui ou clique para fazer upload
                            </span>
                        </div>

                        <!-- Área de pré-visualização de arquivos -->
                            <div class="dz-preview dz-file-preview" style="display: none;">
                            <div class="dz-image"><img data-dz-thumbnail /></div>
                            <div class="dz-details">
                                <div class="dz-filename"><span data-dz-name></span></div>
                                <div class="dz-size" data-dz-size></div>
                            </div>
                            <div class="dz-error-message"><span data-dz-errormessage></span></div>
                            <div class="dz-success-mark"><span>✔</span></div>
                            <div class="dz-error-mark"><span>✘</span></div>
                        </div>

                        <!-- Mensagem de resposta -->
                        <div class="dz-response-message" style="display: none;">
                            <span class="dz-message" data-dz-response-message></span>
                        </div>

                        </div>

                        </form>
                    </div>
                </div>
                </div>

                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Mais algumas informações</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Informações referente ao estado do produto e suas características.</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Tipo</label>
                        <div class="mt-2">
                            <select id="brand" name="type-clothes"  autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option value="nothing">Selecione</option>
                                <option value="calça">Calças</option>
                                <option value="bermuda">Bermuda</option>
                                <option value="camisa">Camisas e Camisetas</option>
                                <option value="jaqueta">Casacos e Jaqueta</option>
                                <option value="macacao">Macacões</option>
                                <option value="intima">Roupa Íntima</option>
                                <option value="saia">Saia</option>
                            </select>
                        </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Marca</label>
                            <div class="mt-2">
                                <select id="model" name="brand" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option value="adidas">Adidas</option>
                                    <option value="nike">Nike</option>
                                    <option value="puma">Puma</option>
                                    <option value="gucci">Gucci</option>
                                    <option value="versace">Versace</option>
                                    <option value="zara">Zara</option>
                                    <option value="h&m">H&M</option>
                                    <option value="calvin-klein">Calvin Klein</option>
                                    <option value="tommy-hilfiger">Tommy Hilfiger</option>
                                    <option value="ralph-lauren">Ralph Lauren</option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Cor</label>
                            <div class="mt-2">
                                <select id="model" name="color" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option value="preto">Preto</option>
                                    <option value="branco">Branco</option>
                                    <option value="cinza">Cinza</option>
                                    <option value="prata">Prata</option>
                                    <option value="marrom">Marrom</option>
                                    <option value="vermelho">Vermelho</option>
                                    <option value="laranja">Laranja</option>
                                    <option value="amarelo">Amarelo</option>
                                    <option value="verde">Verde</option>
                                    <option value="azul">Azul</option>
                                    <option value="roxo">Roxo</option>
                                    <option value="rosa">Rosa</option>
                                    <option value="bege">Bege</option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Novo/Usado</label>
                            <div class="mt-2">
                                <select id="model" name="condition" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option value="new">Novo</option>
                                    <option value="used">Usado</option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Gênero</label>
                        <div class="mt-2">
                            <select id="country" name="gender" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option>Masculino</option>
                            <option>Feminino</option>
                            <option>Unissex</option>
                            </select>
                        </div>
                        </div>

                        <div class="col-span-full">
                        <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">Tamanho</label>
                            <div class="mt-2">
                                <select id="country" name="size" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option value="nothing">Selecione</option>
                                    <option value="PP">PP</option>
                                    <option value="P">P</option>
                                    <option value="M">M</option>
                                    <option value="G">G</option>
                                    <option value="GG">GG</option>
                                    <option value="XG">XG</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Preço</label>
                                <div class="mt-2">
                                    <input type="text" name="price" id="price" autocomplete="off" placeholder="R$ 0,00" class="block md:w-1/3 sm:w-full money rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        <div class="mt-6 flex items-center justify-start gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancelar</button>
            <button type="submit" id="createProduct" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Criar</button>
        </div>
    </form>
</div>

@endsection