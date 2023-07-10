/* Sticky menu*/
const sticky_menu = document.getElementById('sticky-menu');
const header_h = document.getElementById('header-theme').clientHeight; 

window.onscroll = function() {
  let currentScrollpos = window.pageYOffset;
  if(currentScrollpos > (header_h - (header_h/4))) {
    sticky_menu.style.transform = "matrix(1, 0, 0, 1, 0, 0)";
  }else {
    sticky_menu.style.transform = "translateY(-100px)";
  }
}
$(document).ready(function(){
  $('.main-slider').slick({
    prevArrow: '<button class="slick-prev btn-slide-left"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button class="slick-prev btn-slide-right"><i class="fas fa-chevron-right"></i></button>',
    speed: 1000,
    autoplay: true,
    autoplaySpeed: 8000,
    fade:true,
    cssEase: 'linear',
    infinite: true,
    pauseOnFocus: true,
    pauseOnHover: false
  });
  /*Slider Principal*/
  $('.slider-single').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    adaptiveHeight: false,
    infinite: true,
    useTransform: true,
    speed: 500,
    autoplay: true,
    autoplaySpeed: 8000,
    verticalSwiping: true,
    cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
    prevArrow: '<button class="slick-prev btn-slide-l"><i class="fas fas fa-chevron-left"></i></button>',
    nextArrow: '<button class="slick-prev btn-slide-r"><i class="fas fa-chevron-right"></i></button>',
  });
  $('.slider-nav')
    .on('init', function(event, slick) {
      $('.slider-nav .slick-slide.slick-current').addClass('is-active');
    })
    .slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      focusOnSelect: false,
      infinite: false,
      vertical:false,
      arrows: true,
      initialSlide:1,
      autoplay:true,
      autoplaySpeed: 6000,
      infinite: true,
      fade: false,
      speed: 800,
      cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
      prevArrow: '<button class="slick-prev btn-slide-l"><i class="fas fas fa-chevron-left"></i></button>',
      nextArrow: '<button class="slick-prev btn-slide-r"><i class="fas fa-chevron-right"></i></button>',
    });
 
  
 
  $('.slider-nav').on('click', '.slick-slide', function(event) {
    event.preventDefault();
    var goToSingleSlide = $(this).data('slick-index');
 
    $('.slider-single').slick('slickGoTo', goToSingleSlide);
  });
  /*Slider Videos*/
  $('.slider-video').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: false,
    adaptiveHeight: true,
    infinite: true,
    useTransform: true,
    speed: 400,
    autoplay: false,
    autoplaySpeed: 6000,
    verticalSwiping: true,
    cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
    responsive : [
      {
        breakpoint: 576,
        settings: {
          slidesToShow:1,
          slidesToScroll: 1
        }
      }
    ]
  });
  $('.slider-video-nav')
    .on('init', function(event, slick) {
      $('.slider-video-nav .slick-slide.slick-current').addClass('is-active');
    })
    .slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      dots: false,
      focusOnSelect: false,
      infinite: false,
      vertical:false,
      arrows: true,
      prevArrow: '<button class="slick-prev btn-slide-vl"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button class="slick-prev btn-slide-vr"><i class="fas fa-chevron-right"></i></button>',
      autoplay:false,
      responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 5,
        }
      }, {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3, 
        }
      }, {
        breakpoint: 420,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        }
      }]
    });
 
  $('.slider-video').on('afterChange', function(event, slick, currentSlide) {
    $('.slider-video-nav').slick('slickGoTo', currentSlide);
    var currrentNavSlideElem = '.slider-video-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
    $('.slider-video-nav .slick-slide.is-active').removeClass('is-active');
    $(currrentNavSlideElem).addClass('is-active');
  });
 
  $('.slider-video-nav').on('click', '.slick-slide', function(event) {
    event.preventDefault();
    var goToSingleSlide = $(this).data('slick-index');
 
    $('.slider-video').slick('slickGoTo', goToSingleSlide);
  });
  //
  $('.slider-n').slick({
    prevArrow: '<button class="slick-prev btn-slide-left"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button class="slick-prev btn-slide-right"><i class="fas fa-chevron-right"></i></button>',
    speed: 2000,
    autoplay: true,
    autoplaySpeed: 8000,
    fade:false,
    slidesToShow:3,
    slidesToScroll: 2,
    responsive : [
      {
        breakpoint: 576,
        settings: {
          slidesToShow:1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow:3,
          slidesToScroll: 2
        }
      }
    ]
  });
  $('.slider-c').slick({
    prevArrow: '<button class="slick-prev btn-slide-left-o"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button class="slick-prev btn-slide-right-o"><i class="fas fa-chevron-right"></i></button>',
    speed: 2000,
    autoplay: true,
    autoplaySpeed: 6000,
    slidesToShow:2,
    slidesToScroll: 1,
    responsive : [
      {
        breakpoint: 576,
        settings: {
          slidesToShow:1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow:1,
          slidesToScroll: 2
        }
      }
    ]
  });
  $('.slider-o').slick({
    prevArrow: '<button class="slick-prev btn-slide-left-o"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button class="slick-prev btn-slide-right-o"><i class="fas fa-chevron-right"></i></button>',
    speed: 1000,
    autoplay: true,
    autoplaySpeed: 5000,
    vertical:true,
    slidesToShow:2,
    slidesToScroll: 1,
    responsive : [
      {
        breakpoint: 992,
        settings: {
          slidesToShow:1,
          slidesToScroll: 1,
          vertical: false
        }
      }
    ]
  });
  $('.slider-conv').slick({
    prevArrow: '<button class="slick-prev btn-slide-left-o"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button class="slick-prev btn-slide-right-o"><i class="fas fa-chevron-right"></i></button>',
    speed: 1000,
    autoplay: true,
    autoplaySpeed: 5000,
    vertical:true,
    slidesToShow:3,
    slidesToScroll: 1,
    responsive : [
      {
        breakpoint: 992,
        settings: {
          slidesToShow:1,
          slidesToScroll: 1,
          vertical: false
        }
      }
    ]
  });
  $('.carousel-links').slick({
    prevArrow: '<button class="slick-prev btn-slide-left-o"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button class="slick-prev btn-slide-right-o"><i class="fas fa-chevron-right"></i></button>',
    speed: 2000,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow:7,
    slidesToScroll: 2,
    responsive : [
      {
        breakpoint: 576,
        settings: {
          slidesToShow:2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow:4,
          slidesToScroll: 1
        }
      }
    ]
  });
  $('.carousel-enlaces').slick({
    prevArrow: '<button class="slick-prev btn-slide-l"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button class="slick-prev btn-slide-right-o"><i class="fas fa-chevron-right"></i></button>',
    speed: 2000,
    autoplay: true,
    autoplaySpeed: 3000,
    slidesToShow:6,
    slidesToScroll: 1,
    //infinite:true,
    arrows:false,
    cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
    responsive : [
      {
        breakpoint: 576,
        settings: {
          slidesToShow:2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow:4,
          slidesToScroll: 1
        }
      }
    ]
  });
});
// ===== Scroll to Top ==== 
$(window).scroll(function() {
  if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
      $('#return-to-top').fadeIn(200);    // Fade in the arrow
  } else {
      $('#return-to-top').fadeOut(200);   // Else fade out the arrow
  }
});
$('#return-to-top').click(function() {      // When arrow is clicked
  $('body,html').animate({
      scrollTop : 0                       // Scroll to top of body
  }, 500);
});

let menuP = document.querySelectorAll('.menu');
for(menu of menuP) {
  let items = menu.children  
  for(item of items) {
    let childItems = item.children;
    for(child of childItems) {
      if(child.tagName ==='UL'){
  
        let el = child.previousElementSibling;
        let icon = document.createElement('i');
        icon.classList = 'fas fa-sort-down';
        el.appendChild(icon);
      }
    }
  }
}
// let menus = document.querySelector(' #sticky-menu .menu');
// let itemss = menus.children;
// for(item of itemss) {
//   let childItems = item.children;
//   for(child of childItems) {
//     if(child.tagName ==='UL'){

//       let el = child.previousElementSibling;
//       let icon = document.createElement('i');
//       icon.classList = 'fas fa-sort-down';
//       el.appendChild(icon);
//     }
//   }
// }
