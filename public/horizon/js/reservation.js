var AjaxReservation = function(){
    $('#res-submit').click(function(e){
        e.preventDefault();
        jQuery.ajax({
          type: 'POST',
          url: 'reservation.php?reservationstep=one',
          data: $('#ajax-reservation-form').serialize(),
          error:function(){ $('.reserve-form-area').html("Error!"); },
          success: function(content) { $('.reserve-form-area').html(content);},
          complete: function(){
            $('#res-send').click(function(e){
                e.preventDefault();
                jQuery.ajax({
                  type: 'POST',
                  url: 'reservation.php?reservationstep=two',
                  data: $('#ajax-reservation-send').serialize(),
                  error:function(){ $('.reserve-form-area').html("Error!"); },
                  success: function(content) { $('.reserve-form-area').html(content);} 
                });
            });
          }
        });
    });
}

$(document).ready(function() {

BreadcrumbFullScreen();
Tabs();
Parallax();
luxenContactForm();
AjaxReservation();