"use strict";

const imgPrimaria = document.querySelector(".imagen__primaria img");
const imgSecundarias = document.querySelectorAll(".imagen__secundaria");

const focusImg = function (img) {
    img.classList.remove("imagen__inactiva");
};

const blurImg = function (img) {
    img.classList.add("imagen__inactiva");
};

const blurAllImg = function () {
    imgSecundarias.forEach(blurImg);
};

const updateGaleria = function (e, parent) {
    //     img.addEventListener(evento, function (e) {
    const imgSecundaria = e.target;
    imgPrimaria.setAttribute("src", imgSecundaria.getAttribute("src"));
    blurAllImg();
    focusImg(parent);
    //     });
};

imgSecundarias.forEach((img) => {
    img.addEventListener("mouseover", (e) => {
        updateGaleria(e, img);
    });

    img.addEventListener("click", (e) => {
        updateGaleria(e, img);
    });
});
