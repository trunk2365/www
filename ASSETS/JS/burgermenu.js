const burgerMenu = document.querySelector('.burger-menu')
const nav = document.getElementById('myNav')
const navActive = document.querySelector('.active')

burgerMenu.addEventListener('click', () => {
    nav.classList.toggle('active');
    console.log('Classe active togglée');
    console.log('Liste des classes :', nav.classList);
})

