import Alpine from 'alpinejs'
import Dropzone from "dropzone";
import * as $ from 'jquery'
import "inputmask/dist/jquery.inputmask.js";

window.Alpine = Alpine
  
Alpine.start()


$(function() {
    $(".money").inputmask( 'currency',{ "autoUnmask": true,
    radixPoint:",",
    groupSeparator: ".",
    allowMinus: false,
    prefix: 'R$ ',
    digits: 2,
    digitsOptional: false,
    rightAlign: true,
    unmaskAsNumber: true
});
});




// let myDropzone = new Dropzone("#my-dropzone");

// Dropzone.autoDiscover = false;

// myDropzone.on("addedfile", file => {
//   console.log(`File added: ${file.name}`);
// });
