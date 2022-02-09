<?php
/**
 * Template Name: Reservation Page Template
 */
get_header();
?>
    <!-- Page Heading -->
<?php get_template_part('template-parts/content', 'page_title'); ?>
    <!-- Page Heading End -->

    <!-- Wrapper -->
    <section class="impx-wrapper">
        <div class="uk-container uk-container-center">
            <div class="uk-grid" data-uk-grid-margin>

                <div
                        class="uk-width-xlarge-2-3 uk-width-large-2-3 uk-width-medium-3-4 uk-width-small-1-1 uk-container-center">
                    <div class="impx-intro margin-remove uk-text-center">
                        <?php
                        while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                        ?>
                    </div>
                </div>

                <!-- Services List -->
                <div class="uk-width-1-1">
                    <ul class="uk-grid uk-grid-width-xlarge-1-2 uk-grid-width-large-1-2 uk-grid-width-medium-1-1 uk-grid-width-small-1-1 impx-services-boxes services-intro">

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
                </div>
                <!-- Services List End -->

            </div>
        </div>
    </section>
    <!-- Page Heading End -->

    <!-- Wrapper -->
<?php
$b_image = get_field('book_a_table_image');
if (!empty($b_image)):
    $bimage = $b_image['sizes']['img_1920x1426'];
else:
    $bimage = get_template_directory_uri() . '/images/parallax/bg-parallax2.jpg';
endif;
?>
    <section class="impx-wrapper bg-parallax2" data-uk-parallax="{bg: -200}"
             style="background-image: url('<?php echo $bimage; ?>');">
        <div class="uk-container uk-container-center uk-padding-remove">
            <div class="uk-grid">

                <!-- Intro -->
                <div
                        class="uk-width-xlarge-2-3 uk-width-large-2-3 uk-width-medium-3-4 uk-width-small-1-1 uk-container-center uk-text-center">
                    <div class="impx-intro intro-light margin-medium">
                        <p class="impx-pre-intro"></p>
                        <h1>Book a Table</h1>
                        <p>Make sure you enter your valid email address. The Reservation Form emails the booking status
                            for confirmation.</p>
                    </div>
                </div>
                <!-- Intro End -->

                <!-- Reservation Form -->
                <div
                        class="uk-width-xlarge-8-10 uk-width-large-8-10 uk-width-medoum-9-10 uk-width-small-1-1 uk-container-center">
                    <div class="impx-reservation-page-form">
                        <div class="impx-outline"></div>
                        <form class="uk-form impx-form" id="reservation-form">
                            <fieldset>
                                <div class="uk-grid">
                                    <div
                                            class="uk-width-xlarge-1-2 uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                                        <div class="uk-form-icon">
                                            <i class="uk-icon-user"></i>
                                            <input type="text" id="first_name" name="first_name"
                                                   placeholder="First Name"
                                                   class="uk-form-large uk-form-width-large">
                                        </div>
                                    </div>
                                    <div
                                            class="uk-width-xlarge-1-2 uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                                        <div class="uk-form-icon">
                                            <i class="uk-icon-user"></i>
                                            <input type="text" id="last_name" name="last_name" placeholder="Last Name"
                                                   class="uk-form-large uk-form-width-large">
                                        </div>
                                    </div>
                                    <div
                                            class="uk-width-xlarge-1-2 uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                                        <div class="uk-form-icon">
                                            <i class="uk-icon-envelope"></i>
                                            <input type="text" id="email" name="email" placeholder="Email"
                                                   class="uk-form-large uk-form-width-large">
                                        </div>
                                    </div>
                                    <div
                                            class="uk-width-xlarge-1-2 uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                                        <div class="uk-form-icon">
                                            <i class="uk-icon-phone"></i>
                                            <input type="text" id="phone" name="phone"
                                                   placeholder="Phone"
                                                   class="uk-form-large uk-form-width-large">
                                        </div>
                                    </div>
                                    <div
                                            class="uk-width-xlarge-1-2 uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                                        <div class="uk-form-icon">
                                            <i class="uk-icon-calendar"></i>
                                            <input type="text" id="date" name="date"
                                                   data-uk-datepicker="{format:'DD.MM.YYYY', minDate: 0}"
                                                   placeholder="Date" class="uk-form-large uk-form-width-large">
                                        </div>
                                    </div>
                                    <div
                                            class="uk-width-xlarge-1-2 uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                                        <div class="uk-form-icon">
                                            <i class="uk-icon-clock-o"></i>
                                            <input type="text" id="time" name="time"
                                                   data-uk-timepicker="{format:'12h',start:8, end:23}"
                                                   placeholder="08.00 AM" class="uk-form-large uk-form-width-large">
                                        </div>
                                    </div>
                                    <div
                                            class="uk-width-xlarge-1-2 uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                                        <select id="peoples" name="peoples" class="uk-form-large uk-form-width-large">
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
                                                      class="uk-form-large uk-form-width-large message-reservation"
                                                      style=""></textarea>
                                        </div>
                                    </div>
                                    <div
                                            class="uk-width-xlarge-1-1 uk-width-large-1-1 uk-width-medium-1-1 uk-width-small-1-1">
                                        <label for="terms" class="customized-checkbox" style="color: #c8c8c8; line-height: 1.7; margin-bottom: 35px;">
                                            <input type="checkbox" name="terms" id="terms" class="">I accept <a href="<?= esc_url(home_url('/privacy-policy')); ?>" style="color: #c6b486;">terms & conditions</a>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div
                                            class="uk-width-xlarge-2-5 uk-width-large-2-5 uk-width-medium-2-5 uk-width-small-1-1 uk-container-center">
                                        <button id="book_now"
                                                class="uk-button uk-button-large default radius uk-width-1-1 ">Book a
                                            Table
                                        </button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        <!--
                        <div style="width:100%;display:block;padding:0;margin:0;position:relative;text-align:center;">

                            <iframe id="diwalirestaurant-booking"
                                    src="https://widget.quandoo.co.uk/widget/reservation/merchant/a9GdZ?aid=2&countryId=GBR"

                                    width="312" height="372" seamless="seamless" scrolling="no"
                                    frameborder="0"></iframe>

                            <a href="https://www.quandoo.co.uk/diwali-indian-restaurant-30619" target="_blank"

                               style="width:100%;display:block;padding:0;margin:0;position:relative;text-align:center;">

                                <img src="https://admin.quandoo.de/awidget/poweredby.png"

                                     style="border:none;position:relative;width:312px;height:30px;" alt="Quandoo"
                                     title="Quandoo">

                            </a>

                        </div>
                        -->
                    </div>
                </div>
            </div>
            <!-- Reservation Form End -->

            <!-- Overlay -->
            <div class="impx-overlay darker"></div>
            <!-- Overlay End -->

        </div>
    </section>
    <!-- Wrapper End -->

    <!-- Wrapper -->
    <section class="impx-wrapper  uk-padding-bottom-remove">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">

                <!-- Contact Info -->
                <div
                        class="uk-width-xlarge-2-4 uk-width-large-2-4 uk-width-medium-1-1 uk-width-small-1-1 uk-container-center impx-info-text-intro">
                    <div class="impx-intro margin-medium">
                        <p class="impx-pre-intro">the Deal</p>
                        <h2>Get Special Offers Now!</h2>
                        <p>Diwali offers a common place where everyone can enjoy the lunch and evening and mark the
                            happiest moment.</p>
                    </div>

                    <div class="uk-grid">
                        <div class="uk-width-xlarge-1-2 uk-width-large-1-2 uk-width-medium-1-1 uk-width-small-1-1">
                            <h5><span>Our Address</span></h5>
                            <p>16-18 Queens Road<br/>North Camp, Farnborough <br> Hampshire GU14 6DN</p>
                        </div>
                        <div class="uk-width-xlarge-1-2 uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                            <h5><span>Inqueries</span></h5>
                            <i class="uk-icon-phone"></i>
                            <a
                                    href="tel:<?php echo !empty(of_get_option('phone')) ? of_get_option('phone') : ''; ?>"><?php echo !empty(of_get_option('phone')) ? of_get_option('phone') : ''; ?></a>
                            |
                            <a
                                    href="tel:<?php echo !empty(of_get_option('phone1')) ? of_get_option('phone1') : ''; ?>"><?php echo !empty(of_get_option('phone1')) ? of_get_option('phone1') : ''; ?></a>
                            <br/>
                            <i class="uk-icon-envelope-o"> </i> <a
                                    href="mailto:<?php echo !empty(of_get_option('email')) ? of_get_option('email') : ''; ?>">
                                <?php echo !empty(of_get_option('email')) ? of_get_option('email') : ''; ?></a>
                        </div>
                    </div>
                </div>

                <div
                        class="uk-width-xlarge-2-4 uk-width-large-2-4 uk-width-medium-1-1 uk-width-small-1-1 uk-container-center uk-margin-bottom-remove">
                    <?php
                    $footer_image = get_field('footer_background_image');
                    if (!empty($footer_image)):
                        $fimage = $footer_image['sizes']['img_948x632'];
                    else:
                        $fimage = get_template_directory_uri() . '/images/people/chef-women.png';
                    endif;
                    ?>
                    <img src="<?php echo $fimage; ?>" alt="Chef Women"
                         class="uk-align-right impx-chef-woman"/>
                </div>
                <!-- Contact Info End -->

            </div>
        </div>
    </section>
    <!-- Wrapper End -->
<?php
get_footer();
