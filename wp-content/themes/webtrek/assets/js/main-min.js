!function(e){"use strict";if(e(window).on("load",function(){e("#preloader").length&&e("#preloader").delay(100).fadeOut("slow",function(){e(this).remove()})}),[...document.getElementsByClassName("head-link")].forEach((e,o)=>{e.nextElementSibling.classList.contains("show")||e.classList.add("collapsed")}),e(window).scroll(function(){e(this).scrollTop()>100?e(".back-to-top").fadeIn("slow"):e(".back-to-top").fadeOut("slow")}),e(".back-to-top").click(function(){return e("html, body").animate({scrollTop:0},1500,"easeInOutExpo"),!1}),(new WOW).init(),e(".nav-menu").superfish({animation:{opacity:"show"},speed:400}),e("#nav-menu-container").length){var o=e("#nav-menu-container").clone().prop({id:"mobile-nav"});o.find("> ul").attr({class:"test",id:""}),e("body").append(o),e(".appender").prepend('<div id="mobile-toggle-wrapper"><button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button></div>'),e("body").append('<div id="mobile-body-overly"></div>'),e("#mobile-nav").find(".dropdown-toggle").addClass("chevron-down"),e("#mobile-toggle-wrapper").addClass("text-right order-last align-self-center "),e(".dropdown-toggle").click(function(){e(this).next().toggleClass("menu-item-active"),e(this).nextAll("ul").eq(0).slideToggle(),e(this).toggleClass("chevron-up chevron-down")}),e(document).on("click","#mobile-nav-toggle",function(o){e("body").toggleClass("mobile-nav-active"),e("#mobile-nav-toggle i").toggleClass("fa-times fa-bars"),e("#mobile-body-overly").toggle()}),e(document).click(function(o){var t=e("#mobile-nav, #mobile-nav-toggle");t.is(o.target)||0!==t.has(o.target).length||e("body").hasClass("mobile-nav-active")&&(e("body").removeClass("mobile-nav-active"),e("#mobile-nav-toggle i").toggleClass("fa-times fa-bars"),e("#mobile-body-overly").fadeOut())})}else e("#mobile-nav, #mobile-nav-toggle").length&&e("#mobile-nav, #mobile-nav-toggle").hide();var t=e("#menu-main-menu").children().length;t>=8?(e(window).width()<1400&&(e("#mobile-nav-toggle").show(),e("#nav-menu-container").hide()),e(window).resize(function(){e(window).width()<1400?(e("#mobile-nav-toggle").show(),e("#nav-menu-container").hide()):(e("#mobile-nav-toggle").hide(),e("#nav-menu-container").show())})):t>=6&&(e(window).width()<1200&&(e("#mobile-nav-toggle").show(),e("#nav-menu-container").hide()),e(window).resize(function(){e(window).width()<1200?(e("#mobile-nav-toggle").show(),e("#nav-menu-container").hide()):(e("#mobile-nav-toggle").hide(),e("#nav-menu-container").show())})),e(".nav-menu a, #mobile-nav a, .scrollto").on("click",function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var o=e(this.hash);if(o.length){var t=0;return e("#header").length&&(t=e("#header").outerHeight(),e("#header").hasClass("header-fixed")||(t-=20)),e("html, body").animate({scrollTop:o.offset().top-t},1500,"easeInOutExpo"),e(this).parents(".nav-menu").length&&(e(".nav-menu .menu-active").removeClass("menu-active"),e(this).closest("li").addClass("menu-active")),e("body").hasClass("mobile-nav-active")&&(e("body").removeClass("mobile-nav-active"),e("#mobile-nav-toggle i").toggleClass("fa-times fa-bars"),e("#mobile-body-overly").fadeOut()),!1}}}),e(document).ready(function(){e(".carousel-inner").children()[0].classList.add("active")});var i=e(".carousel"),a=e(".carousel-indicators");i.find(".carousel-inner").children(".carousel-item").each(function(o){0===o?a.append("<li data-target='#introCarousel' data-slide-to='"+o+"' class='active'></li>"):a.append("<li data-target='#introCarousel' data-slide-to='"+o+"'></li>"),e(this).css("background-image","url('"+e(this).children(".carousel-background").children("img").attr("src")+"')"),e(this).children(".carousel-background").remove()}),e(".carousel").swipe({swipe:function(o,t,i,a,n,l){"left"==t&&e(this).carousel("next"),"right"==t&&e(this).carousel("prev")},allowPageScroll:"vertical"}),e("#skills").waypoint(function(){e(".progress .progress-bar").each(function(){e(this).css("width",e(this).attr("aria-valuenow")+"%")})},{offset:"80%"}),e('[data-toggle="counter-up"]').counterUp({delay:10,time:1e3});var n=e(".portfolio-container").isotope({itemSelector:".portfolio-item",layoutMode:"fitRows"});e("#portfolio-flters li").on("click",function(){e("#portfolio-flters li").removeClass("filter-active"),e(this).addClass("filter-active"),n.isotope({filter:e(this).data("filter")})}),e(".clients-carousel").owlCarousel({autoplay:!0,dots:!0,loop:!0,responsive:{0:{items:2},768:{items:4},900:{items:6}}}),e(".testimonials-carousel").length&&e(".testimonials-carousel").owlCarousel({autoplay:!0,dots:!0,loop:!0,items:1}),e(document).ready(function(){if(e(".testimonial-roll").length){var o='<i class="ion-chevron-down"></i>';e(".testimonial-card-header").click(function(t){var i=e(this).next(),a=e(".testimonial-card-content.opened");a.not(i).length&&(a.not(i).removeClass("opened").slideUp("fast"),e(".open-review").html(o)),i.hasClass("opened")?(i.removeClass("opened").slideUp("fast"),e(this).find(".open-review").html(o)):(i.addClass("opened").slideDown("fast"),e(this).find(".open-review").html('<i class="ion-chevron-up"></i>'))}),e(document).click(function(t){e(this).find(".testimonial-card-header"),e(t.target);t.target.closest("i, .testimonial-card-header, .testimonial-card-content")||(e(".testimonial-card-content.opened").removeClass("opened").slideUp("fast"),e(".open-review").html(o))})}e("#input-details").length&&e("#input-details").submit(function(o){o.preventDefault();var t=e(this).attr("method"),i=e(this).serialize();e.ajax({url:"https://gowebtrek.com/wp-admin/admin-ajax.php",type:t,data:i,success:function(o){"OK"==o?(e(".vanish-on-sub").slideUp(300,!1),e(".form-helper").addClass("m-0").html('<i class="ion-thumbsup" style="color:#2AD624;"></i> Thank you, we look forward to reading your input.')):(console.log("something is wrong!"),e("#review-name, #review").css({border:"2px solid #ff1818"}).val(""))}})})})}(jQuery);