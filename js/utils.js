const buttonNav = document.querySelector('#buttonNav');

buttonNav.addEventListener('click', () => {
    const principalMenu = document.querySelector('.principalMenu');
    principalMenu.classList.toggle('principalMenu--show');
});

const links = document.querySelectorAll('.principalMenu__menu__item__link');
const btnWantToKnow = document.querySelector('#btnWantToKnow');

for (const link of links) {
    link.addEventListener('click', clickHandler);
}

btnWantToKnow.addEventListener('click', clickHandler);

function clickHandler(e) {
    e.preventDefault();
    
    const href = this.getAttribute('href');
    const offsetTop = document.querySelector(`#${href}`).offsetTop;

    scroll({
        top: offsetTop,
        behavior: 'smooth'
    });
}