import Dropzone from "dropzone";
import "dropzone/dist/dropzone.css"

// let productUrlDropzone = document.querySelector("meta[property='targeUrl']").content;
let csrf_token = document.querySelector("meta[property='csrf-token']").content;


// var options = {
//     url: productUrlDropzone, // URL onde os arquivos serão enviados
//     acceptedFiles: ".jpg,.jpeg,.png", // Tipos de arquivos aceitos
//     autoProcessQueue: false,
//     headers: {
//         "X-CSRF-TOKEN": csrf_token
//     },
//     success: function(file, response) 
//     {
        
           
//     },
//     error: function(file,message,xhr){
//         console.log(xhr.response);
//     }
// };

window.onload = function () {
    // console.log(productUrlDropzone);
    // var myDropzone = new Dropzone("#myDropzone", options);

    // document.querySelector("#createProduct").addEventListener('click', function (event) {
    //     event.preventDefault(); // Evitar envio do formulário

    //     if (myDropzone.getQueuedFiles().length > 0) {
    //         myDropzone.files.forEach( file => {
    //             document.querySelector('#images').value = file;
    //         });
    //         console.log(document.querySelector('#images').value);
            //console.log(myDropzone.files);
            //console.log(document.querySelector('#images').value)
            //console.log($('#images'))

             // Processar a fila se houver arquivos na fila
            // document.querySelector('#productForm').submit();
    //     } 
    // });
};





