const closedEyeIcon = document.querySelector('#closed-eye-icon-pwd');
const openedEyeIcon = document.querySelector('#opened-eye-icon-pwd');
const password_input = document.querySelector('#password');


const closedEyeIconCPwd = document.querySelector('#closed-eye-icon-cpwd');
const openedEyeIconCPwd = document.querySelector('#opened-eye-icon-cpwd');
const password_input_confirmation = document.querySelector('#password_confirmation');


closedEyeIcon.addEventListener('click', () => {
    if(openedEyeIcon.classList.contains('hidden')){
        openedEyeIcon.classList.remove('hidden');
        closedEyeIcon.classList.add('hidden');   
        password_input.type = 'text';
    }
});

openedEyeIcon.addEventListener('click', () => {
    if(closedEyeIcon.classList.contains('hidden')){
        closedEyeIcon.classList.remove('hidden');
        openedEyeIcon.classList.add('hidden');   
        password_input.type = 'password';
    }
});

// Password Confirmation Script

closedEyeIconCPwd.addEventListener('click', () => {
    if(openedEyeIconCPwd.classList.contains('hidden')){
        openedEyeIconCPwd.classList.remove('hidden');
        closedEyeIconCPwd.classList.add('hidden');   
        password_input_confirmation.type = 'password';
    }
});

openedEyeIconCPwd.addEventListener('click', () => {
    if(closedEyeIconCPwd.classList.contains('hidden')){
        closedEyeIconCPwd.classList.remove('hidden');
        openedEyeIconCPwd.classList.add('hidden');   
        password_input_confirmation.type = 'text';
    }
});