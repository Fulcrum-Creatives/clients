/**--------------------------------------------------------
 * Viewer.js Init
 *---------------------------------------------------------*/
window.onload = function () {
  'use strict';
  var Viewer = window.Viewer;
  var pictures = document.querySelector('.gallery__images');
  var options = {
        keyboard: false,
        transition: false
      };
  var viewer;
  viewer = new Viewer(pictures, options);
}