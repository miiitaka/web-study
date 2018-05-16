$(function() {
  var now = 0;
  var count = $("#graphic ul li").length;
  $("#graphic ul li").eq(now).show();
  function slideShow() {
    $("#graphic ul li").eq(now).fadeOut(1500);
    now++;
    if(now === count) {
      now = 0;
    }
    $("#graphic ul li").eq(now).fadeIn(1500);
  }
  setInterval(slideShow, 3000);
});
