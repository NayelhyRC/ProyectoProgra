let LS = document.querySelector("#contenedor");
let Modal = document.querySelector("#Modal");
let btM= document.querySelector("#Mostrar");

btM.addEventListener("click",function(){
  Modal.style.opacity="1";
  Modal.style.visibility="visible";
  LS.style.transition="all 1200ms";
  LS.style.transform="translateY(0%)";
})
window.addEventListener("click",function(e){
  console.log(e.target);
  if(e.target==Modal){
    Modal.style.visibility="hidden";
    LS.style.transition="all 1500ms ease";
    LS.style.transform="translateY(-200%)";
  }
})
