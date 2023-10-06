let search = document.querySelector('.search-box');

document.querySelector('#search-icon').onclick = () =>{
    search.classList.toggle('active');
    cart.classList.remove('active');
    user.classList.remove('active');
    navbar.classList.remove('active');
}

let cart = document.querySelector('.cart');

document.querySelector('#cart-icon').onclick = () =>{
    cart.classList.toggle('active');
    search.classList.remove('active');
    user.classList.remove('active');
    navbar.classList.remove('active');
}

let user = document.querySelector('.user');

document.querySelector('#user-icon').onclick = () =>{
    user.classList.toggle('active');
    search.classList.remove('active');
    cart.classList.remove('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-icon').onclick = () =>{
    navbar.classList.toggle('active');
    search.classList.remove('active');
    cart.classList.remove('active');
    user.classList.remove('active');
}

window.onscroll = () => {
  search.classList.remove('active');
  cart.classList.remove('active');
  user.classList.remove('active');
  navbar.classList.remove('active');
}

//nav scroll
let header = document.querySelector('header');

window.addEventListener('scroll', () => {
    header.classList.toggle('shadow', window.scrollY > 0);
});

// Declarar la variable swiper en el ámbito global
var swiper;

document.addEventListener("DOMContentLoaded", function () {
  swiper = new Swiper(".tranding-slider", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 2.5,
    },
    autoplay: {
      delay: 3000, // Tiempo de espera entre transiciones en milisegundos
      disableOnInteraction: false, // El autoplay no se detendrá al interactuar con el slider
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // Obtiene todos los slides
  var slides = document.querySelectorAll(".tranding-slide");

  // Agrega el evento click a cada slide
  slides.forEach(function (slide) {
    slide.addEventListener("click", function () {
      // Obtiene el identificador único del slide seleccionado
      var slideId = slide.dataset.slideId;

      // Detiene el carrusel
      swiper.autoplay.stop();

      // Centra el slide seleccionado
      swiper.slideTo(slideId - 1); // Resta 1 porque los índices en Swiper comienzan en 0

      // Reanuda el carrusel después de 2 segundos (ajústalo según tus necesidades)
      setTimeout(function () {
        swiper.autoplay.start();
      }, 10000);
    });
  });
});
