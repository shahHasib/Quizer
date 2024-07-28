document.addEventListener('DOMContentLoaded', () => {
    const menu = document.querySelector('.menu');
    const nav = document.querySelector('nav');
    const links = document.querySelector('.links');
    
    menu.addEventListener('click', () => {
    nav.classList.toggle('open');
    });
    
    links.addEventListener('click', () => {
    if (nav.classList.contains('open')) {
    nav.classList.remove('open');
    }
    });
});
