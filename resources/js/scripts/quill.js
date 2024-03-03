import Quill from "quill";
const quill = new Quill('#editor',{
    modules: {
        toolbar: true,
      },
      theme: 'snow'
  });

console.log(quill);