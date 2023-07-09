import Alpine from 'alpinejs'
import mask from '@alpinejs/mask'
import Dropzone from "dropzone";
import { Tabs } from 'flowbite';




window.Alpine = Alpine
 
Alpine.plugin(mask)
 
Alpine.start()


const tabElements = [
  {
      id: 'info-products',
      triggerEl: document.querySelector('#info-products'),
      targetEl: document.querySelector('#info-product-form')
  },
  {
      id: 'image-products',
      triggerEl: document.querySelector('#image-products'),
      targetEl: document.querySelector('#test')
  },
  {
      id: 'settings',
      triggerEl: document.querySelector('#settings-tab-example'),
      targetEl: document.querySelector('#settings-example')
  },
  {
      id: 'contacts',
      triggerEl: document.querySelector('#contacts-tab-example'),
      targetEl: document.querySelector('#contacts-example')
  }
];

// options with default values
const options = {
  defaultTabId: 'info-products',
  activeClasses: 'text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-400 border-blue-600 dark:border-blue-500',
  inactiveClasses: 'text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300',
  onShow: () => {
      console.log('tab is shown');
  }
};

const tabs = new Tabs(tabElements,options);

// let myDropzone = new Dropzone("#my-dropzone");

// Dropzone.autoDiscover = false;

// myDropzone.on("addedfile", file => {
//   console.log(`File added: ${file.name}`);
// });