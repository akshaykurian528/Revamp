document.addEventListener('DOMContentLoaded', function() {
  // Initialize Swiper instances
  const imagesSwiper = new Swiper('.images-slider', {
    slidesPerView: 1,
    allowTouchMove: false, // Disable touch for images slider
    loop: true, // Enable looping
    speed: 1000, // Smoothen the slide transition speed (1000ms = 1 second)
    autoplay: {
      delay: 4000, // Adjust the delay time as needed (e.g., 3000ms = 3s)
      disableOnInteraction: false, // Continue autoplay after interactions
    },
  });

  const reviewsSwiper = new Swiper('.reviews-slider', {
    slidesPerView: 1,
    loop: true, // Enable looping
    speed: 1000, // Smoothen the slide transition speed (1000ms = 1 second)
    autoplay: {
      delay: 4000, // Adjust the delay time as needed
      disableOnInteraction: false, // Continue autoplay after interactions
    },
  });

  // Synchronize sliders
  imagesSwiper.controller.control = reviewsSwiper;
  reviewsSwiper.controller.control = imagesSwiper;

  // Pause autoplay on hover, resume on mouse leave
  const sliderContainers = document.querySelectorAll('.images-slider, .reviews-slider');

  sliderContainers.forEach((slider) => {
    slider.addEventListener('mouseenter', function() {
      imagesSwiper.autoplay.stop();
      reviewsSwiper.autoplay.stop();
    });

    slider.addEventListener('mouseleave', function() {
      imagesSwiper.autoplay.start();
      reviewsSwiper.autoplay.start();
    });
  });
});
