/**
 * Filename:          index.js
 * Author:            Eric Hepperle
 * Date Created:      06-24-2024
 */



window.addEventListener("load", event => {
  var image = document.querySelector('img');
  var load = image.complete;
  alert(load);
});