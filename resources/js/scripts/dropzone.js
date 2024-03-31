import Dropzone from "dropzone";
import "dropzone/dist/dropzone.css"

let productUrlDropzone = document.querySelector("meta[property='targeUrl']").content;
let csrf_token = document.querySelector("meta[property='csrf-token']").content;

let dropzone = document.querySelector("#dropzone");

var options = {
    url: productUrlDropzone, // URL onde os arquivos serão enviados
    acceptedFiles: ".jpg,.jpeg,.png", // Tipos de arquivos aceitos
    headers: {
        "X-CSRF-TOKEN": csrf_token
    },
};

window.onload = function () {
    var myDropzone = new Dropzone("#myDropzone", options);

    document.querySelector("#createProduct").addEventListener('click', function () {

        if (myDropzone.getQueuedFiles().length > 0) {
            myDropzone.processQueue();
        }

    })
};
// 





