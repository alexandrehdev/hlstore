@extends('layouts.base')

@section('title', 'Produtos')
@section('content')
@include('partials.header')


<!-- component -->



<div class="mb-4 m-8 border-b border-gray-200 dark:border-gray-700">
  <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
      <li class="me-2" role="presentation">
          <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Adicionar</button>
      </li>
      <li class="me-2" role="presentation">
          <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Editar</button>
      </li>
    
  </ul>
</div>
<div id="default-tab-content">
  <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      
    <div class=" h-screen w-screen sm:px-8 md:px-16 sm:py-8">
      <form action="{{ route('posters.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <main class="container mx-auto max-w-screen-lg h-full">
          <!-- file upload modal -->
          <article aria-label="File Upload Modal" class="relative h-full flex flex-col bg-white shadow-xl rounded-md" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" ondragleave="dragLeaveHandler(event);" ondragenter="dragEnterHandler(event);">
            <!-- overlay -->
            <div id="overlay" class="w-full h-full absolute top-0 left-0 pointer-events-none z-50 flex flex-col items-center justify-center rounded-md">
              <i>
                <svg class="fill-current w-12 h-12 mb-3 text-blue-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M19.479 10.092c-.212-3.951-3.473-7.092-7.479-7.092-4.005 0-7.267 3.141-7.479 7.092-2.57.463-4.521 2.706-4.521 5.408 0 3.037 2.463 5.5 5.5 5.5h13c3.037 0 5.5-2.463 5.5-5.5 0-2.702-1.951-4.945-4.521-5.408zm-7.479-1.092l4 4h-3v4h-2v-4h-3l4-4z" />
                </svg>
              </i>
              <p class="text-lg text-blue-700">Solte arquivos para enviar</p>
            </div>
    
            <!-- scroll area -->
            <section class="h-full overflow-auto p-8 w-full flex flex-col">
              <header class="py-12 flex flex-col justify-center items-center">
                {{-- <p class="mb-3 font-semibold text-gray-900 flex flex-wrap justify-center">
                  <span>Arraste e solte</span>&nbsp;<span>as imagens</span>
                </p>
                <p>Ou</p> --}}
                <input id="hidden-input" name="posters[]" type="file" multiple class="hidden" />
                <input type="text" name="product_id" value="" class="hidden">
                    <button id="button" type="button" class="mt-2 h-12 w-1/3 rounded-full text-white font-medium px-3 py-1 bg-gray-900  hover:bg-gray-900 focus:shadow-outline focus:outline-none">
                        Escolher
                    </button>
              </header>
    
              <h1 class="pt-8 pb-3 font-semibold sm:text-lg text-gray-900">
                Para Enviar
              </h1>
    
              <ul id="gallery" class="flex flex-1 flex-wrap -m-1">
                <li id="empty" class="h-full w-full text-center flex flex-col justify-center items-center">
                  <img class="mx-auto w-32" src="https://user-images.githubusercontent.com/507615/54591670-ac0a0180-4a65-11e9-846c-e55ffce0fe7b.png" alt="no data" />
                  <span class="text-small text-gray-500">Não há arquivos selecionados</span>
                </li>
              </ul>
            </section>
    
            <!-- sticky footer -->
            <footer class="flex justify-end px-8 pb-8 pt-4">
              <button id="submit" type="submit" class="rounded-sm px-3 py-1 bg-blue-700 hover:bg-blue-500 text-white focus:shadow-outline focus:outline-none">
                Enviar
              </button>
              <button id="cancel" class="ml-3 rounded-sm px-3 py-1 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                Voltar
              </button>
            </footer>
          </article>
        </main>
      </form>
      </div>
    
      <!-- using two similar templates for simplicity in js code -->
      <template id="file-template">
        <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
          <article tabindex="0" class="group w-full h-full rounded-md focus:outline-none focus:shadow-outline elative bg-gray-100 cursor-pointer relative shadow-sm">
            <img alt="upload preview" class="img-preview hidden w-full h-full sticky object-cover rounded-md bg-fixed" />
    
            <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
              <h1 class="flex-1 group-hover:text-blue-800"></h1>
              <div class="flex">
                <span class="p-1 text-blue-800">
                  <i>
                    <svg class="fill-current w-4 h-4 ml-auto pt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <path d="M15 2v5h5v15h-16v-20h11zm1-2h-14v24h20v-18l-6-6z" />
                    </svg>
                  </i>
                </span>
                <p class="p-1 size text-xs text-gray-700"></p>
                <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md text-gray-800">
                  <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                  </svg>
                </button>
              </div>
            </section>
          </article>
        </li>
      </template>
    
      <template id="image-template">
        <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
          <article tabindex="0" class="group hasImage w-full h-full rounded-md focus:outline-none focus:shadow-outline bg-gray-100 cursor-pointer relative text-transparent hover:text-white shadow-sm">
            <img alt="upload preview" class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed" />
    
            <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
              <h1 class="flex-1"></h1>
              <div class="flex">
                <span class="p-1">
                  <i>
                    <svg class="fill-current w-4 h-4 ml-auto pt-" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <path d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z" />
                    </svg>
                  </i>
                </span>
    
                <p class="p-1 size text-xs"></p>
                <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
                  <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                  </svg>
                </button>
              </div>
            </section>
          </article>
        </li>
      </template>

  </div>
  <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
      
    <section class="container px-4 mx-auto">
      <div class="flex items-center gap-x-3">
          <h2 class="text-lg font-medium text-gray-800 dark:text-white">Imagens</h2>
  
          <span class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400"> Posters(s)</span>
      </div>
  
  
      <div class="flex flex-col mt-6">
          <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                  <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                      <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                          <thead class="bg-gray-50 dark:bg-gray-800">
                              <tr>
                                  <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                      <div class="flex items-center gap-x-3">
                                          <input type="checkbox" class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">
                                          <span>ID</span>
                                      </div>
                                  </th>
  
                                  <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                      <div class="flex items-center gap-x-3">
                                          
                                          <span>Imagem</span>
                                      </div>
                                  </th>
  
                                  <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Criado Há</th>
  
                              </tr>
                          </thead>
                          <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                             
                              <tr>
                                  <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                      <div class="inline-flex items-center gap-x-3">
                                          <input type="checkbox" class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">
  
                                          <div class="flex items-center gap-x-2">
                                                
                                              <div>
                                                  <h2 class="font-medium text-gray-800 dark:text-white "># </h2>
                                              </div>
                                          </div>
                                      </div>
                                  </td>
                                  <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                      <div class="inline-flex items-center gap-x-3">
                                          
                                          
                                          <div class="flex items-center gap-x-2">
                                              <img class="object-cover w-10 h-10 rounded-full" src="" alt="">
                                          </div>
                                      </div>
                                  </td>
                                  
                                  <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                      <div class="inline-flex items-center px-3 py-1 rounded-full  gap-x-2">
                                          <span class="h-1.5 w-1.5 rounded-full"></span>
                          
                                          <h2 
                                              class="text-sm font-normal text-emerald-500">
                                              
                                              asd
                                          </h2>
                                      </div>
                                  </td>
                                 
                                  
                                  <td class="px-4 py-4 text-sm whitespace-nowrap">
                                      <div class="flex items-center gap-x-6">
                      
                                          <a href="#" id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                              
                                              <svg class=" text-blue-600 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                                                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                              </svg>  
                                          </a>
                                          
                                          <!-- Dropdown menu -->
                                          <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                              <li>
                                                  <a href="#" class="block px-4 py-2 hover:text-gray-800 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 inline">
                                                          <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                      </svg>
                                                      Editar
                                                  </a>
                                              </li>
                                              
                                              </ul>
                                          </div>
                                      </div>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  
      <div class="flex items-center justify-between mt-6">
          <a href="#" class="flex items-center px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
              </svg>
  
              <span>
                  Anterior
              </span>
          </a>
  
          <div class="items-center hidden lg:flex gap-x-3">
              <a href="#" class="px-2 py-1 text-sm text-blue-500 rounded-md bg-blue-100/60">1</a>
              <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">2</a>
              <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">3</a>
              <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">...</a>
              <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">12</a>
              <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">13</a>
              <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">14</a>
          </div>
  
          <a href="#" class="flex items-center px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
              <span>
                  Proximo
              </span>
  
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
              </svg>
          </a>
      </div>
  </section>


  </div> 
</div>


<script>
const fileTempl = document.getElementById("file-template"),
imageTempl = document.getElementById("image-template"),
empty = document.getElementById("empty");

// use to store pre selected files
let FILES = {};

// check if file is of type image and prepend the initialied
// template to the target element
function addFile(target, file) {
const isImage = file.type.match("image.*"),
  objectURL = URL.createObjectURL(file);

const clone = isImage
  ? imageTempl.content.cloneNode(true)
  : fileTempl.content.cloneNode(true);

clone.querySelector("h1").textContent = file.name;
clone.querySelector("li").id = objectURL;
clone.querySelector(".delete").dataset.target = objectURL;
clone.querySelector(".size").textContent =
  file.size > 1024
    ? file.size > 1048576
      ? Math.round(file.size / 1048576) + "mb"
      : Math.round(file.size / 1024) + "kb"
    : file.size + "b";

isImage &&
  Object.assign(clone.querySelector("img"), {
    src: objectURL,
    alt: file.name
  });

empty.classList.add("hidden");
target.prepend(clone);

FILES[objectURL] = file;
}

const gallery = document.getElementById("gallery"),
overlay = document.getElementById("overlay");

// click the hidden input of type file if the visible button is clicked
// and capture the selected files
const hidden = document.getElementById("hidden-input");
document.getElementById("button").onclick = () => hidden.click();
hidden.onchange = (e) => {
for (const file of e.target.files) {
  addFile(gallery, file);
}
};

// use to check if a file is being dragged
const hasFiles = ({ dataTransfer: { types = [] } }) =>
types.indexOf("Files") > -1;

// use to drag dragenter and dragleave events.
// this is to know if the outermost parent is dragged over
// without issues due to drag events on its children
let counter = 0;

// reset counter and append file to gallery when file is dropped
function dropHandler(ev) {
ev.preventDefault();
for (const file of ev.dataTransfer.files) {
  addFile(gallery, file);
  overlay.classList.remove("draggedover");
  counter = 0;
}
}

// only react to actual files being dragged
function dragEnterHandler(e) {
e.preventDefault();
if (!hasFiles(e)) {
  return;
}
++counter && overlay.classList.add("draggedover");
}

function dragLeaveHandler(e) {
1 > --counter && overlay.classList.remove("draggedover");
}

function dragOverHandler(e) {
if (hasFiles(e)) {
  e.preventDefault();
}
}

// event delegation to caputre delete events
// fron the waste buckets in the file preview cards
gallery.onclick = ({ target }) => {
if (target.classList.contains("delete")) {
  const ou = target.dataset.target;
  document.getElementById(ou).remove(ou);
  gallery.children.length === 1 && empty.classList.remove("hidden");
  delete FILES[ou];
}
};

// print all selected files
// document.getElementById("submit").onclick = () => {
// alert(`Submitted Files:\n${JSON.stringify(FILES)}`);
// console.log(FILES);
// };

// clear entire selection
document.getElementById("cancel").onclick = () => {
while (gallery.children.length > 0) {
  gallery.lastChild.remove();
}
FILES = {};
empty.classList.remove("hidden");
gallery.append(empty);
};

</script>

<style>
.hasImage:hover section {
background-color: rgba(5, 5, 5, 0.4);
}
.hasImage:hover button:hover {
background: rgba(5, 5, 5, 0.45);
}

#overlay p,
i {
opacity: 0;
}

#overlay.draggedover {
background-color: rgba(255, 255, 255, 0.7);
}
#overlay.draggedover p,
#overlay.draggedover i {
opacity: 1;
}

.group:hover .group-hover\:text-blue-800 {
color: #2b6cb0;
}
</style>

@endsection