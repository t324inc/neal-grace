(function () {

  'use strict';

  const WebFont = require('webfontloader');

  WebFont.load({
    google: {
      families: ['Merriweather:700:latin', 'Muli:400:latin']
    }
  });

  Drupal.behaviors.neal_grace = {
    attach: function (context) {
      // console.log('Hello World');
    }
  };

})(jQuery, Drupal);
