<?php
/**
 * Template Name: Order Online Page Template
 */
get_header();
?>
    <!-- Page Heading -->
<?php get_template_part('template-parts/content', 'page_title'); ?>
    <!-- Page Heading End -->

    <!-- Wrapper -->
    <section class="impx-wrapper uk-margin-bottom-remove">
        <div class="uk-container uk-container-center">
            <div class="uk-grid" data-uk-grid-margin="">

                <!-- Intro -->
                <div
                    class="uk-width-xlarge-2-3 uk-width-large-2-3 uk-width-medium-1-1 uk-width-small-1-1 uk-container-center">
                    <div class="impx-intro margin-remove uk-text-center">
                        <h1><span>Order Online Now</span></h1>
                    </div>
                </div>
                <!-- Intro End -->

                <!-- Contact Form -->
                <div class="uk-width-9-10 uk-height-1-1  uk-container-center uk-margin-bottom-remove">
                    <div class="impx-contact-form">
                        <form class="uk-form uk-online"
                              action="https://v7.integer2.co.uk/postcode.asp">
                            <input name="licence" value="6411" type="hidden">
                            <div class="uk-grid">
                                <div
                                    class="uk-width-xlarge-1-3 uk-width-large-1-3 uk-width-small-1-2 uk-container-center">
                                    <div class="uk-form-row">
                                        <input type="text" name="postcode" id="postcode"
                                               placeholder="Enter Postcode"
                                               class="uk-form-large uk-form-width-large" required>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div
                                    class="uk-width-xlarge-1-3 uk-width-large-1-3 uk-width-small-1-2 uk-container-center">
                                    <button type="submit" name="submit"
                                            class="uk-button uk-button-large default radius uk-width-1-1"
                                            id="btn-order-online">Order Now
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Contact Form End -->

            </div>
        </div>
    </section>
    <!-- Wrapper End -->

    <!-- Wrapper -->
    <section class="impx-wrapper">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">

                <!-- Content Start -->
                <div
                    class="uk-width-xlarge-5-6 uk-width-large-5-6 uk-width-medium-9-10 uk-width-small-1-1 uk-container-center diwali-contact">
                    <div class="impx-event-wrapper">
                        <div class="uk-grid">
                            <div class="uk-width-1-1 uk-push-1-1">
                                <div class="impx-event-content-wrapper">
                                    <?php
                                    $b_image = get_field('opening_hours_background_image');
                                    if (!empty($b_image)):
                                        $bimage = $b_image['sizes']['img_1024x640'];
                                    else:
                                        $bimage = get_template_directory_uri() . '/images/event/event-bg.jpg';
                                    endif;
                                    ?>
                                    <img src="<?php echo $bimage; ?>"
                                         alt="<?php echo $b_image['alt']; ?>"/>
                                    <div class="impx-event-desc uk-text-center">
                                        <div class="impx-event-desc-outline"></div>
                                        <div class="impx-event-content">
                                            <h2><a href="javascript:void(0)">Opening Hours</a></h2>
                                            <div class="impx-separator"><i class="uk-icon-star"></i></div>
                                            <ul class="uk-list diwali-contact-list">
                                                <li>
                                                    <h5><span>Mon – Thur</span></h5>
                                                    <p style="margin-bottom:0;">lunch: 12.00pm – 14.30pm</p>
                                                    <p style="margin-top: 0; margin-bottom: 15px;">dinner: 18.00pm – 23.00pm</p>
                                                </li>
                                                <li>
                                                    <h5><span>Fri – Sat</span></h5>
                                                    <p style="margin-bottom:0;">lunch: 12.00pm – 14.30pm</p>
                                                    <p style="margin-top: 0; margin-bottom: 15px;">dinner: 17.30pm – 23.00pm </p>
                                                </li>
                                                <li>
                                                    <h5><span>Sun</span></h5>
                                                    <p style="margin-bottom:0;">lunch: 12.00pm – 14.30pm</p>
                                                    <p style="margin-top: 0; margin-bottom: 15px;">dinner: 17.30pm – 22.30pm </p>
                                                </li>
                                            </ul>

                                            <div class="impx-event-icon-bg"><i class="uk-icon-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Content End -->

            </div>
        </div>
    </section>
    <!-- Wrapper End -->

<?php
get_footer();
