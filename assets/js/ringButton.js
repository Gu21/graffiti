const soundButton = document.querySelectorAll(".btn");
const soundButton1 = document.querySelector(".btn-1");
const ring = () => {
  const audio = new Audio();
  audio.src = "sound/peinture.mp3";
  audio.play();
};

soundButton1.addEventListener("click", () => {
  ring();
});

soundButton.forEach((btn) => {
  btn.addEventListener("click", () => {
    ring();
  });
});
