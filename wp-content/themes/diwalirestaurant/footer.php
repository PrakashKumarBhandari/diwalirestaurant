<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Diwali_Restaurant
 */

?>

<!-- Subscribe Form -->
<div class="impx-cta">
    <div class="uk-container uk-container-center">
        <div class="uk-grid uk-grid-small">
            <div class="uk-width-xlarge-1-6 uk-width-large-1-6 uk-width-medium-1-6 uk-width-small-1-1 uk-text-right">
                <h4 class="impx-cta-title">Newsletter</h4>
            </div>
            <div class="uk-width-xlarge-4-6 uk-width-large-4-6 uk-width-medium-4-6 uk-width-small-1-1">
                <form class="uk-form uk-form-large">
                    <input class="uk-form-large">
                </form>
            </div>
            <div class="uk-width-xlarge-1-6 uk-width-large-1-6 uk-width-medium-1-6 uk-width-small-1-1 ">
                <a class="uk-button uk-button-large color" href="">Subscribe Now<i
                            class="uk-icon-angle-double-right"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Subscribe Form End -->

<!-- Footer -->
<footer class="impx-footer">
    <div class="uk-container uk-container-center">
        <div class="uk-grid uk-margin-bottom">

            <!-- Footer Logo -->
            <div class="uk-width-1-1 uk-text-center">
                <div class="impx-footer-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" alt="Footer Logo"/>
                </div>
            </div>
            <!-- Footer Logo End -->

            <!-- Counter Items -->
            <div class="uk-width-1-1">
                <ul class="uk-grid uk-grid-width-xlarge-1-3 uk-grid-width-large-1-3 uk-grid-width-medium-1-1 uk-grid-width-small-1-1 uk-grid-divider footer-grids">
                    <!-- Counter Item 1 -->
                    <li class="uk-text-center trip-advisor">
                        <h5>Certificate of the Excellence</h5>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/TripAdvisor-logo.png" alt="">
                        <h6>Award winner 2014</h6>
                        <a href="javascript:void(0)" target="_blank">
                            <img src="http://diwalirestaurant.com/wp-content/uploads/2017/03/Food-Standards-Agency.jpg" alt="">
                        </a>
                    </li>
                    <!-- Counter Item 1 End -->

                    <!-- Counter Item 3 -->
                    <li class="uk-text-center">
                        <h5>Opening Hours</h5>
                        <div class="footer-opening-hours">
                            <ul>
                                <li class="lunch">Lunch</li>
                                <li><?php echo !empty(of_get_option('lunch1')) ? of_get_option('lunch1') : ''; ?></li>
                                <li><?php echo !empty(of_get_option('lunch2')) ? of_get_option('lunch2') : ''; ?></li>
                                <li><?php echo !empty(of_get_option('lunch3')) ? of_get_option('lunch3') : ''; ?></li>
                                <li class="dinner">Dinner</li>
                                <li><?php echo !empty(of_get_option('dinner1')) ? of_get_option('dinner1') : ''; ?></li>
                                <li><?php echo !empty(of_get_option('dinner2')) ? of_get_option('dinner2') : ''; ?></li>
                                <li><?php echo !empty(of_get_option('dinner3')) ? of_get_option('dinner3') : ''; ?></li>
                            </ul>
                        </div>
                    </li>
                    <!-- Counter Item 3 End -->

                    <!-- Counter Item 4 -->
                    <li class="uk-text-center">
                        <h5>Get In Touch</h5>
                        <div>
                            <p>16-18 Queens Road<br>North Camp, Farnborough <br> Hampshire GU14 6DN</p>
                            <ul>
                                <li>
                                    <span class="uk-icon-phone"></span>
                                    <a href="tel:<?php echo !empty(of_get_option('phone')) ? of_get_option('phone') : ''; ?>"><?php echo !empty(of_get_option('phone')) ? of_get_option('phone') : ''; ?></a>
                                    |
                                    <a href="tel:<?php echo !empty(of_get_option('phone1')) ? of_get_option('phone1') : ''; ?>"><?php echo !empty(of_get_option('phone1')) ? of_get_option('phone1') : ''; ?></a>
                                </li>
                                <li>
                                    <span class="uk-icon-envelope-o"></span>
                                    <a href="mailto:<?php echo !empty(of_get_option('email')) ? of_get_option('email') : ''; ?>"><?php echo !empty(of_get_option('email')) ? of_get_option('email') : ''; ?></a>
                                </li>
                            </ul>
                            <ul class="impx-footer-social-list">
                                <li>
                                    <a href="<?php echo !empty(of_get_option('twitter_link')) ? of_get_option('twitter_link') : '#'; ?>"
                                       class="" target="_blank"><span class="uk-icon-hover uk-icon-twitter"></span></a>
                                </li>
                                <li>
                                    <a href="<?php echo !empty(of_get_option('facebook_link')) ? of_get_option('facebook_link') : '#'; ?>"
                                       class="" target="_blank"><span class="uk-icon-hover uk-icon-facebook"></span></a>
                                </li>
                                <li>
                                    <a href="<?php echo !empty(of_get_option('googleplus_link')) ? of_get_option('googleplus_link') : '#'; ?>"
                                       class="" target="_blank"><span class="uk-icon-hover uk-icon-google-plus"></span></a>
                                </li>
                                <li>
                                    <a href="<?php echo !empty(of_get_option('instagram_link')) ? of_get_option('instagram_link') : '#'; ?>"
                                       class="" target="_blank"><span
                                                class="uk-icon-hover uk-icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Counter Item 4 End -->
                </ul>
            </div>
            <!-- Counter Items End -->

            <!-- Footer Menu -->
            <div class="uk-width-1-1  uk-text-center">
                <?php
                wp_nav_menu(array(
                    'menu' => 'Footer Menu',
                    'container' => false,
                    'menu_class' => 'impx-footer-menu'
                ));
                ?>

            </div>
            <!-- Footer Menu End -->

	    <!-- Footer Payment Methods -->
            <div class="uk-width-1-1 uk-text-center" style="margin-top: 40px;">
                <img src="http://diwalirestaurant.com/wp-content/uploads/2019/02/payment-methods-small.png" alt="">
            </div>
            <!-- Footer Payment Methods End -->

        </div>
    </div>

    <!-- Footer Info -->
    <div class="impx-footer-bottom">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-xlarge-1-2 uk-width-large-1-2 uk-width-medium-1-2  uk-width-small-1-1">
                    <ul class="impx-footer-contact">
                        <li>
                            <a href="mailto:<?php echo !empty(of_get_option('email')) ? of_get_option('email') : ''; ?>"><?php echo !empty(of_get_option('email')) ? of_get_option('email') : ''; ?></a>
                        </li>
                    </ul>
                </div>
                <div
                        class="uk-width-xlarge-1-2 uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1 uk-text-right">
                    <p class="impx-footer-copyright">&copy; <?php echo get_bloginfo('name'); ?> <?php echo date('Y'); ?>
                        by <a
                                href="http://abstractdd.co.uk/" target="_blank">Abstract</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Info End -->

    <a href="#impx-body" class="impx-to-top" data-uk-smooth-scroll="{offset: 0}"><i
                class="uk-icon-long-arrow-up"></i></a>

</footer>
<!-- Footer End -->

<div class="alert-cookie">
    <div class="uk-container uk-container-center">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <p>
                    <span>To continue browsing this website, you must accept the use of <a href="http://www.allaboutcookies.org" target="_blank">cookies</a> to ensure the best experience on our website.</span>
                    <a href="<?= esc_url( home_url( '/privacy-policy' ) ) ?>">Learn more</a>
                    <a href="#" class="btn-cookie accept-cookie">Got it!</a>
                </p>
            </div>
        </div>
    </div>
</div>

</div>

<!-- Javascript -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/uikit.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/components/parallax.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/components/sticky.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/components/slider.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/components/slideshow.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/components/autocomplete.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/components/datepicker.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/components/timepicker.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/rating.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/price-range.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.countdown.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.countTo.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/config.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js"></script>
<script src="https://www.fbgcdn.com/embedder/js/ewm2.js" defer async ></script>

<script>
    $('.uk-navbar .uk-parent').attr('data-uk-dropdown', '{delay: 100}');
    $('.uk-navbar .sub-menu').addClass('uk-nav uk-nav-navbar uk-text-left').wrap("<div class='uk-dropdown uk-dropdown-navbar uk-dropdown-bottom'></div>");
    $('.uk-navbar .sub-menu li').css('display', 'block');
    //Mobile Mneu
    $('.uk-nav-parent-icon').attr('data-uk-nav', '');
    $('.uk-nav-parent-icon a').removeClass('uk-navbar-nav-subtitle');
    $('.uk-offcanvas-bar .sub-menu').addClass('data-uk-nav');
    $('.uk-offcanvas-bar .menu-item-has-children').addClass('uk-parent');
    $(function () {

        //Menu Toggle
        $('.uk-navbar-toggle').on('click', function (e) {
            $(window).scrollTop(0);
        });
        //Magnific Popup
        $('.magnific-gallery').each(function (index, value) {
            var gallery = $(this);
            var items = [];
            $('ul.gallery li a').each(function (index, value) {
                items.push({
                    src: $(this).attr('href'),
                    title: ''
                });
            });
            gallery.magnificPopup({
                mainClass: 'mfp-fade',
                items: items,
                gallery: {
                    enabled: true,
                    tPrev: $(this).data('prev-text'),
                    tNext: $(this).data('next-text')
                },
                type: 'image'
            });
        });
        $('iframe#diwalirestaurant-booking #submit-button').addClass('diwalirestaurant-res_send');
    });
</script>
<?php
if (is_page('home')) {
    ?>
    <script>
        function show() {
            document.getElementById('scritta').className = 'visiblediv';
        }
        function hide() {
            document.getElementById('scritta').className = 'hiddendiv';
        }

        var p1 = document.getElementById("read-more");
        p1.onclick = show;
        var p2 = document.getElementById("read-less");
        p2.onclick = hide;

        $('#read-less').hide();

        $('#read-more').click(function () {
            $('#read-more').toggle();
            $('#read-less').toggle();
        });

        $('#read-less').click(function () {
            $('#read-more').toggle();
            $('#read-less').toggle();
            $('html, body').animate({
                scrollTop: $(".impx-intro").offset().top
            }, 'fast');
        });

        $('.uk-navbar-toggle').click(function (e) {
            $('html, body').animate({
                scrollTop: $("body").offset().top
            }, 'fast');
        });

        //Magnific Popup
        <?php
        global $popup_image;
        if (!empty($popup_image)):
        ?>
        (function ($) {
            var $modal = $('.modal-on-load');
            if ($modal.length > 0) {
                $modal.each(function () {
                    var element = $(this),
                        elementTarget = element.attr('data-target'),
                        elementTargetValue = elementTarget.split('#')[1];

                    if (!element.hasClass('enable-cookie')) {
                        $.removeCookie(elementTargetValue);
                    }

                    if (element.hasClass('enable-cookie')) {
                        var elementCookie = $.cookie(elementTargetValue);

                        if (typeof elementCookie !== 'undefined' && elementCookie == '0') {
                            return true;
                        }
                    }

                    $.magnificPopup.open({
                        items: {src: elementTarget},
                        type: 'inline',
                        mainClass: 'mfp-no-margins mfp-fade',
                        closeBtnInside: true,
                        closeOnContentClick: true,
                        fixedContentPos: true,
                        callbacks: {
                            open: function () {
                                console.log('happening');
                            },
                            beforeClose: function () {
                                console.log('happening...');
                            },
                            afterClose: function () {
                                if (element.hasClass('enable-cookie')) {
                                    $.cookie(elementTargetValue, '0', {expires: 1});
                                }
                            }
                        }
                    }, 0);
                });
            }
        })(jQuery);
        <?php
        endif;
        ?>
    </script>
    <?php
}
?>
<script>
    // Cookie
    let cookie = false;
    let cookieContent = $('.alert-cookie');

    checkCookie();

    if (cookie === true) {
        cookieContent.hide();
    } else {
        setTimeout(function () {
            cookieContent.show();
        }, 2000);
    }

    function checkCookie() {
        let check = $.cookie("acceptCookies");
        if (typeof check !== "undefined") {
            return cookie = true;
        } else {
            return cookie = false;
        }
    }

    $(".accept-cookie").on("click", function (e) {
        e.preventDefault();
        $.cookie('acceptCookies', 'accepted');
        cookieContent.hide(500);
    });

    /*-----------------------
     Order Online
    -------------------------*/
    $('.menu-order-online a, .link-order-online').attr('data-glf-cuid', '4f4fdd64-cb14-4669-9366-7920dc6b701c');
    $('.menu-order-online a, .link-order-online').attr('data-glf-ruid', '0ef2acb3-3065-4b27-84d0-a4513e87e749');

</script>
<?php wp_footer(); ?>

</body>
</html>
