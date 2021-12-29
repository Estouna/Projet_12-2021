//Menu burger
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".ul-nav");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

//Ferme le menu quand clic sur liens
const navLink = document.querySelectorAll(".nav-link");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}
/*--------X--------FIN MENU BURGER--------X--------*/