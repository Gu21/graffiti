const soundButton = document.querySelector(".btn");
const soundButton1 =  document.querySelector(".btn-1");
const ring =  (key) => {
const audio = new Audio;
audio.src = key + ".mp3";
audio.play();
}

soundButton1.addEventListener('click', () => {

  
ring();
});
