<?php
/**
 * Template Name: Gallery Page Template
 */
get_header();
?>
    <!-- Page Heading -->
<?php get_template_part('template-parts/content', 'page_title'); ?>
    <!-- Page Heading End -->

    <!-- Wrapper -->
    <section class="impx-wrapper">
        <div class="uk-container uk-container-center">

            <!-- Event List -->
            <ul class="uk-grid uk-grid-width-xlarge-1-3  uk-grid-width-large-1-3  uk-grid-width-medium-1-2  uk-grid-width-small-1-1 impx-event-list">
                <!-- Gallery List Item -->
                <?php
                $args = array(
                    'posts_per_page' => -1,
                    'post_type' => 'gallery',
                );
                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                        ?>
                        <li>
                            <div class="impx-event-page-wrapper">
                                <figure class="uk-overlay uk-overlay-hover">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'img_600x400', true)[0];
                                    } else {
                                        $image_url = get_template_directory_uri() . '/images/event/event-img3.jpg';
                                    }
                                    ?>
                                    <img class="uk-overlay-scale"
                                         src="<?php echo $image_url; ?>" alt=""/>
                                    <figcaption
                                        class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle">
                                        <button class="uk-button uk-icon-chain" onclick="location.href='<?php the_permalink(); ?>';"></button>
                                    </figcaption>
                                </figure>
                                <div class="impx-event-page-title">
                                    <h4><a href=""><?php the_title(); ?></a></h4>
                                </div>
                                <div class="impx-event-page-content">
                                    <p><?php echo excerpt(24); ?></p>
                                    <div class="impx-event-place"><i class="uk-icon-map-signs"></i>Diwali Restaurant</div>
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
                <!-- Gallery List Item End -->

        </div>
    </section>
    <!-- Wrapper End -->
<?php
get_footer();
