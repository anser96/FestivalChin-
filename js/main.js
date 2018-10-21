$(function(){
  $('.sidenav').sidenav();

  $(".nav").dropdown({
    hover: true,
    coverTrigger: false
  });

  $('.collapsible').collapsible();

  $('.parallax').parallax();

  $('.carousel.carousel-slider').carousel();

 setInterval(function(){
  $('.carousel').carousel('next');
 }, 4000);
  

  $('.materialboxed').materialbox();

  $('.modal').modal({
    dismissible: false
  });
});
