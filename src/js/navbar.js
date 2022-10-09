"use strict";

const btnMenu = document.querySelector(".btn-menu");
const navLinks = document.querySelector(".links");

btnMenu.addEventListener("click", function (e) {
    if (navLinks.classList.contains("mostrar")) {
        navLinks.classList.remove("mostrar");
    } else {
        navLinks.classList.add("mostrar");
    }
});
