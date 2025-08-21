
document.addEventListener('DOMContentLoaded',function () {
    const loader = document.getElementById('page_loader');
    loader.style.display = 'none';
})


// $(document).ready(function() {
//     var $swiper = $(".swiper-container");
//     var $bottomSlide = null; 
//     var $bottomSlideContent = null; 


//     var mySwiper = new Swiper(".swiper-container", {
//       slidesPerView: 5,
//       loop: true,
//       effect: 'coverflow',
//       grabCursor: true,
//       // slidesPerView: 'auto',
//       coverflowEffect: {
//         rotate: 0,
//         stretch: 0,
//         depth: 100,
//         modifier: 2.5
//       },
//       autoplay: {
//         delay: 3000,
//         disableOnInteraction: false,
//       },
//       pagination: {
//         el: ".swiper-pagination",
//         clickable: true,
//       },
//       breakpoints: {
//         320: {
//           slidesPerView: 1,
//         },
//         480: {
//           slidesPerView: 2,
//         },
//         768: {
//           slidesPerView: 3,
//         },
//         992: {
//           slidesPerView: 5,
//         }
//       }
//     });
    
//   });
 



$('.owl_clients').owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    autoplay: true,
    slideTransition: 'linear',
    autoplayTimeout: 6000,
    autoplaySpeed: 6000,
    center: true,
    margin:10,
    responsive: {
        0: {
            items: 3
        },
        480: {
          items: 4
      },
        575: {
          items: 4
      },
        768: {
            items: 5
        },
        992: {
          items: 6
      },
        1199: {
            items: 7
        },
        1399: {
          items: 8
      }

    }
})

$('.screenshot_slider').owlCarousel({
  loop: true,
  responsiveClass: true,
  nav: false,
  margin: 0,    
  autoplay: true,
  autoplayTimeout: 4000,
  smartSpeed: 400,
  center: true,
  stagePadding:12,
  responsive: {
      0: {
          items: 1,
      },
      576: {
          items: 3
      },
      1200: {
          items: 5
      }
  }
});

$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        }
    }
})

