//VARIABLES DE REGISTRO 
const popup = document.getElementById('popup');
const abrir = document.getElementById('registrar');
const overlay = document.getElementById('overlay');
const cerrar = document.getElementById('cerrar-popup');

abrir.addEventListener('click', () => {
    overlay.classList.add('active');
    popup.classList.add('active');
});

cerrar.addEventListener('click', () => {
    overlay.classList.remove('active');
    popup.classList.remove('active');
});



//VARIABLES DE INICIO DE SESIÓN
const popup2 = document.getElementById('popup2');
const abrir2 = document.getElementById('iniciarsesion');
const overlay2 = document.getElementById('overlay2');
const cerrar2 = document.getElementById('cerrar-popup2');

abrir2.addEventListener('click', () => {
    overlay2.classList.add('active');
    popup2.classList.add('active');
});

cerrar2.addEventListener('click', () => {
    overlay2.classList.remove('active');
    popup2.classList.remove('active');
});

