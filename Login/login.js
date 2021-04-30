/*codigo js j&g*/
let login= document.querySelector(".login");
let singup=document.querySelector(".singup");

const btnR = document.querySelector("#btnR");
const btnL = document.querySelector("#btnL");


singup.style.transition="all 0.5s";
login.style.transition = "all 0.5s";

function next() {
  login.style.marginLeft = "-100%";
  singup.style.marginLeft="-100%";
}
function prev() {
    login.style.marginLeft="0%";
    singup.style.marginLeft="0%";
}

btnL.addEventListener("click", function () {
    prev();
  });
  
btnR.addEventListener("click", function () {
    next();
  });

