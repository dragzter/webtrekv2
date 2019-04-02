(function ($) {
  "use strict";

  // Preloader
  $(window).on('load', function () {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('slow', function () {
        $(this).remove();
      });
    }
  });



  // Accordion Collapse color change
  var acc = document.getElementsByClassName('head-link');
  var accArr = [...acc];

  accArr.forEach((cur,index) => {
    if (!cur.nextElementSibling.classList.contains('show')) {
      cur.classList.add('collapsed');
    }
  });
  

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
    return false;
  });

  // Initiate the wowjs animation library
  new WOW().init();

  // Initiate superfish on nav menu
  $('.nav-menu').superfish({
    animation: {
      opacity: 'show'
    },
    speed: 400
  });

  // Mobile Navigation
  if ($('#nav-menu-container').length) {
    var $mobile_nav = $('#nav-menu-container').clone().prop({
      id: 'mobile-nav'
    });
    $mobile_nav.find('> ul').attr({
      'class': 'test',
      'id': ''
    });
    $('body').append($mobile_nav);
    $('.appender').prepend('<div id="mobile-toggle-wrapper"><button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button></div>');
    $('body').append('<div id="mobile-body-overly"></div>');
    $('#mobile-nav').find('.dropdown-toggle').addClass('chevron-down');

    $('#mobile-toggle-wrapper').addClass('text-right order-last align-self-center ')

    $('.dropdown-toggle').click(function() {
      $(this).next().toggleClass('menu-item-active');
      $(this).nextAll('ul').eq(0).slideToggle();
      $(this).toggleClass("chevron-up chevron-down");
    });

    $(document).on('click', '#mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
      $('#mobile-body-overly').toggle();
      
    });

    $(document).click(function(e) {
      var container = $("#mobile-nav, #mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
      }
    });
  } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
    $("#mobile-nav, #mobile-nav-toggle").hide();
  }

  var $menuChildren = $('#menu-main-menu').children().length;

  if ($menuChildren >= 8 ) {
    if ($(window).width() < 1400) {
      $('#mobile-nav-toggle').show();
      $('#nav-menu-container').hide();
    }
  
    $(window).resize(function(){
      var $ww = $(window).width();
        if ($ww < 1400) {
          $('#mobile-nav-toggle').show();
          $('#nav-menu-container').hide();
        } else {
          $('#mobile-nav-toggle').hide();
          $('#nav-menu-container').show();
        }
    });
      
  } else if ($menuChildren >= 6) {
    
    if ($(window).width() < 1200) {
      $('#mobile-nav-toggle').show();
      $('#nav-menu-container').hide();
    }

    $(window).resize(function(){
      var $ww = $(window).width();
        if ($ww < 1200) {
          $('#mobile-nav-toggle').show();
          $('#nav-menu-container').hide();
        } else {
          $('#mobile-nav-toggle').hide();
          $('#nav-menu-container').show();
        }
    });
  }



  console.log($(window).width())

  // Smooth scroll for the menu and links with .scrollto classes
  $('.nav-menu a, #mobile-nav a, .scrollto').on('click', function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        var top_space = 0;

        if ($('#header').length) {
          top_space = $('#header').outerHeight();

          if( ! $('#header').hasClass('header-fixed') ) {
            top_space = top_space - 20;
          }
        }

        $('html, body').animate({
          scrollTop: target.offset().top - top_space
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu').length) {
          $('.nav-menu .menu-active').removeClass('menu-active');
          $(this).closest('li').addClass('menu-active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
        return false;
      }
    }
  });

  // Intro carousel

  // Kick off the carousel
  $(document).ready(function() {
    var introInner = $('.carousel-inner');
    introInner.children()[0].classList.add('active');
  })
  

  var introCarousel = $(".carousel");
  var introCarouselIndicators = $(".carousel-indicators");
  introCarousel.find(".carousel-inner").children(".carousel-item").each(function(index) {
    (index === 0) ?
    introCarouselIndicators.append("<li data-target='#introCarousel' data-slide-to='" + index + "' class='active'></li>") :
    introCarouselIndicators.append("<li data-target='#introCarousel' data-slide-to='" + index + "'></li>");

    $(this).css("background-image", "url('" + $(this).children('.carousel-background').children('img').attr('src') +"')");
    $(this).children('.carousel-background').remove();
  });

  $(".carousel").swipe({
    swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
      if (direction == 'left') $(this).carousel('next');
      if (direction == 'right') $(this).carousel('prev');
    },
    allowPageScroll:"vertical",
    
  });

  // Skills section
  $('#skills').waypoint(function() {
    $('.progress .progress-bar').each(function() {
      $(this).css("width", $(this).attr("aria-valuenow") + '%');
    });
  }, { offset: '80%'} );

  // jQuery counterUp (used in Facts section)
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 1000
  });

  // Porfolio isotope and filter
  var portfolioIsotope = $('.portfolio-container').isotope({
    itemSelector: '.portfolio-item',
    layoutMode: 'fitRows'
  });

  $('#portfolio-flters li').on( 'click', function() {
    $("#portfolio-flters li").removeClass('filter-active');
    $(this).addClass('filter-active');

    portfolioIsotope.isotope({ filter: $(this).data('filter') });
  });

  // Clients carousel (uses the Owl Carousel library)
  $(".clients-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    responsive: { 0: { items: 2 }, 768: { items: 4 }, 900: { items: 6 }
    }
  });

  // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonials-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1
  });


  $(document).ready(function(){
    $('#input-details').submit(function(e){

    e.preventDefault();
    var method = $(this).attr('method');
    var formData = $(this).serialize();
    var ajaxurl = 'https://gowebtrek.com/wp-admin/admin-ajax.php'

      $.ajax({
        url: ajaxurl,
        type: method,
        data: formData,
        success: function(data){
          
          if (data == 'OK') {
            $('.vanish-on-sub').slideUp(300, false);
            $('.form-helper').addClass('m-0').html('<i class="ion-thumbsup" style="color:#2AD624;"></i> Thank you, we look forward to reading your input.');
          } else {
            console.log('something is wrong!');
            $('#review-name, #review').css({
              "border":"2px solid #ff1818",
            }).val('');
          }
        }
      })
    })
})

})(jQuery);

