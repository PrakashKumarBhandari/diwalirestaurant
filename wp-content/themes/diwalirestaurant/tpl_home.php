<?php
/**
 * Template Name: Home Page Template
 */
get_header();
?>
<?php
//Load modal on window load
global $popup_image;
$modal_popup = get_field('modal_background_image');
if (!empty($modal_popup)):
    $popup_image = $modal_popup['sizes']['img_900x500'];
endif;
?>
    <div class="modal-on-load enable-cookie" data-target="#myModal1"></div>

    <!-- Modal -->
    <div class="modal1 mfp-hide" id="myModal1">
        <section class="impx-wrapper">
            <div class="uk-container uk-container-center">
                <div class="uk-grid">

                    <div
                        class="uk-width-xlarge-5-6 uk-width-large-5-6 uk-width-medium-9-10 uk-width-small-1-1 uk-container-center">
                        <div class="impx-event-wrapper">
                            <div class="uk-grid">
                                <div class="uk-width-1-1 uk-push-1-1">
                                    <div class="impx-event-content-wrapper">
                                        <?php
                                        $banquet_image = get_field('modal_background_image');
                                        if (!empty($banquet_image)):
                                            $r_image = $banquet_image['sizes']['img_1024x640'];
                                        else:
                                            $r_image = get_template_directory_uri() . '/images/event/event-bg.jpg';
                                        endif;
                                        ?>
                                        <img src="<?php echo $r_image; ?>"
                                             alt="Offer Image"/>
                                        <button title="Close (Esc)" type="button" id="diwali-btn-close"
                                                class="mfp-close">×
                                        </button>
                                        <div class="impx-event-desc uk-text-center">
                                            <div class="impx-event-desc-outline"></div>
                                            <div class="impx-event-content">
                                                <h2>
                                                    <a href="<?php echo esc_url(home_url('/order-online')); ?>"
                                                       onclick="$.magnificPopup.close();location.href='<?php echo esc_url(home_url('/order-online')); ?>';">
                                                        <?php the_field('title_modal'); ?> </a>
                                                </h2>
                                                <div class="impx-separator"><i class="uk-icon-star"></i></div>
                                                <?php the_field('description_modal'); ?>
                                                <a href="<?php echo esc_url(home_url('/order-online')); ?>"
                                                   class="uk-button uk-button-large"
                                                   onclick="$.magnificPopup.close();location.href='<?php echo esc_url(home_url('/order-online')); ?>';">Book
                                                    Now</a>
                                                <div class="impx-event-icon-bg"><i class="uk-icon-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <!-- Slideshow -->
    <section class="impx-slideshow">
        <div class="uk-slidenav-position"
             data-uk-slideshow="{autoplay:true, animation: 'scale', pauseOnHover: true, duration: 1200, autoplayInterval: 12000, kenburns: true, kenburnsanimations: 'uk-animation-top-center'}">
            <ul class="uk-slideshow uk-overlay-active uk-slideshow-fullscreen">
                <!-- Slideshow Item 1 -->
                <?php
                $args_slider = array(
                    'posts_per_page' => -1,
                    'post_type' => 'slideshows',
                    'orderby' => 'rand',
                    'order' => 'DESC',
                    'post_status' => 'publish',
                );
                $the_result_slider = get_posts($args_slider);
                foreach ($the_result_slider as $slider_port) {

                    echo $id = $slider_port->ID;
                    $slider_title = $slider_port->post_title;
                    $slider_caption = $slider_port->caption;
                    $slider_image = get_field('image', $id);
                    ?>
                    <li>
                        <div class="impx-overlay impx-pattern-overlay dark"></div>
                        <img src="<?php echo $slider_image['sizes']['img_1920x1280']; ?>"
                             alt="slideshow 1">
                        <div class="uk-overlay-panel uk-flex uk-flex-center uk-flex-middle uk-text-center">
                            <div class="uk-container uk-container-center">
                                <div class="uk-grid">
                                    <div
                                        class="uk-width-xlarge-2-3 uk-width-large-2-3 uk-width-medium-3-4 uk-width-small-1-1 uk-container-center">
                                        <div class="impx-slideshow-caption"
                                             data-uk-scrollspy="{cls:'uk-animation-slide-top', delay:600}">
                                            <h1><?php echo $slider_title; ?></h1>
                                            <p class="uk-hidden-small"><?php echo $slider_caption; ?></p>
                                            <div class="uk-clearfix"></div>
                                            <a class="uk-button uk-button-large outline uk-hidden-small"
                                               href="<?php echo esc_url(home_url('/reservation')); ?>">Book
                                                a Table <i class="uk-icon-check-square-o"></i></a>
                                            <a class="uk-button uk-button-large outline default uk-hidden-small"
                                               href="#" data-glf-cuid="4f4fdd64-cb14-4669-9366-7920dc6b701c" data-glf-ruid="0ef2acb3-3065-4b27-84d0-a4513e87e749" id="glfButton0">Order Online<i class="uk-icon-envelope-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php
                } ?>
                <!-- Slideshow Item 1 End -->

            </ul>

            <!-- Slideshow Navigation -->
            <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous"
               data-uk-slideshow-item="previous"></a>
            <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
            <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
                <?php
                $i = 0;
                foreach ($the_result_slider as $slider_port) {
                    ?>
                    <li data-uk-slideshow-item="<?php echo $i; ?>"><a href=""></a></li>
                    <?php
                    $i++;
                }
                ?>
            </ul>
            <!-- Slideshow Navigation End -->
        </div>
    </section>
    <!-- Slideshow End -->

    <!-- Wrapper -->
    <section class="impx-wrapper  uk-margin-bottom">
        <div class="uk-container uk-container-center">

            <div class="uk-grid">
                <div
                    class="uk-width-xlarge-2-3 uk-width-large-2-3 uk-width-medium-3-4 uk-width-small-1-1 uk-container-center">

                    <!-- Intro -->
                    <div class="impx-intro margin-remove uk-text-center">
                        <h2><span>Welcome To Diwali Fine Indian Restaurant</span></h2>
                        <?php
                        the_field('short_description');
                        ?>
                        <a id="read-more" class="uk-button outline default" href="javascript:void(0)">Read
                            more...</a>
                        <?php
                        while (have_posts()) : the_post();

                            ?>
                            <div id="scritta" class="hiddendiv">
                                <?php the_content(); ?>
                                <a id="read-less" class="uk-button outline default" href="javascript:void(0)">Read
                                    less...</a><br>
                            </div>
                            <?php
                        endwhile;
                        ?>
                    </div>
                    <!-- Intro End -->

                </div>
            </div>

            <!-- Services -->
            <div class="uk-grid">
                <div class="uk-width-1-1 uk-container-center">

                    <!-- Services List -->
                    <ul class="uk-grid uk-grid-width-xlarge-1-2 uk-grid-width-large-1-3 uk-grid-width-medium-1-1 uk-grid-width-small-1-1 impx-services-boxes services-intro">

                        <!-- Services Item 2 -->
                        <li class="uk-position-relative">
                            <div class="impx-service-item no-border uk-align-center">
                                <div class="impx-service-item-img">
                                    <div class="impx-service-item-caption">
                                        <i class="uk-icon-cutlery uk-icon-small"></i>
                                    </div>
                                </div>
                                <div class="impx-service-item-content uk-text-center">
                                    <h4>Lunch</h4>
                                    <h5><?php echo !empty(of_get_option('lunch1')) ? of_get_option('lunch1') : ''; ?></h5>
                                    <br>
                                    <h5><?php echo !empty(of_get_option('lunch2')) ? of_get_option('lunch2') : ''; ?></h5>
                                    <br>
                                    <h5><?php echo !empty(of_get_option('lunch3')) ? of_get_option('lunch3') : ''; ?></h5>

                                </div>
                            </div>
                            <div class="impx-service-item-outline"></div>
                        </li>
                        <!-- Services Item 2 End -->

                        <!-- Services Item 3 -->
                        <li class="uk-position-relative">
                            <div class="impx-service-item  no-border uk-align-center">
                                <div class="impx-service-item-img">
                                    <div class="impx-service-item-caption">
                                        <i class="uk-icon-glass uk-icon-small"></i>
                                    </div>
                                </div>
                                <div class="impx-service-item-content uk-text-center">
                                    <h4>Dinner</h4>
                                    <h5><?php echo !empty(of_get_option('dinner1')) ? of_get_option('dinner1') : ''; ?></h5>
                                    <br>
                                    <h5><?php echo !empty(of_get_option('dinner2')) ? of_get_option('dinner2') : ''; ?></h5>
                                    <br>
                                    <h5><?php echo !empty(of_get_option('dinner3')) ? of_get_option('dinner3') : ''; ?></h5>
                                </div>
                            </div>
                            <div class="impx-service-item-outline"></div>
                        </li>
                        <!-- Services Item 3 End -->
                    </ul>
                    <!-- Services List End -->

                </div>
            </div>
            <!-- Services End -->

        </div>
    </section>
    <!-- Wrapper End -->

    <!-- Wrapper -->
<?php
$menu_image = get_field('menu_slider_background_image');
if (!empty($menu_image)):
    $m_image = $menu_image['sizes']['img_1920x1080'];
else:
    $m_image = get_template_directory_uri() . '/images/parallax/bg-parallax8.jpg';
endif;
?>
    <section class="impx-wrapper bg-parallax8" data-uk-parallax="{bg:-200}"
             style="background-image: url('<?php echo $m_image; ?>');">
        <div class="uk-container uk-container-center">

            <div class="uk-grid">
                <div
                    class="uk-width-xlarge-2-3 uk-width-large-2-3 uk-width-medium-3-4 uk-width-small-1-1  uk-container-center">
                    <!-- Intro -->
                    <div class="impx-intro intro-light uk-text-center">
                        <h1>Find Our Best Tasty Menu</h1>
                        <p>If you don’t find any food you like, please ask our member of staff, we will do our best to
                            provide you the dish you like.</p>
                    </div>
                    <!-- Intro End -->
                </div>
            </div>

            <!--  Menu Carousel -->
            <div class="impx-container">
                <div class="impx-menu-carousel2">

                    <!--  Menu Carousel Start -->
                    <div class="uk-slidenav-position uk-margin" data-uk-slider="{autoplay: true}">

                        <div class="uk-slider-container">
                            <!-- Menu Carousel Start -->
                            <ul class="uk-grid uk-slider uk-grid-width-xlarge-1-2 uk-grid-width-large-1-2 uk-grid-width-medium-1-2 uk-grid-width-small-1-1">
                                <?php
                                // args
                                $args_menu = array(
                                    'posts_per_page' => -1,
                                    'post_type' => 'menu'
                                );

                                // query
                                $the_query_menu = new WP_Query($args_menu);

                                ?>
                                <?php if ($the_query_menu->have_posts()): ?>
                                    <?php while ($the_query_menu->have_posts()) : $the_query_menu->the_post(); ?>
                                        <?php

                                        // check if the repeater field has rows of data
                                        if (have_rows('menu')):

                                            $i = 0;
                                            // loop through the rows of data
                                            while (have_rows('menu')): the_row();
                                                $featured = get_sub_field('featured');
                                                $i++;
                                                if ($featured && in_array('featured', $featured)):
                                                    ?>
                                                    <!--  Menu Carousel Item -->
                                                    <li class="uk-margin-large-bottom">
                                                        <div class="impx-menu-list-content">
                                                            <div class="uk-grid uk-grid-collapse">
                                                                <div class="uk-width-1-2">
                                                                    <div class="impx-menu-img">
                                                                        <?php
                                                                        $f_image = get_sub_field('featured_image');
                                                                        if (!empty($f_image)):
                                                                            $thumb_menu = $f_image['sizes']['img_520x800'];
                                                                            ?>
                                                                            <img src="<?php echo $thumb_menu; ?>"
                                                                                 alt="<?php echo $f_image['url']; ?>"/>
                                                                            <?php
                                                                        else:
                                                                            the_post_thumbnail('img_520x800');
                                                                        endif;
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                                <div class="uk-width-1-2">
                                                                    <div class="impx-menu-content-wrapper">
                                                                        <div class="impx-menu-content-outline"></div>
                                                                        <div class="impx-menu-content">
                                                                            <h3><?php the_sub_field('menu-title'); ?></h3>
                                                                            <div class="impx-separator"><i
                                                                                    class="uk-icon-star"></i></div>
                                                                            <?php $excerpt = wp_trim_words(get_sub_field('menu-description'), $num_words = 8, $more = '...'); ?>
                                                                            <p><?php echo $excerpt; ?></p>
                                                                            <div class="impx-menu-content-footer">
                                                                                <div class="uk-grid">
                                                                                    <div class="uk-width-1-1">
                                                                                        <h5><?php the_sub_field('menu-price'); ?></h5>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!--  Menu Carousel Item End -->
                                                    <?php
                                                endif;
                                                $i++;
                                            endwhile;

                                        endif;

                                        ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>

                                <?php wp_reset_query();     // Restore global post data stomped by the_post(). ?>

                            </ul>
                            <!--  Menu Carousel Items End -->

                        </div>

                        <!--  Menu Carousel Navigation -->
                        <a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous"></a>
                        <a href="" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next"></a>
                        <!--  Menu Carousel Navigation End -->

                    </div>
                </div>

                <!--  Menu Carousel Button -->
                <div class="uk-width-1-1 uk-text-center">
                    <a class="uk-button uk-button-large border light"
                       href="<?php echo esc_url(home_url('/diwali-menu')); ?>">Browse Our Menu<i
                            class="uk-icon-folder-open"></i></a>
                </div>
                <!--  Menu Carousel Button End -->

            </div>
            <!--  Menu Carousel End -->

            <!--  Wrapper Overlay -->
            <div class="impx-overlay dark"></div>
            <!--  Wrapper Overlay End -->

        </div>
    </section>
    <!-- Wrapper End -->

    <!-- Event Wrapper -->
    <section class="impx-wrapper">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">

                <div
                    class="uk-width-xlarge-2-3 uk-width-large-2-3 uk-width-medium-3-4 uk-width-small-1-1  uk-container-center">
                    <!--  Intro -->
                    <div class="impx-intro uk-text-center">
                        <h1>Banquet <span>Night Special</span></h1>
                        <!--<p>(Every Wednesday & Sunday ) (£10.95 per person) </p>-->
                    </div>
                    <!--  Intro End -->
                </div>

                <!--  Event Start -->
                <div
                    class="uk-width-xlarge-5-6 uk-width-large-5-6 uk-width-medium-9-10 uk-width-small-1-1 uk-container-center diwali-banquet-special">
                    <div class="impx-event-wrapper">
                        <div class="uk-grid">
                            <div class="uk-width-1-1 uk-push-1-1">
                                <div class="impx-event-content-wrapper">
                                    <?php
                                    $banquet_image = get_field('banquet_night_featured_image');
                                    if (!empty($banquet_image)):
                                        $r_image = $banquet_image['sizes']['img_1024x640'];
                                    else:
                                        $r_image = get_template_directory_uri() . '/images/event/event-bg.jpg';
                                    endif;
                                    ?>
                                    <img src="<?php echo $r_image; ?>"
                                         alt="Event Image"/>
                                    <div class="impx-event-desc uk-text-center">
                                        <div class="impx-event-desc-outline"></div>
                                        <div class="impx-event-content">
                                            <h2><a href="<?php echo esc_url(home_url('/banquet-night-special')); ?>">Banquet
                                                    Night
                                                    Special</a></h2>
                                            <!--<h5 class="impx-event-date">(Every Wednesday & Sunday</h5>-->
                                            <div class="impx-separator"><i class="uk-icon-star"></i></div>
                                            <?php $excerpt_banquet = wp_trim_words(get_field('banquet_night_special'), $num_words = 40, $more = '...'); ?>
                                            <p><?php echo $excerpt_banquet; ?></p>
                                            <a href="<?php echo esc_url(home_url('/banquet-night-special')); ?>"
                                               class="uk-button uk-button-large">View Detail</a>
                                            <div class="impx-event-icon-bg"><i class="uk-icon-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Event End -->

            </div>
        </div>
    </section>
    <!-- Event Wrapper End -->

    <!-- Testimonial Wrapper -->
<?php
$testimonials_image = get_field('testimonials_background_image');
if (!empty($testimonials_image)):
    $t_image = $testimonials_image['sizes']['img_1920x1426'];
else:
    $t_image = get_template_directory_uri() . '/images/parallax/bg-parallax2.jpg';
endif;
?>
    <section class="impx-wrapper bg-parallax2 uk-padding-bottom-remove" data-uk-parallax="{bg: -200}"
             style="background-image: url('<?php echo $t_image; ?>');">
        <div class="uk-container uk-container-center">

            <div class="uk-grid">
                <div
                    class="uk-width-xlarge-2-3 uk-width-large-2-3 uk-width-medium-1-1 uk-width-small-1-1 uk-container-center">
                    <!-- Testimonial Intro  -->
                    <div class="impx-intro intro-light uk-text-center">
                        <h1>What People Says</h1>
                    </div>
                    <!-- Testimonial Intro  End -->
                </div>
            </div>

            <!-- Testimonial Start -->
            <div class="uk-grid impx-testimonial-container">
                <div
                    class="uk-width-xlarge-2-3 uk-width-large-2-3 uk-width-medium-8-10 uk-width-small-1-1 uk-container-center  uk-text-center">

                    <!-- Testimonial Carousel -->
                    <div class="impx-testimonial-carousel">
                        <div class="uk-slidenav-position" data-uk-slideshow="{animation: 'scroll'}">
                            <ul class="uk-slideshow">
                                <!-- Testimonial Carousel Item 1 -->
                                <?php
                                $args = array(
                                    'posts_per_page' => -1,
                                    'post_type' => 'clientsayings',
                                );
                                $the_query = new WP_Query($args);

                                if ($the_query->have_posts()) {
                                    while ($the_query->have_posts()) {
                                        $the_query->the_post();
                                        ?>
                                        <li>
                                            <div class="impx-testi-container">
                                                <div class="impx-testi-image">
                                                    <?php
                                                    $client_image = get_field('client_image');

                                                    if (!empty($client_image)): ?>

                                                        <img src="<?php echo $client_image['url']; ?>"
                                                             alt="<?php echo $client_image['alt']; ?>" width="170"
                                                             height="170"/>

                                                    <?php else: ?>

                                                        <img
                                                            src="<?php echo get_template_directory_uri(); ?>/images/people/testi-people1.jpg"
                                                            alt="Client Image" width="170" height="170"/>

                                                    <?php endif; ?>

                                                </div>
                                                <div class="impx-testi-text">
                                                    <blockquote>
                                                        <?php the_content(); ?>
                                                    </blockquote>
                                                </div>
                                                <div class="impx-testi-name"><p><?php the_title(); ?></p>
                                                </div>
                                                <div class="impx-company-name"><p><?php the_field('client_name'); ?></p>
                                                </div>
                                            </div>
                                        </li>
                                        <?php
                                    }
                                } else {
                                    echo "No Testimonials Found";
                                }
                                /* Restore original Post Data */
                                wp_reset_postdata();
                                ?>
                                <!-- Testimonial Carousel Item 1 End -->
                            </ul>

                            <!-- Testimonial Carousel Navigation -->
                            <a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                            <a href="" class="uk-slidenav uk-slidenav-next" data-uk-slideshow-item="next"></a>
                            <!-- Testimonial Carousel Navigation End -->

                        </div>
                    </div>
                    <!-- Testimonial Carousel End -->

                </div>
                <!-- Testimonial Start End -->
            </div>

        </div>
        <!-- Overlay -->
        <div class="impx-overlay darker"></div>
        <!-- Overlay End -->
    </section>
    <!-- Testimonial Wrapper End -->

    <!-- Wrapper -->
    <section class="impx-wrapper uk-padding-bottom-remove uk-margin-bottom-remove">
        <div class="uk-container uk-container-center">
            <!-- Contact Info -->
            <div class="uk-grid">

                <!-- Contact Info Image -->
                <div
                    class="uk-width-xlarge-4-10 uk-width-large-4-10 uk-width-medium-4-10 uk-width-small-1-1 uk-flex uk-flex-middle">
                    <?php
                    $reservation_image = get_field('reservation_background_image');
                    if (!empty($reservation_image)):
                        $r_image = $reservation_image['sizes']['img_417x585'];
                    else:
                        $r_image = get_template_directory_uri() . '/images/people/chef.png';
                    endif;
                    ?>
                    <img src="<?php echo $r_image; ?>" alt="Chef"
                         class="impx-chef-stand"/>
                </div>
                <!-- Contact Info Image End -->

                <div class="uk-width-xlarge-6-10 uk-width-large-6-10 uk-width-medium-6-10 uk-width-small-1-1">
                    <!-- Contact Info Intro -->
                    <div class="impx-intro margin-medium">
                        <h2>Make a Reservation</h2>
                        <p>Book a table with us now! We will confirm your booking either by the phone or by the
                            email.</p>
                    </div>

                    <div class="uk-grid">
                        <div class="uk-width-xlarge-1-2 uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                            <h5><span>Our Address</span></h5>
                            <p>16-18 Queens Road<br/>North Camp, Farnborough <br> Hampshire GU14 6DN</p>
                        </div>
                        <div class="uk-width-xlarge-1-2 uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                            <h5><span>Inqueries</span></h5>
                            <i class="uk-icon-phone"></i> <a
                                href="tel:<?php echo !empty(of_get_option('phone')) ? of_get_option('phone') : ''; ?>"><?php echo !empty(of_get_option('phone')) ? of_get_option('phone') : ''; ?></a>
                            |
                            <a
                                href="tel:<?php echo !empty(of_get_option('phone1')) ? of_get_option('phone1') : ''; ?>"><?php echo !empty(of_get_option('phone1')) ? of_get_option('phone1') : ''; ?></a>
                            <br/>
                            <i class="uk-icon-envelope-o"> </i> <a
                                href="mailto:<?php echo !empty(of_get_option('email')) ? of_get_option('email') : ''; ?>"><?php echo !empty(of_get_option('email')) ? of_get_option('email') : ''; ?></a>
                        </div>
                    </div>
                    <!-- Contact Info Intro End -->

                    <!-- Contact Info Form -->
                    <div class="impx-reservation-form-hp uk-margin">
                        <form id="reservation-form" class="uk-form impx-form">
                            <fieldset>
                                <legend>Reservation Form</legend>
                                <div class="uk-grid" data-uk-margin="60">
                                    <div
                                        class="uk-width-xlarge-1-2 uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                                        <div class="uk-form-icon">
                                            <i class="uk-icon-user"></i>
                                            <input type="text" name="first_name" id="first_name"
                                                   placeholder="First Name"
                                                   class="uk-form-large uk-form-width-large">
                                        </div>
                                    </div>
                                    <div
                                        class="uk-width-xlarge-1-2 uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                                        <div class="uk-form-icon">
                                            <i class="uk-icon-user"></i>
                                            <input type="text" name="last_name" id="last_name" placeholder="Last Name"
                                                   class="uk-form-large uk-form-width-large">
                                        </div>
                                    </div>
                                    <div
                                        class="uk-width-xlarge-1-2 uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                                        <div class="uk-form-icon">
                                            <i class="uk-icon-envelope"></i>
                                            <input type="text" name="email" id="email" placeholder="Email"
                                                   class="uk-form-large uk-form-width-large">
                                        </div>
                                    </div>
                                    <div
                                        class="uk-width-xlarge-1-2 uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                                        <div class="uk-form-icon">
                                            <i class="uk-icon-phone"></i>
                                            <input type="text" name="phone" id="phone" placeholder="Phone"
                                                   class="uk-form-large uk-form-width-large">
                                        </div>
                                    </div>
                                    <div
                                        class="uk-width-xlarge-1-2 uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                                        <div class="uk-form-icon">
                                            <i class="uk-icon-calendar"></i>
                                            <input type="text" name="date" id="date"
                                                   data-uk-datepicker="{format:'DD.MM.YYYY', minDate: 0}"
                                                   placeholder="Date" class="uk-form-large uk-form-width-large">
                                        </div>
                                    </div>
                                    <div
                                        class="uk-width-xlarge-1-2 uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                                        <div class="uk-form-icon">
                                            <i class="uk-icon-clock-o"></i>
                                            <input type="text" name="time" id="time"
                                                   data-uk-timepicker="{format:'12h',start:8, end:23}"
                                                   placeholder="08.00 AM" class="uk-form-large uk-form-width-large">
                                        </div>
                                    </div>
                                    <div
                                        class="uk-width-xlarge-1-2 uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                                        <select name="peoples" id="peoples" class="uk-form-large uk-form-width-large">
                                            <option value="1">1 People</option>
                                            <option value="2">2 People</option>
                                            <option value="3">3 People</option>
                                            <option value="4">4 People</option>
                                            <option value="5">5 People</option>
                                            <option value="6">6 People</option>
                                            <option value="7">7 People</option>
                                            <option value="8">8 People</option>
                                            <option value="9">9 People</option>
                                            <option value="10">10 People</option>
                                        </select>
                                    </div>
                                    <div
                                        class="uk-width-xlarge-1-2 uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                                        <div class="uk-form-icon">
                                            <i class="uk-icon-message"></i>
                                            <textarea name="message" id="message" rows="1" placeholder="Message"
                                                      class="uk-form-large uk-form-width-large message-reservation-home"
                                                      style=""></textarea>
                                        </div>
                                    </div>
                                    <div
                                        class="uk-width-xlarge-1-1 uk-width-large-1-1 uk-width-medium-1-1 uk-width-small-1-1">
                                        <label for="terms" class="customized-checkbox customized-checkbox-bordered">
                                            <input type="checkbox" name="terms" id="terms" class="">I accept <a href="<?= esc_url(home_url('/privacy-policy')); ?>">terms & conditions</a>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div
                                        class="uk-width-xlarge-1-3 uk-width-large-1-3 uk-width-medium-2-3 uk-width-small-1-1 uk-container-center uk-margin-bottom">
                                        <button id="book_now"
                                                class="uk-button uk-button-large default radius uk-width-1-1">Book a
                                            Table
                                        </button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <!-- Contact Info Form End -->

                </div>
            </div>
            <!-- Contact Info End -->

        </div>
    </section>
    <!-- Wrapper End -->
<?php
get_footer();
