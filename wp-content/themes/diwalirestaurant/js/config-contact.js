/* --------------------------------------------------------------------------
 * File        : contact.js
 * Version     : 1.0
 * Author      : Indonez Team
 * Author URI  : http://indonez.com
 *
 * Indonez Copyright 2015 All Rights Reserved.
 * -------------------------------------------------------------------------- */

/* --------------------------------------------------------------------------
 * javascript handle initialization
 		1. Map Configuration
		2. Email Configuration
 *
 * -------------------------------------------------------------------------- */


(function($) {

    "use strict";

    var themeApp = {

            theme_contact_page: function() {

               
                //----------- 2. Email Configuration -----------
                $('#buttonsend').click(function() {
                    
                    //var action = $(this).closest('form').attr('action');
                    var name = $('#name').val();
                    var subject = $('#subject').val();
                    var email = $('#email').val();
                    var message = $('#message').val();

                    

                    if (name != "" && subject != "" && email != "" && message != "") {
                       $('.loading').fadeIn('fast');
                        
                        jQuery.ajax({
                            type : "post",
                            dataType : "json",
                            url : myAjax.ajaxurl,
                            data : {action: "post_contact", "name":name,"subject":subject,"email":email,"message":message},
                            success: function(response) {

                                $('.loading').fadeOut('fast');
                                if(response.success =="1") {                               
                                    $('#contact-form')[0].reset();  
                                    $('<div class="uk-alert uk-alert-success uk-text-center uk-margin-medium-bottom" data-uk-alert><p>'+response.msg+'</p></div>').insertBefore('#contact-form');
                                    $('.uk-alert').fadeOut(5000, function() { $(this).remove(); });

                                }
                                else if(response.success == "0") {   
                                    $('<div class="uk-alert uk-text-warning uk-text-center uk-margin-medium-bottom" data-uk-alert><p>'+response.msg+'</p></div>').insertBefore('#contact-form');
                                    $('.uk-alert').fadeOut(8000, function() { $(this).remove(); });                                 

                                }          
                            }
                        });
                       
                        return false;

                    } else {
                        $('.loading').fadeOut('fast');
                        if (name == "") $('#name').css({ "background": "#FFFCFC", "border": "1px solid #ffadad" }).next('.uk-form-help-inline').text('!');
                        if (subject == "") $('#subject').css({ "background": "#FFFCFC", "border": "1px solid #ffadad" }).next('.uk-form-help-inline').text('!');
                        if (email == "") $('#email').css({ "background": "#FFFCFC", "border": "1px solid #ffadad" }).next('.uk-form-help-inline').text(' !');
                        if (message == "") $('#message').css({ "background": "#FFFCFC", "border": "1px solid #ffadad" }).next('.uk-form-help-inline').text('!');
                        return false;
                    }
                });

                $('#name, #subject, #email,#message').focus(function() {
                    $(this).css({ "background": "#fafafa", "border": "1px solid #ccc" }).next('.uk-form-help-inline').text('*');
                });
            },

            // theme init
            theme_init: function() {
                themeApp.theme_contact_page();
            }

        } //end themeApp


    jQuery(document).ready(function($) {

        themeApp.theme_init();

        var loc = window.location;
        var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
        var template_url = loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));

        //----------- 1. Map Configuration ----------- 
        var map = new GMaps({
            el: '#impx-map',
            lat: 51.276823,
            lng: -0.748124,
            zoom: 16,
            zoomControl: true,
            zoomControlOpt: {
                style: 'SMALL',
                position: 'TOP_RIGHT'
            },
            panControl: false,
            streetViewControl: false,
            mapTypeControl: false,
            overviewMapControl: false
        });

        map.addMarker({
            lat: 51.276823,
            lng: -0.748124,
            icon: "http://diwalirestaurant.com/wp-content/themes/diwalirestaurant/images/map-marker.png"
        });
        
        

    });

})(jQuery);