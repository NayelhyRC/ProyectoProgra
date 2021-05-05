let slider = document.querySelector(".slider-contenedor");
let sliderIndividual = document.querySelectorAll(".contenido-slider");
let contador = 1;
let intervalo = 3000;
var width;
function VerficarWitdh() {
  width = sliderIndividual[0].clientWidth;
}
setInterval(function () {
  VerficarWitdh();
}, 100);
setInterval(function () {
  slides();
}, intervalo);

function slides() {
  slider.style.transform = "translate(" + -width * contador + "px)";
  slider.style.transition = "transform 3s";
  contador++;

  if (contador === sliderIndividual.length) {
    setTimeout(function () {
      slider.style.transform = "translate(0px)";
      slider.style.transition = "transform 0s";
      contador = 1;
    }, 2790);
  }
}
