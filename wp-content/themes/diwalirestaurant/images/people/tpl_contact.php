<?php
/**
 * Template Name: Contact Page Template
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
                        <p class="impx-pre-intro">Get in Touch</p>
                        <h1><span>Contact Us Now</span></h1>
                        <p>We are always happy to hear your suggestions</p>
                        <div class="impx-separator"><i class="uk-icon-envelope-o"></i></div>
                    </div>
                </div>
                <!-- Intro End -->

                <!-- Contact Form -->
                <div class="uk-width-9-10 uk-height-1-1  uk-container-center uk-margin-bottom-remove">
                    <div class="impx-contact-form">
                        <form class="uk-form"
                              action="<?php echo get_template_directory_uri(); ?>/includes/sendemail.php">
                            <div class="uk-grid">
                                <div
                                    class="uk-width-xlarge-1-2 uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                                    <div class="uk-form-row">
                                        <label for="name">Name</label>
                                        <div class="uk-form-icon">
                                            <i class="uk-icon-user"></i>
                                            <input type="text" name="name" id="name"
                                                   class="uk-form-large uk-form-width-large"><span
                                                class="uk-form-help-inline">*</span>
                                        </div>
                                    </div>
                                    <div class="uk-form-row">
                                        <label for="email">Email</label>
                                        <div class="uk-form-icon">
                                            <i class="uk-icon-envelope"></i>
                                            <input type="text" name="email" id="email"
                                                   class="uk-form-large uk-form-width-large"><span
                                                class="uk-form-help-inline">*</span>
                                        </div>
                                    </div>
                                    <div class="uk-form-row">
                                        <label for="subject">Subject</label>
                                        <div class="uk-form-icon">
                                            <i class="uk-icon-edit"></i>
                                            <input type="text" name="subject" id="subject"
                                                   class="uk-form-large uk-form-width-large"><span
                                                class="uk-form-help-inline">*</span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="uk-width-xlarge-1-2 uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                                    <label for="message">Message</label>
                                    <div class="uk-form-row">
                                        <textarea name="message" id="message" cols="30" rows="8"
                                                  class="uk-form-width-large"></textarea><span
                                            class="uk-form-help-inline">*</span>
                                    </div>
                                </div>
                                <div
                                    class="uk-width-xlarge-1-3 uk-width-large-1-3 uk-width-small-1-2 uk-container-center">
                                    <button type="submit" name="submit"
                                            class="uk-button uk-button-large default radius uk-width-1-1"
                                            id="buttonsend">Send Message
                                    </button>
                                    <span class="loading" style="display: none;">Please wait..</span>
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
<?php
$b_image = get_field('opening_hours_background_image');
if (!empty($b_image)):
    $bimage = $b_image['sizes']['img_1920x800'];
else:
    $bimage = get_template_directory_uri() . '/images/parallax/bg-parallax5.jpg';
endif;
?>
    <section class="impx-wrapper uk-padding-remove bg-parallax5" data-uk-parallax="{bg: -200}"
             style="background-image: url('<?php echo $bimage; ?>');">
        <div class="uk-container fullwidth-narrow uk-container-center uk-padding-right-remove uk-margin-right-remove">
            <div class="uk-grid uk-margin-double-large-top uk-margin-double-large-top-contact">

                <!-- Image -->
                <div
                    class="uk-width-xlarge-1-10 uk-width-large-1-10 uk-width-medium-1-1 uk-width-small-1-1 uk-width-medium-1-1 uk-margin-bottom-remove"></div>
                <!-- Image End -->

                <!-- Contact Info -->
                <div
                    class="uk-width-xlarge-5-10 uk-width-large-5-10 uk-width-medium-1-1 uk-width-small-1-1 uk-margin-bottom">
                    <div class="impx-contact-chef">
                        <?php
                        $bg_image = get_field('opening_hours_right_side_image');
                        if (!empty($bg_image)):
                            $image = $bg_image['sizes']['img_580x585'];
                        else:
                            $image = get_template_directory_uri() . '/images/people/chef-flip-contact.png';
                        endif;
                        ?>
                        <img src="<?php echo $image; ?>"
                             alt="Chef" class="uk-align-center"/>
                    </div>
                </div>
                <!-- Contact Info End -->

                <!-- Opening Hours -->
                <div class="uk-width-xlarge-3-10 uk-width-large-3-10 uk-width-medium-1-1 uk-width-small-1-1">
                    <div class="impx-contact-hours">
                        <h3>Opening Hours</h3>
                        <ul class="uk-list uk-list-line">
                            <li>
                                <h5><span>Mon – Thur</span></h5>
                                <p>lunch: 12.00pm – 14.30pm</p>
                                <p>dinner: 18.00pm – 23.00pm</p>
                            </li>
                            <li>
                                <h5><span>Fri – Sat</span></h5>
                                <p>lunch: 12.00pm – 14.30pm</p>
                                <p>dinner: 17.30pm – 23.00pm </p>
                            </li>
                            <li>
                                <h5><span>Sun</span></h5>
                                <p>lunch: 12.00pm – 14.30pm</p>
                                <p>dinner: 17.30pm – 22.30pm </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Opening Hours End -->

                <!-- Image -->
                <div
                    class="uk-width-xlarge-1-10 uk-width-large-1-10 uk-width-medium-1-1 uk-width-small-1-1 uk-width-medium-1-1 uk-margin-bottom-remove"></div>
                <!-- Image End -->

            </div>
        </div>
        <!-- Wrapper Overlay -->
        <div class="impx-overlay darkest"></div>
        <!-- Wrapper Overlay End -->
    </section>
    <!-- Wrapper End -->

    <!-- Map Wrapper -->
    <section class="impx-wrapper uk-padding-remove">
        <div class="uk-container fullwidth uk-container-center uk-padding-remove uk-margin-remove">
            <div id="impx-map"></div>
        </div>
    </section>
    <!-- Map Wrapper End -->
<?php
get_footer();
