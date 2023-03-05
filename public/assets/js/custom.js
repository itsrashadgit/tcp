// (function() {
//   'use strict';
//   const mySwiper = new Swiper ('#tcpSwiper', {
//       loop: true,
//       slidesPerView: 'auto',
//       centeredSlides: true,

//       a11y: true,
//       keyboardControl: true,
//       grabCursor: true,

//       // pagination
//       pagination: '.swiper-pagination',
//       paginationClickable: true,

//       // navigation arrows
//       nextButton: '#tcpPrev',
//       prevButton: '#tcpNext',
//   });
// })();


$(document).ready(function() {

    $(".messenger-toggler").on("click", function() {

        const cls = $(".tophive-bp-messenger-sticky-main").attr("class");

        if (cls.includes("messenger-open")) {
            $(".tophive-bp-messenger-sticky-main").removeClass("messenger-open");
        } else {
            $(".tophive-bp-messenger-sticky-main").addClass("messenger-open");
        }


    });


    $(document).on("click", function(e){

        // e.preventDefault();
        // e.stopPropagation();

        const elem = document.getElementsByClassName("sharing-options open");
        let target = e.target;
        if(target.tagName == "svg"){
            target = target.parentElement;
        }
        const targetClass = target.className;

        if(!targetClass.includes("share-track")){
            if(elem.length > 0) elem[0].classList.remove("open");
        }

    });

});


$(document).ready(function(e) {
    $('img[usemap]').tcpImageMaps();
});
