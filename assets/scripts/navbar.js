const menuBtn = document.querySelector('.menu-mobile');
const nav = document.querySelector('nav');
let open = false;


const openMenu = () => {
    if(open){
        nav.style.top = '-100vh';
        open = false;
        menuBtn.innerHTML = 'menu <i class="fas fa-bars"></i>'
    } else {
        nav.style.top = 0;
        open = true;
        setTimeout(() => {
            menuBtn.innerHTML = '<i class="fas fa-times"></i>'
        }, 200);
    }
}


menuBtn.addEventListener('click' , () => {
    openMenu();
});