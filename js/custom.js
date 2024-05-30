$(document).ready(function() {


   // $("#hamburger").click(function() {
   //    $(this).toggleClass("active");
   //    $(".sidenav").toggleClass("active-nav");
   // })

   $("#hamburger").click(function() {
      $(".sidenav").toggleClass("active-nav");
   })

   $("#showsidenav").click(function() {
      $(".sidenav").toggleClass("active-nav");
   })

   

   $(".nav-item").click(function(){
      // $(this).children(".dropdown-menus").toggleClass("'active-drop'");
      $(this).siblings(".fal").toggleClass('active-fal');
   });



   function checkWidth() {
      var windowSize = $(window).width();
      if (windowSize > 974) {
           $('#navigration .dropdown > .nav-link').removeClass('enabled').addClass('disabled');
           $('#navigration .dropdown-2 > .dropdown-item').removeClass('enabled').addClass('disabled');
      } else {
           $('#navigration .dropdown > .nav-link').removeClass('disabled').addClass('enabled');
           $('#navigration .dropdown-2 > .dropdown-item').removeClass('disabled').addClass('enabled');
      }
   }
   // Execute on load
   checkWidth();
   // Bind event listener
   $(window).resize(checkWidth);



   $(window).scroll(function() {
      var st = $(this).scrollTop();
      if( st > 10 ) {
         $("#navigration").css({
            background: "#222429"
         });
      } else {
         $("#navigration").css({
            background: "none"
         });
      }
   });




   $(".counter").counterUp({
      delay: 10,
      time: 2000
   });


   var owl = $('#homeSection .owl-carousel');
   owl.owlCarousel({
      animateOut: 'fadeOut',
      loop:true,
      nav:true,
      margin:0,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:false,
      responsive:{
         0:{
            items:1
         }
      }
   });


   // PORTFOLIO SECTION
   var mixer = mixitup('#portfolio');
   $(".indicator > span").click(function() {
      $(".indicator > span").removeClass("active");
      $(this).addClass("active");
   });



   // $('#portfolio').magnificPopup({
   //    type:'image',
   //    delegate: ".img-box > a",
   //    gallery: { enabled: true }
   // });


   // svg like 👍
const likes = document.getElementsByClassName("like");
for (const like of likes) {
    like.innerHTML = "<svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d=\"M104 224H24c-13.255 0-24 10.745-24 24v240c0 13.255 10.745 24 24 24h80c13.255 0 24-10.745 24-24V248c0-13.255-10.745-24-24-24zM64 472c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zM384 81.452c0 42.416-25.97 66.208-33.277 94.548h101.723c33.397 0 59.397 27.746 59.553 58.098.084 17.938-7.546 37.249-19.439 49.197l-.11.11c9.836 23.337 8.237 56.037-9.308 79.469 8.681 25.895-.069 57.704-16.382 74.757 4.298 17.598 2.244 32.575-6.148 44.632C440.202 511.587 389.616 512 346.839 512l-2.845-.001c-48.287-.017-87.806-17.598-119.56-31.725-15.957-7.099-36.821-15.887-52.651-16.178-6.54-.12-11.783-5.457-11.783-11.998v-213.77c0-3.2 1.282-6.271 3.558-8.521 39.614-39.144 56.648-80.587 89.117-113.111 14.804-14.832 20.188-37.236 25.393-58.902C282.515 39.293 291.817 0 312 0c24 0 72 8 72 81.452z\"/></svg>"
}





// time (by chatGPT)
function updateCurrentTime() {
    const now = new Date();
    const hours = now.getHours();
    const minutes = now.getMinutes();
  
    const formattedHours = hours >= 10 ? hours : '0' + hours;
    const formattedMinutes = minutes >= 10 ? minutes : '0' + minutes;
  
    const currentTime = formattedHours + ':' + formattedMinutes;
    document.querySelector('.time').textContent = "today at " + currentTime;
  }

setInterval(updateCurrentTime, 100);

updateCurrentTime();

const likesCount = document.querySelector('.likes_count');

let i = 0;
const intervalTime = 1; // 1 millisecond

function updateLikesCount() {
    if (i >= 1000) {
        clearInterval(intervalId);
    } else {
        likesCount.textContent = i;
        i++;
    }
}

const intervalId = setInterval(updateLikesCount, intervalTime);


   var owl2 = $('#testimonialSection .owl-carousel');
   owl2.owlCarousel({
      animateOut: 'fadeOut',
      loop:true,
      nav:false,
      margin: 30,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true,
      responsive:{
         0: {
            items:1
         },
         768: {
            items:2
         }
      }
   });



   var owl3 = $('#specialFeature .owl-carousel');
   owl3.owlCarousel({
      animateOut: 'fadeOut',
      loop:true,
      nav:false,
      margin: 30,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true,
      responsive:{
         0: {
            items:1
         },
         768: {
            items:2
         },
         1024: {
            items:3
         }
      }
   });



   var wow = new WOW({
      boxClass:     'wow',      // animated element css class (default is wow)
      animateClass: 'animated', // animation css class (default is animated)
      offset:       0,          // distance to the element when triggering the animation (default is 0)
      mobile:       true,       // trigger animations on mobile devices (default is true)
      live:         true,       // act on asynchronously loaded content (default is true)
      callback:     function(box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
      },
      scrollContainer: null,    // optional scroll container selector, otherwise use window,
      resetAnimation: true,     // reset animation on end (default is true)
   });
   wow.init();


   $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
   });


   /*-- SCROLL UP --*/
   $(".scroll-up").fadeOut();
   $(window).scroll(function() {
      if ( $(this).scrollTop()>100 ) {
         $(".scroll-up").fadeIn();
      } else {
         $(".scroll-up").fadeOut();
      };
   });

   $(".scroll-up").click(function() {
      $("html").animate({scrollTop: 0}, 1000);
      return false;
   });




});
