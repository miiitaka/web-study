;(function($){
  'use strict';
  $.fn.pageTop = function(options) {
    var defaults = {
      position: 0,
      speed: 1000,
      type: 'swing'
    };
    var settings = $.extend({}, defaults, options);

    return this.each(function() {
      $(this).on('click', function(){
        $('html,body').animate({scrollTop: settings.position}, settings.speed, settings.type);
      });
    });
  };
}(jQuery));
