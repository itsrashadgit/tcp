(function() {
  'use strict';
  const mySwiper = new Swiper ('#tcpSwiper', {
      loop: true,
      slidesPerView: 'auto',
      centeredSlides: true,

      a11y: true,
      keyboardControl: true,
      grabCursor: true,

      // pagination
      pagination: '.swiper-pagination',
      paginationClickable: true,

      // navigation arrows
      nextButton: '#tcpPrev',
      prevButton: '#tcpNext',
  });
})();

