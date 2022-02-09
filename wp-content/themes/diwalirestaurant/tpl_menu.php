<?php
/**
 * Template Name: Menu Page Template
 */
get_header();
?>
    <!-- Page Heading -->
<?php get_template_part('template-parts/content', 'page_title'); ?>
    <!-- Page Heading End -->

    <!-- Wrapper -->
    <section class="impx-wrapper uk-padding-bottom-remove">
        <div class="uk-container uk-container-center">

            <div class="uk-grid">

                <!-- Image -->
                <div class="uk-width-xlarge-1-3 uk-width-large-1-3 uk-width-medium-1-1 uk-width-small-1-1">
                    <?php
                    $side_image = get_field('header_image_left_sidebar');
                    if (!empty($side_image)):
                        $m_image = $side_image['sizes']['img_417x585'];
                    else:
                        $m_image = get_template_directory_uri() . '/images/people/chef.png';
                    endif;
                    ?>
                    <img src="<?php echo $m_image; ?>"
                         class="uk-align-left impx-img-no-margin" alt="Chef"/>
                </div>
                <!-- Image End -->

                <!-- Intro Text List -->
                <div
                    class="uk-width-xlarge-2-3 uk-width-large-2-3 uk-width-medium-1-1 uk-width-small-1-1 uk-margin-medium-top">
                    <div class="impx-intro margin-medium uk-text-left">
                        <p class="impx-pre-intro">Browse Our Menu</p>
                        <?php
                        while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                        ?>
                    </div>

                    <ul class="uk-grid uk-grid-width-xlarge-1-2 uk-grid-width-large-1-2 uk-grid-width-medium-1-2 uk-grid-width-small-1-1 impx-intro-list"
                        data-uk-grid-margin="">
                        <li>
                            <div class="impx-intro-list-wrapper">
                                <div class="uk-panel">
                                    <h3 class="uk-panel-title"><i class="uk-icon-cutlery"></i>Lunch</h3>
                                    <p><?php echo !empty(of_get_option('lunch1')) ? of_get_option('lunch1') : ''; ?></p>
                                    <p><?php echo !empty(of_get_option('lunch2')) ? of_get_option('lunch2') : ''; ?></p>
                                    <p><?php echo !empty(of_get_option('lunch3')) ? of_get_option('lunch3') : ''; ?></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="impx-intro-list-wrapper">
                                <div class="uk-panel">
                                    <h3 class="uk-panel-title"><i class="uk-icon-glass"></i>Dinner</h3>
                                    <p><?php echo !empty(of_get_option('dinner1')) ? of_get_option('dinner1') : ''; ?></p>
                                    <p><?php echo !empty(of_get_option('dinner2')) ? of_get_option('dinner2') : ''; ?></p>
                                    <p><?php echo !empty(of_get_option('dinner3')) ? of_get_option('dinner3') : ''; ?></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Intro Text List End -->

            </div>

        </div>
    </section>
    <!-- Wrapper End -->

<?php
$args = array(
    'posts_per_page' => -1,
    'post_type' => 'menu',
);
$the_query = new WP_Query($args);

if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
        $the_query->the_post();
        ?>
        <?php
        if (has_post_thumbnail()) {
            $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'img_600x400', true)[0];
        } else {
            $image_url = get_template_directory_uri() . '/images/event/event-img3.jpg';
        }
        ?>
        <section class="impx-wrapper bg-parallax2" data-uk-parallax="{bg: -200}"
                 style="background-image: url('<?php echo $image_url; ?>');">
            <div class="uk-container uk-container-center">

                <div class="uk-grid">
                    <div class="uk-width-2-3  uk-container-center">
                        <div class="impx-intro margin-remove intro-light uk-text-center">
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
                <div class="impx-overlay dark"></div>

            </div>
        </section>

        <section class="impx-wrapper  uk-margin-medium-bottom">
            <div class="uk-container uk-container-center">

                <ul class="uk-grid uk-grid-width-xlarge-1-2 uk-grid-width-large-1-2 uk-grid-width-medium-1-1 uk-grid-width-small-1-1 uk-grid-divider impx-menu-page menu-list-square">
                    <?php

                    // check if the repeater field has rows of data
                    if (get_field('menu')):

                        // loop through the rows of data
                        while (has_sub_field('menu')):

                            ?>
                            <li>
                                <div class="impx-menu-page-item">
                                    <div class="uk-grid">
                                        <?php
                                        $featured_image = get_sub_field('featured_image');

                                        if (!empty($featured_image)): ?>

                                            <?php $thumb = $featured_image['sizes']['img_800x800']; ?>
                                            <div class="uk-width-1-4">
                                                <div class="impx-menu-page-img">

                                                    <img src="<?php echo $thumb; ?>"
                                                         alt="<?php echo $featured_image['alt']; ?>"/>

                                                    <div class="impx-menu-page-img-shadow"></div>
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <!--<img src="<?php //echo get_template_directory_uri(); ?>/images/menu/menu-square1.jpg"
                                                        alt="Menu 1"/>-->
                                        <?php endif; ?>

                                        <div
                                            class="<?php echo !empty($featured_image) ? 'uk-width-3-4' : 'uk-width-1-1'; ?>">
                                            <div class="impx-menu-page-content">
                                                <h4 style="font-size: 23px;"><?php the_sub_field('menu-title'); ?>
                                                    <?php
                                                    while (has_sub_field('menu-image')):

                                                        $image = get_sub_field('image_sign');
                                                        $thumb = $image['sizes']['img_58x25'];
                                                        ?>
                                                        <img
                                                            src="<?php echo $thumb; ?>"
                                                            alt="">
                                                        <?php
                                                    endwhile;
                                                    ?>
                                                </h4>
                                                <div class="impx-menu-page-price">
                                                    <h5><?php the_sub_field('menu-price'); ?></h5>
                                                </div>
                                                <p><?php the_sub_field('menu-description'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php

                        endwhile;

                    else :
                        //No Menu Found
                    endif;

                    ?>
                </ul>

            </div>
        </section>

        <?php
    }
} else {
    //No Menu Found
}
/* Restore original Post Data */
wp_reset_postdata();
?>
<?php
get_footer();
