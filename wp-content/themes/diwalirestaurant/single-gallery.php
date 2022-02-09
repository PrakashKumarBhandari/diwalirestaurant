<?php
get_header();
?>
    <!-- Page Heading -->
<?php get_template_part('template-parts/content', 'page_title'); ?>
    <!-- Page Heading End -->

    <!-- Wrapper -->
    <section class="impx-wrapper">
        <div class="uk-container uk-container-center">
            <div class="uk-grid uk-margin-top-remove">
                <?php while (have_posts()) : the_post();
                    ?>
                    <!-- Intro Text -->
                    <!--<div class="uk-width-xlarge-4-10 uk-width-large-4-10 uk-width-medium-1-1 uk-width-small-1-1">
                        <div class="impx-intro margin-medium">
                            <?php //the_content(); ?>
                        </div>
                    </div>-->
                    <!-- Intro Text End-->

                    <!-- Intro Images -->
                    <div class="uk-width-xlarge-10-10 uk-width-large-10-10 uk-width-medium-1-1 uk-width-small-1-1">
                        <ul class="uk-grid uk-grid-small gallery">
                            <?php

                            // check if the repeater field has rows of data
                            if (get_field('gallery_images')):
                                // loop through the rows of data
                                $i = 0;
                                while (has_sub_field('gallery_images')):

                                    $image = get_sub_field('image');
                                    $thumb_img = $image['sizes']['img_800x800'];
                                    ?>
                                    <li class="uk-width-xlarge-1-4 uk-width-large-1-4 uk-width-medium-1-4 uk-width-small-1-1"
                                        style="margin-bottom:10px;">
                                        <figure class="uk-overlay uk-overlay-hover">
                                            <a href="<?php echo $image['url']; ?>"
                                               class="magnific-gallery">
                                                <img class="uk-overlay-scale"
                                                     src="<?php echo $thumb_img; ?>"
                                                     alt="Intro 1"/>
                                            </a>
                                        </figure>
                                    </li>
                                    <?php
                                    $i++;
                                endwhile;

                            else :
                                //No Gallery Image Found
                            endif;
                            ?>
                        </ul>
                    </div>
                    <!-- Intro Images End -->
                    <?php
                endwhile; ?>
            </div>
        </div>
    </section>
    <!-- Wrapper End -->
<?php
get_footer();
