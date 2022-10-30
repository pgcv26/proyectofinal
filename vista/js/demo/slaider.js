/*codigo para trabajar con imagenes en slaider - pasar imagenes de un lado a otro con botones las cuales son flechas y se encuentran en 
el html */
const slider  = document.querySelector("#slider");
let slidersection = document.querySelectorAll(".slider-section");
let sliderSectionlast = slidersection[slidersection.length -1];

const btnleft = document.querySelector("#btn-left");
const btnright = document.querySelector("#btn-rigth");

slider.insertAdjacentElement('afterbegin',sliderSectionlast);

function  Next() {
    let slidersectionFirst = document.querySelectorAll(".slider-section")[0];
    slider.style.marginleft = "-200%";
    slider.style.transition = "all 0.5s";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('beforeend',slidersectionFirst);
        slider.style.marginleft = "-100%";
    }, 500);
    
}
function prev() {

    let slidersection = document.querySelectorAll(".slider-section");
    let sliderSectionlast = slidersection[slidersection.length -1]; 
    slider.style.marginleft = "0";
    slider.style.transition = "all 0.5s";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('afterbegin',sliderSectionlast);
        slider.style.marginleft = "-100%";
    }, 500);
    
}
btnright.addEventListener('click', function(){
    Next();

});

btnleft.addEventListener('click', function(){
    prev();
});

setInterval(function(){
    Next();
}, 5000 );