const navBar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {

 if (window.scrollY > navBar.offsetHeight) {
     
    let scroll = document.querySelector('.scrollNav');
    navBar.classList.add('scrollNav');
    scroll.style.padding = "10px";

 }else {

    navBar.classList.remove('scrollNav');
 }



});
