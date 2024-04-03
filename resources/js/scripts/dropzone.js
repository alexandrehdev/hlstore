import Dropzone from "dropzone";
import "dropzone/dist/dropzone.css"

let productUrlDropzone = document.querySelector("meta[property='targeUrl']").content;
let csrf_token = document.querySelector("meta[property='csrf-token']").content;

let dropzone = document.querySelector("#dropzone");

var options = {
    url: productUrlDropzone, // URL onde os arquivos serão enviados
    acceptedFiles: ".jpg,.jpeg,.png", // Tipos de arquivos aceitos
    autoProcessQueue: false,
    headers: {
        "X-CSRF-TOKEN": csrf_token
    },
    error: function(file,message,xhr){
        console.log(xhr.response);
    }
};

window.onload = function () {
    console.log(productUrlDropzone);
    var myDropzone = new Dropzone("#myDropzone", options);

    document.querySelector("#createProduct").addEventListener('click', function (event) {
        event.preventDefault(); // Evitar envio do formulário

        if (myDropzone.getQueuedFiles().length > 0) {
            console.log(myDropzone.files);

            myDropzone.processQueue(); // Processar a fila se houver arquivos na fila
        } else {
            document.querySelector('#productForm').submit(); // Enviar o formulário normalmente se não houver arquivos na fila
        }
    });
};





