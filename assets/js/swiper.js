jQuery(document).ready(function ($) {
  var sl_roadmap3 = new Swiper(".sl-roadmap3", {
    spaceBetween: 30,
    slidesPerView: 2,
    freeMode: true,
    watchSlidesProgress: true,
    breakpoints: {
      991: {
        slidesPerView: 3,
        spaceBetween: 0,
      },
      1200: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
  });

  var sl_roadmap3_thumb = new Swiper(".sl-roadmap3-thumb", {
    spaceBetween: 0,
    effect: "fadeInRight",
    speed: 2500,
    freeMode: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      type: "progressbar",
    },
    thumbs: {
      swiper: sl_roadmap3,
    },
  });
});
