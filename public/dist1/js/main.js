//body preloader
$(window).on('load', function () {
  setTimeout(function () { // allowing 3 secs to fade out loader
    $('.page-loader').fadeOut('slow');
  }, 3500);
});
/*-------------------------------------
    On Scroll Header fixed to top
    -------------------------------------*/
$(window).scroll(function () {
  if ($(window).scrollTop() >= 300) {
    $('header').addClass('fixed-top');
  }
  else {
    $('header').removeClass('fixed-top');
  }
});

//menu toggel
$('.menu-toggle').on('click', function () {
  $('.btn-wrapper').toggleClass('menu--is-revealed');
});

// mega menu js
$(".megamenu").on("click", function (e) {
  e.stopPropagation();
});

// On Scroll back to top
$(window).on('scroll', function () {

  // Back Top Button
  if ($(window).scrollTop() > 500) {
    $('.scrollup').addClass('back-top');
  } else {
    $('.scrollup').removeClass('back-top');
  }
});
// On Click Section Switch
// used for back-top
$('[data-type="section-switch"]').on('click', function () {
  if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
    var target = $(this.hash);
    if (target.length > 0) {

      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      $('html,body').animate({
        scrollTop: target.offset().top
      }, 1000);
      return false;
    }
  }
});

//Zodic slider
$('#carouselZodic').owlCarousel({
  loop: true,
  margin: 15,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  nav: false,
  dots: false,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 3
    },
    1000: {
      items: 6
    }
  }
});

//testimonial slider
$('#carouselTestimonials').owlCarousel({
  loop: true,
  margin: 30,
  nav: true,
  dots: false,
  items: 3,
  center: true,
  navText: ["<i class='bi bi-arrow-left-short'></i>", "<i class='bi bi-arrow-right-short'></i>"],
  responsiveClass: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 3
    }
  }
});

//services feature slider
$('#carouselService').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  items: 3,
  center: true,
  navText: ["<i class='bi bi-arrow-left-short'></i>", "<i class='bi bi-arrow-right-short'></i>"],
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 3
    }
  }
})

// AOS
$(document).ready(function () {
  AOS.init({
    duration: 800,
    offset: 520,
  });
});

// Background Set
$('.set-bg').each(function () {
  var bg = $(this).data('setbg');
  $(this).css('background-image', 'url(' + bg + ')');
});

//Related Post Slider
$(document).ready(function () {
  $('#carouselRelatedPost').owlCarousel({
    dots: false,
    nav: true,
    loop: true,
    items: 2,
    navText: ["<i class='bi bi-arrow-left-short'></i>", "<i class='bi bi-arrow-right-short'></i>"],
    responsiveClass: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
    }
  });
});

//gallery - blog Post Slider
$(document).ready(function () {
  $('#carouselGalleryPost').owlCarousel({
    dots: false,
    nav: true,
    items: 1,
    navText: ["<i class='bi bi-arrow-left-short'></i>", "<i class='bi bi-arrow-right-short'></i>"],
  });
});

//gallery - slider
$(document).ready(function () {
  $('.carouselGallerySlider').owlCarousel({
    dots: false,
    nav: true,
    loop: true,
    margin: 20,
    center: true,
    items: 3,
    navText: ["<i class='bi bi-arrow-left-short'></i>", "<i class='bi bi-arrow-right-short'></i>"],
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      600: {
        items: 2,
        nav: false
      },
      1000: {
        items: 3,
        nav: true,
      }
    }
  });
});

// FIlter
$('.filter-controls li').on('click', function () {
  $('.filter-controls li').removeClass('active');
  $(this).addClass('active');
});
if ($('.filter-gallery').length > 0) {
  var containerEl = document.querySelector('.filter-gallery');
  var mixer = mixitup(containerEl);
}

//partner slider
$(document).ready(function () {
  $('#carouselPartner').owlCarousel({
    dots: false,
    nav: false,
    loop: true,
    autoplay: true,
    autoplaySpeed: 2000,
    items: 5,
    margin: 30,
    center: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 2,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      }
    }
  });
});

// Search model
$('.search-switch').on('click', function () {
  $('.search-model').fadeIn(400);
});

$('.search-close-switch').on('click', function () {
  $('.search-model').fadeOut(400, function () {
    $('#search-input').val('');
  });
});

// wishlist box
$('.item-wrap .notify-btn').on('click', function () {
  $('.notify-box').toggleClass('active');
  $('.user-content').removeClass('active');
});

//hero - index dark - slick slider
$(document).ready(function () {
  $('.carouselheroDark').owlCarousel({
    dots: true,
    nav: false,
    autoplay: true,
    items: 3,
    margin: 0,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      }
    }
  });
});

// plus minus button
$(document).ready(function () {
  $('.button-minus').click(function () {
    var $input = $(this).parent().find('input');
    var count = parseInt($input.val()) - 1;
    count = count < 1 ? 1 : count;
    $input.val(count);
    $input.change();
    return false;
  });
  $('.button-plus').click(function () {
    var $input = $(this).parent().find('input');
    $input.val(parseInt($input.val()) + 1);
    $input.change();
    return false;
  });
});

// tooltip function
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

//product details - slider
$(document).ready(function () {
  $('.carouselProduct').owlCarousel({
    items: 1,
    loop: false,
    center: true,
    margin: 10,
    URLhashListener: true,
    autoplayHoverPause: true,
    startPosition: 'URLHash'
  });
});

// zoom product gallery

function zoom(e) {
  var zoomer = e.currentTarget;
  e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
  e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
  x = offsetX / zoomer.offsetWidth * 100
  y = offsetY / zoomer.offsetHeight * 100
  zoomer.style.backgroundPosition = x + '% ' + y + '%';
}