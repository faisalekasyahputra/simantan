var swiper = new Swiper(".mySwiper", {
    spaceBetween: 20,
    centeredSlides: true,
    effect : "fade",
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

var swiper = new Swiper(".slide-content", {
    slidesPerView : 3 ,
    spaceBetween: 20,
    loop: true,
    centerSlide:'true',
    grabCursor: 'true',
    fade : 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0: {
        slidesPerView : 1 ,
        },  
        520: {
        slidesPerView : 2 ,
        },
        950: {
        slidesPerView : 3 ,
        },
    }
  });



