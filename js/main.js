$(function(){
  $('.sidenav').sidenav();

  $(".nav").dropdown({
    hover: true,
    coverTrigger: false
  });

  $('.collapsible').collapsible();

  $('.parallax').parallax();

  $('.carousel.carousel-slider').carousel();

  function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 5000);
  }
  setTimeout(autoplay, 5000);

  $('.materialboxed').materialbox();

  $('.modal').modal({
    dismissible: false
  });
});
