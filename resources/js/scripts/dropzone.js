import Dropzone from "dropzone";
import "dropzone/dist/dropzone.css"

let productUrlDropzone = document.querySelector("meta[property='storeProductRoute']").content;
let csrf_token = document.querySelector("meta[property='csrf-token']").content;

let dropzone = new Dropzone("#dropzone", { 
    url : productUrlDropzone,
    method : 'post',
    headers: {
        'X-CSRF-TOKEN': csrf_token
    }
});



// if(document.querySelector("#dropzone")){

//     let storeProductRoute = document.querySelector("meta[property='storeProductRoute']");

//     let myDropzone = new Dropzone("#dropzone");

//     console.log(storeProductRoute);
// }