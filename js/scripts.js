$(document).ready(function() {
  $('.menu-toggle').on('click', function() {
    $('.top-nav').toggleClass('showing')
    $('.top-nav ul').toggleClass('showing')
  });
})