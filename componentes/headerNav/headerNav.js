const header = document.getElementById('headerScroll');
const navbar = document.getElementById('navHeaderScroll');
const hamburguer = document.getElementById('hamburguerHeaderScroll');
const arrayBtnsLink = document.querySelectorAll('.linkNavListHeaderScroll');

let scrollAntigo = window.scrollY;
let ativoMobile = false;

// AO ROLAR A PÁGINA
window.addEventListener('scroll', () => {

    if(ativoMobile){
        return;
    }

    if (window.scrollY > scrollAntigo) {
        header.classList.add('active');
    }else{
        header.classList.remove('active');
    }

    scrollAntigo = window.scrollY;

});

//AO CLICAR NO BOTAO HAMBURGUER
hamburguer.addEventListener('click', () => {

    ativoMobile = !ativoMobile;
    hamburguer.setAttribute('aria-expanded', ativoMobile);

    if(!ativoMobile){
        hamburguer.setAttribute('aria-label', "Abrir menu de navegação")
        hamburguer.classList.remove('active');
        navbar.classList.remove('show');
    }else {
        hamburguer.setAttribute('aria-label', "Fechar menu de navegação")
        hamburguer.classList.add('active');
        navbar.classList.add('show');
    }
});

// ADICIONAR AÇÃO AO CLICAR NOS LINKS DA NAV
arrayBtnsLink.forEach(item => {
    item.addEventListener('click', () => {
        ativoMobile = false;
        hamburguer.classList.toggle('active');
        navbar.classList.toggle('show');
    })
})