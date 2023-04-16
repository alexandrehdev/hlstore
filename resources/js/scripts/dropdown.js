const dropdown = document.querySelector('#dropdown');
const dropdown_list = document.querySelector('#dropdown-list');

dropdown.addEventListener('click', () => {
    if(dropdown_list.classList.contains('hidden')){
        dropdown_list.classList.remove('hidden');
        dropdown_list.classList.add('block');
    }else{
        dropdown_list.classList.remove('block');
        dropdown_list.classList.add('hidden');
    }
});