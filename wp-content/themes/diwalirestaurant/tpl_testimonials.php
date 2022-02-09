<?php
/**
 * Template Name: Testimonials Page Template
 */
get_header();
?>
    <!-- Page Heading -->
<?php get_template_part('template-parts/content', 'page_title'); ?>
    <!-- Page Heading End -->

    <!-- Chef Wrapper -->
    <section class="impx-wrapper uk-padding-bottom-remove">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">

                <!-- Intro -->
                <div class="uk-width-3-4 uk-container-center">
                    <div class="impx-intro uk-text-center">
                        <p class="impx-pre-intro">the Words from</p>
                        <h1><span>Our Happy Customers</span></h1>
                        <?php
                        while (have_posts()) : the_post();

                            the_content();

                        endwhile;
                        ?>
                        <div class="impx-separator"><i class="uk-icon-comment"></i></div>
                    </div>
                </div>
                <!-- Intro End -->

                <!-- Testimonials List -->
                <div class="uk-width-1-1">
                    <ul class="uk-grid uk-grid-width-xlarge-1-2 uk-grid-width-large-1-2 uk-grid-width-medium-1-2 uk-grid-width-small-1-1 uk-grid-divider impx-testimonial-list"
                        data-uk-grid-match>

                        <!-- Testimonial List Item -->
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
                                    <div class="impx-testimonial-item">
                                        <div class="impx-testi-container">
                                            <div class="impx-testi-text">
                                                <blockquote>
                                                    <?php the_content(); ?>
                                                </blockquote>
                                            </div>
                                            <div class="impx-testi-name"><p><?php the_title(); ?></p></div>
                                            <div class="impx-company-name"><p><?php the_field('client_name'); ?></p></div>
                                        </div>
                                        <div class="impx-testi-image">
                                            <?php

                                            $client_image = get_field('client_image');

                                            if (!empty($image)): ?>
                                                <img src="<?php echo $client_image['url']; ?>"
                                                     alt="<?php echo $client_image['alt']; ?>"/>

                                            <?php else: ?>
                                                <img
                                                    src="<?php echo get_template_directory_uri(); ?>/images/people/testi-people1.jpg"
                                                    alt="Client Image"/>
                                            <?php endif; ?>
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
                        <!-- Testimonial List Item End -->

                    </ul>
                </div>
                <!-- Chefs List End -->

            </div>
        </div>
    </section>
    <!-- Chef Wrapper End -->
<?php
get_footer();
