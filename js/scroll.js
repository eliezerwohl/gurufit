jQuery(document).ready(function($) {
  var navbar= $("#navbar");
  scrollFunction()
  $(document).scroll(function() {
    scrollFunction()
  });
  function scrollFunction() {
    if ($(window).width() > 767) {
      if ($(this).scrollTop() > $(".pre-navbar").height()) {
      navbar.addClass("navbar-fixed-top");
      } else {
      navbar.removeClass("navbar-fixed-top");
      }
    }
    else {
      navbar.removeClass("navbar-fixed-top");
    }
  }
});
