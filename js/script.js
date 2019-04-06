const openMenuBtn = document.querySelector(".main-header--mob-btn");
const closeMenuBtn = document.querySelector(".nav--close");
const nav = document.querySelector("nav");

openMenuBtn.addEventListener("click", function() {
	nav.classList.toggle("nav__visible");
});

