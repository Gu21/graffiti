const parallax = document.querySelector('.parallax');

window.addEventListener('scroll', () => {


let scrollParallax = window.pageYOffset;
// console.log('Offset:' + scrollParallax);
// console.log('scrollParallax * 0.1' +  scrollParallax * 0.7);

parallax.style.backgroundPositionY = -scrollParallax * 0.1 + "px";

});