
$(document).ready(function () {
  $("#addevent").on("submit", function (event) {
    action('../cad_event.php');
    
    event.preventDefault();
        $.ajax({
            method: "POST",
            url: "../cad_event.php",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (retorna) {
              
                if (retorna['sit']) {
                    //$("#msg-cad").html(retorna['msg']);
                    location.reload();                    
                } else {
                    $("#msg-cad").html(retorna['msg']);
                }
          }
        })
  });

  $(".btn-canc-vis").on("click", function(){
    $(".visevent").slideToggle();
    $(".formedit").slideToggle();
  });

  $(".btn-canc-edit").on("click", function(){
    $(".formedit").slideToggle();
    $(".visevent").slideToggle();
  });

  $("#editevent").on("submit", function (event) {
    action('../edit_event.php');
    
    event.preventDefault();
        $.ajax({
            method: "POST",
            url: "../edit_event.php",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (retorna) {
              
                if (retorna['sit']) {
                    //$("#msg-cad").html(retorna['msg']);
                    location.reload();                    
                } else {
                    $("#msg-edit").html(retorna['msg']);
                }
          }
        })
  });


});