(function ($) {

    "use strict";

    var reservationThemeApp = {

        theme_reservation_page: function () {

            //----------- Email Configuration -----------
            var selector = $('#book_now');
            selector.click(function (e) {

                e.preventDefault();
                // alert("Book now clicked");
                //reset border
                $('#first_name').attr('style', 'border: 1px solid #e1e1e1 !important');
                $('#last_name').attr('style', 'border: 1px solid #e1e1e1 !important');
                $('#email').attr('style', 'border: 1px solid #e1e1e1 !important');
                $('#time').attr('style', 'border: 1px solid #e1e1e1 !important');
                $('#date').attr('style', 'border: 1px solid #e1e1e1 !important');
                $('#peoples').attr('style', 'border: 1px solid #e1e1e1 !important');
                $('#phone').attr('style', 'border: 1px solid #e1e1e1 !important');
                $('#message').attr('style', 'border: 1px solid #e1e1e1 !important');

                var action = $(this).closest('form').attr('action');
                var first_name = $('#first_name').val();
                var last_name = $('#last_name').val();
                var email = $('#email').val();
                var time = $('#time').val();
                var date = $('#date').val();
                var peoples = $('#peoples').val();
                var phone = $('#phone').val();
                var message = $('#message').val();

                selector.html('Loading..');

                if (first_name != "" && last_name != "" && email != "" && time != "" && date != "" && peoples != "" && phone != "") {
                    jQuery.ajax({
                        type : "post",
                        dataType : "json",
                        url : myAjax.ajaxurl,
                        data : {action: "post_reservation", "first_name":first_name,"last_name":last_name,"email":email,"time":time,"date":date,"peoples":peoples,"phone":phone,"message":message},
                        success: function(response) {
                            if(response.success =="1") {                               
                                $('#reservation-form')[0].reset();                              
                                selector.html('Book a Table');
                                $('<div class="uk-alert uk-alert-success uk-text-center uk-margin-medium-bottom" data-uk-alert><p>'+response.msg+'</p></div>').insertBefore('#f');
                                $('.uk-alert').fadeOut(5000, function () {
                                    $(this).remove();
                                });         
                            }
                            else if(response.success == "0") {         
                                $('#reservation-form')[0].reset();                              
                                selector.html('Book a Table');
                                $('<div class="uk-alert uk-text-warning uk-text-center uk-margin-medium-bottom" data-uk-alert><p>'+response.msg+'</p></div>').insertBefore('#reservation-form');
                                $('.uk-alert').fadeOut(8000, function () {
                                    $(this).remove();
                                });         
                            }          
                        }
                    });
  
                    return false;

                } else {
                    selector.html('Book a Table');
                    if (!first_name) {
                        $('#first_name').attr('style', 'border: 1px solid #9D2C20 !important');
                    }
                    if (!last_name) {
                        $('#last_name').attr('style', 'border: 1px solid #9D2C20 !important');
                    }
                    if (!email) {
                        $('#email').attr('style', 'border: 1px solid #9D2C20 !important');
                    }
                    if (!time) {
                        $('#time').attr('style', 'border: 1px solid #9D2C20 !important');
                    }
                    if (!date) {
                        $('#date').attr('style', 'border: 1px solid #9D2C20 !important');
                    }
                    if (!peoples) {
                        $('#peoples').attr('style', 'border: 1px solid #9D2C20 !important');
                    }
                    if (!phone) {
                        $('#phone').attr('style', 'border: 1px solid #9D2C20 !important');
                    }
                    return false;
                }
            });

        },

        // theme init
        theme_init: function () {
            reservationThemeApp.theme_reservation_page();
        }

    }; //end reservationThemeApp


    jQuery(document).ready(function ($) {

        reservationThemeApp.theme_init();

    });

})(jQuery);