// function pageLoading() {
// document.querySelector('.loader-container').classList.add('hidden');
// }

// setTimeout(pageLoading, 8000);

const load = document.querySelector('.loader-container');

window.addEventListener('load', () => {
  
    setTimeout(() => {
        load.classList.add('hidden');
        
    },11000);

});