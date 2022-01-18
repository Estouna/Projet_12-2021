/*---------------WATER EFFECT---------------*/

$('.container, .container2').ripples({
  resolution: 500,
  dropRadius: 20,
  perturbance: 0.007,
});
setInterval(function () {
  var $el = $('.container, .container2');
  var x = Math.random() * $el.outerWidth();
  var y = Math.random() * $el.outerHeight();
  var dropRadius = 20;
  var strength = 0.04 + Math.random() * 0.04;

  $el.ripples('drop', x, y, dropRadius, strength);
}, 100000);

/*--------X--------FIN WATER EFFECT--------X--------*/


/*---------------CUBE---------------*/

let cube = document.querySelector('.cube');
let radioGroup = document.querySelector('.radio-group');
let currentClass = '';

function changeSide() {
  let checkedRadio = radioGroup.querySelector(':checked');
  let showClass = 'show-' + checkedRadio.value;
  if (currentClass) {
    cube.classList.remove(currentClass);
  }
  cube.classList.add(showClass);
  currentClass = showClass;
}
// set initial side
changeSide();

radioGroup.addEventListener('change', changeSide);

/*--------X--------FIN CUBE--------X--------*/

/*---------------CONTENU CUBE---------------*/

let fenetre1 = document.getElementById("fenetre1")
let fenetre2 = document.getElementById("fenetre2")
let fenetre3 = document.getElementById("fenetre3")
let fenetre4 = document.getElementById("fenetre4")
let fenetre5 = document.getElementById("fenetre5")
let fenetre6 = document.getElementById("fenetre6")

face1.onclick = displayFenetre1;
function displayFenetre1() {
  fenetre1.style.display = "block";
};
face2.onclick = displayFenetre2;
function displayFenetre2() {
  fenetre2.style.display = "block";
};
face3.onclick = displayFenetre3;
function displayFenetre3() {
  fenetre3.style.display = "block";
};
face4.onclick = displayFenetre4;
function displayFenetre4() {
  fenetre4.style.display = "block";
};
face5.onclick = displayFenetre5;
function displayFenetre5() {
  fenetre5.style.display = "block";
};
face6.onclick = displayFenetre6;
function displayFenetre6() {
  fenetre6.style.display = "block";
};


//Ferme la fenetre quand clic sur croix
const span = document.querySelectorAll(".close");

span.forEach(n => n.addEventListener("click", closeOverlay));

function closeOverlay() {
  fenetre1.style.display = "none";
  fenetre2.style.display = "none";
  fenetre3.style.display = "none";
  fenetre4.style.display = "none";
  fenetre5.style.display = "none";
  fenetre6.style.display = "none";
}