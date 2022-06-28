jQuery(window).on("load", function() {

  AOS.init({
    duration: 1400,
    once: true
  });

  jQuery("a.smoothscroll").click(function (e) {
    e.preventDefault();
    jQuery("html, body").animate({
      scrollTop: jQuery(jQuery(this).attr("href")).offset().top - 20
    }, 500);
  });

  jQuery( ".mobile-menu-toggle" ).click(function() {
    jQuery('.menu-area').toggleClass('active');
    jQuery('body').toggleClass('scroll-lock');
  });

  jQuery( ".menu-area .close-menu" ).click(function() {
    jQuery('.menu-area').toggleClass('active');
    jQuery('body').toggleClass('scroll-lock');
  });

});

$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 800) {
    $('.back-to-top').addClass('active');
  } else {
    $('.back-to-top').removeClass('active');;
  }
});