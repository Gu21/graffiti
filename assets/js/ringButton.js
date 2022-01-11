const soundButton = document.querySelector(".btn");
const soundButton1 = document.querySelector(".btn-1");
const ring = () => {
  const audio = new Audio();
  audio.src = "sound/bombePeinture.mp3";
  audio.play();
};

soundButton1.addEventListener("click", () => {
    soundButton1.classList.add('audio');
  return ring();
});
