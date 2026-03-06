// Recuperer ce code dans swiper.js (overflow) 

document.addEventListener('DOMContentLoaded', function () {

    var swiper = new Swiper(".swiper", {
    effect: "coverflow",
    grabCursor: true,
    loop: true,
    centeredSlides: true,
    slidesPerView: 3,
    spaceBetween: 30,
    coverflowEffect: {
      rotate: 70,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    }
  });

});