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
                        <form class="uk-form" name="contact-form" id="contact-form" method="post">
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
                                        class="uk-width-xlarge-1-1 uk-width-large-1-1 uk-width-medium-1-1 uk-width-small-1-1">
                                    <label for="terms" class="customized-checkbox customized-checkbox-bordered">
                                        <input type="checkbox" name="terms" id="terms" class="">I accept <a href="<?= esc_url(home_url('/privacy-policy')); ?>">terms & conditions</a>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div
                                    class="uk-width-xlarge-1-3 uk-width-large-1-3 uk-width-small-1-2 uk-container-center">
                                    <button type="button" name="submit"
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
                                                    <p style="margin-bottom:0; margin-bottom: 15px;">17:30pm – 23.00pm</p>
                                                    <!--<p style="margin-top: 0; margin-bottom: 15px;">dinner: 18.00pm – 23.00pm</p>-->
                                                </li>
                                                <li>
                                                    <h5><span>Fri – Sat</span></h5>
                                                    <p style="margin-bottom:0; margin-bottom: 15px;">17.00pm – 23.00pm</p>
                                                    <!--<p style="margin-top: 0; margin-bottom: 15px;">dinner: 17.30pm – 23.00pm </p>-->
                                                </li>
                                                <li>
                                                    <h5><span>Sun</span></h5>
                                                    <p style="margin-bottom:0; margin-bottom: 15px;">17.00pm – 22.30pm</p>
                                                    <!--<p style="margin-top: 0; margin-bottom: 15px;">dinner: 17.30pm – 22.30pm </p>-->
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

    <!-- Map Wrapper -->
    <section class="impx-wrapper uk-padding-remove">
        <div class="uk-container fullwidth uk-container-center uk-padding-remove uk-margin-remove">
            <div id="impx-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d882.4203228953544!2d-0.7479584377186674!3d51.2768670446519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4875d4b49bf93603%3A0xd5ae227f6b651519!2sDiwali%20Indian%20Restaurant!5e0!3m2!1sen!2snp!4v1612865721177!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
        </div>
    </section>
    <!-- Map Wrapper End -->
<?php
get_footer();
