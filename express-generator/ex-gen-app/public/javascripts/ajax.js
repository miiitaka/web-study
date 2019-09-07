$(function() {
  $("#send").on("click", function(){
    var $id = $("#id").val();
/*
    $.getJSON("/ajax?id=" + $id, function(json) {
      $("#name").text(json.name);
      $("#age").text(json.age);
      $("#mail").text(json.mail);
    });
*/
    $.ajax({
      url: "/ajax",
      type: "get",
      data: {
        id: $id
      }
    })
    .done((json) => {
      console.table(json);
      $("#name").text(json.name);
      $("#age").text(json.age);
      $("#mail").text(json.mail);
    })
    .fail((json) => {
      console.error(json);
    })
    .always((json) => {
      console.log(json);
    });
  });
});




