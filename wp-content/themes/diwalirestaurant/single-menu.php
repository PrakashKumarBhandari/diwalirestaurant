<?php
get_header();
?>
<?php
while (have_posts()) : the_post();
    ?>
    <!-- Page Heading -->
    <?php get_template_part('template-parts/content', 'page_title'); ?>
    <!-- Page Heading End -->

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
endwhile;
?>
<?php
get_footer();
