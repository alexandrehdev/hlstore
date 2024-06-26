import Dropzone from "dropzone";
import "dropzone/dist/dropzone.css"

let productUrlDropzone = document.querySelector("meta[property='targetUrl']").content;
let csrf_token = document.querySelector("meta[property='csrf-token']").content;
let productsIds = document.querySelector("meta[property='productsCount']").content;
var sanitizedProductsIds = productsIds.replace('[',"").split(',').map((number) => { return parseInt(number) });


var options = {
    url: productUrlDropzone, // URL onde os arquivos serão enviados
    acceptedFiles: ".jpg,.jpeg,.png", // Tipos de arquivos aceitos
    autoProcessQueue: true,
    headers: {
        "X-CSRF-TOKEN": csrf_token
    },
    success: function(file, response) 
    {
        
           
    },
    error: function(file,message,xhr){
        console.log(xhr.response);
    }
};

window.onload = function () {
    let allDropzones = document.querySelectorAll(".myDropzone");

    sanitizedProductsIds.forEach(id => {
        var myDropzone = new Dropzone("#myDropzone-" + id, options);
    });  
   
    
   
};







