document.addEventListener('DOMContentLoaded', function() {
    // Initialize Swiper instances
const imagesSwiper = new Swiper('.images-slider', {
    slidesPerView: 1,
    allowTouchMove: false, // Disable touch for images slider
  });
  
  const reviewsSwiper = new Swiper('.reviews-slider', {
    slidesPerView: 1,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  
  // Synchronize sliders
  imagesSwiper.controller.control = reviewsSwiper;
  reviewsSwiper.controller.control = imagesSwiper;
  
});
