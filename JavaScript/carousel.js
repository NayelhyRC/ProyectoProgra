/*codigo js j&g*/
const slider = document.querySelector("#slider");
let sliderSection = document.querySelectorAll(".slider-section");
let sliderSectionlast = sliderSection[sliderSection.length - 1];

const btnR = document.querySelector("#btnR");
const btnL = document.querySelector("#btnL");

slider.insertAdjacentElement("afterbegin", sliderSectionlast);

function next() {
  let sliderSectionfirst = document.querySelectorAll(".slider-section")[0];
  slider.style.marginLeft = "-200%";
  slider.style.transition = "all 0.5s";
  setTimeout(function () {
    slider.style.transition = "none";
    slider.insertAdjacentElement("beforeend", sliderSectionfirst);
    slider.style.marginLeft = "-100%";
  }, 500);
}
function prev() {
  let sliderSection = document.querySelectorAll(".slider-section");
  let sliderSectionlast = sliderSection[sliderSection.length - 1];
  slider.style.marginLeft = "0";
  slider.style.transition = "all 0.5s";
  setTimeout(function () {
    slider.style.transition = "none";
    slider.insertAdjacentElement("afterbegin", sliderSectionlast);
    slider.style.marginLeft = "-100%";
  }, 500);
}

btnL.addEventListener("click", function () {
  prev();
});

btnR.addEventListener("click", function () {
  next();
});
