$(document).ready(function() {
  $('.menu-toggle').on('click', function() {
    $('.top-nav').toggleClass('showing')
    $('.top-nav ul').toggleClass('showing')
  });
})

$('.post-wrapper').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  nextArrow: $('.next'),
  prevArrow: $('.prev'),
});