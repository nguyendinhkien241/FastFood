// Show Password
const input = document.querySelector('.input-password');
const eye = document.querySelector('.show-password');

eye.addEventListener('click', function() {
    if(input.type === 'password') {
        input.type = 'text';
        eye.classList.remove('fa-eye');
        eye.classList.add('fa-eye-slash')
    } else {
        input.type = 'password';
        eye.classList.remove('fa-eye-slash')
        eye.classList.add('fa-eye');
    }
}) 

var isOpen = false;

// Open - Close Login

const btnLogin = document.querySelector('.btnLogin-popup');
const formBox = document.querySelector('.form-box');
const iconClose = document.querySelector('.icon-close');
var container = document.querySelector('.container');


btnLogin.addEventListener('click', function() {
    if(isOpen === false) {
        formBox.classList.add('appear');
        isOpen = true;
    }
})

iconClose.onclick = function() {
    formBox.classList.remove('appear');
    isOpen = false;
}

// Open - Close Booking

const formBook = document.querySelector('.form-book');
const btnBook = document.querySelector('.btn-book');
const iconBookClose = document.querySelector('.form-book .icon-close');



btnBook.addEventListener('click', function() {
    if(isOpen === false) {
        formBook.classList.add('appear');
        isOpen = true;
    }
});

iconBookClose.addEventListener('click', function() {
    formBook.classList.remove('appear');
    isOpen = false;
})

// Open - Contact

const formContact = document.querySelector('.form-contact');
const btnContact = document.querySelector('.btn-contact');
btnContact.addEventListener('click', function() {
    if(isOpen === false) {
        formContact.classList.add('open');
        isOpen = true;
    }
})

const closeContact = document.querySelector('.form-contact .icon-close');

closeContact.onclick = function() {
    formContact.classList.remove('open');
    isOpen = false;
}