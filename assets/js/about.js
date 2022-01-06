const titleAbout = document.querySelector(".title-about-home");
const cardHome = document.querySelectorAll(".card");
console.log(cardHome);
// Make the image appear on the scroll
window.addEventListener("scroll", () => {

//   console.log(window.innerHeight);
//   console.log(window.scrollY);
//   console.log(document.body.offsetHeight);

  scrollResult =
    (window.innerHeight + window.scrollY) / document.body.offsetHeight;
  console.log(scrollResult);

  // Show the image
  if (scrollResult > 0.40) {
    titleAbout.style.opacity = "1";
    titleAbout.style.transform = "none";
  };

  if (scrollResult > 0.50) {
    cardHome[0].style.opacity = "1";
    cardHome[0].style.transform = "none";
    setTimeout(() => {
      cardHome[1].style.opacity = "1";
      cardHome[1].style.transform = "none";
    }, 1000);
    setTimeout(() => {
        cardHome[2].style.opacity = "1";
        cardHome[2].style.transform = "none";
      }, 1500);
  };
});
