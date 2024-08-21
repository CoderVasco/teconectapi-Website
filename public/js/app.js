

const hamburger = document.querySelector('.hamburger');
const menuMobile = document.querySelector('.menu-mobile');

hamburger.addEventListener('click', () => {
    menuMobile.classList.toggle('active');
});
