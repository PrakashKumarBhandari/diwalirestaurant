<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Diwali_Restaurant
 */

get_header(); ?>
    <!-- Page Heading -->
<?php get_template_part('template-parts/content', 'page_title'); ?>

    <!-- Wrapper -->
    <section class="impx-wrapper uk-margin-bottom-remove">
        <div class="uk-container uk-container-center">
            <div class="uk-grid" data-uk-grid-margin="">

                <!-- Intro -->
                <div
                    class="uk-width-xlarge-1-1 uk-width-large-1-1 uk-width-medium-1-1 uk-width-small-1-1 uk-container-center">
                    <div class="impx-intro margin-remove single-page-content">
                        <?php
                        while (have_posts()) : the_post();

                            get_template_part('template-parts/content', 'page');

                            // If comments are open or we have at least one comment, load up the comment template.
                            if (comments_open() || get_comments_number()) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>
                    </div>
                </div>
                <!-- Intro End -->

            </div>
        </div>
    </section>
    <!-- Wrapper End -->

<?php
get_footer();
