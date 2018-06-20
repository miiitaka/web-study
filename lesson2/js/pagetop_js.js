document.addEventListener('DOMContentLoaded', function(){
  var Button = document.getElementById('pagetop');
  
  Button.addEventListener('click', function() {
    var time = 1000;
    var scrollPosition = window.pageYOffset;
    var begin = new Date();
    var timer = setInterval(function() {
      var current = new Date() - begin;
      if(current > time) {
        clearInterval(timer);
        current = time;
      }
      window.scrollTo(0, scrollPosition * (1 - current / time));
    }, 10);
  });
});