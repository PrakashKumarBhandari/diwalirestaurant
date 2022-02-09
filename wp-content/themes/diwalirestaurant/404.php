<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Diwali_Restaurant
 */

get_header(); ?>
    <!-- Page Heading -->
    <div class="impx-page-heading">
        <figure class="uk-overlay">
            <img src="<?php echo get_template_directory_uri(); ?>/images/page-heading1.jpg"
                 alt="Page Heading Image">
            <figcaption class="uk-overlay-panel uk-overlay-background uk-text-center">
                <div class="uk-container uk-container-center">
                    <div class="uk-grid">
                        <div class="uk-width-2-3 uk-container-center">
                            <div class="impx-page-caption">
                                <h1>404</h1>
                                <p>Page not found!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </figcaption>
        </figure>
    </div>

    <!-- Wrapper -->
    <section class="impx-wrapper uk-margin-bottom-remove">
        <div class="uk-container uk-container-center">
            <div class="uk-grid" data-uk-grid-margin="">

                <!-- Intro -->
                <div
                    class="uk-width-xlarge-2-3 uk-width-large-2-3 uk-width-medium-1-1 uk-width-small-1-1 uk-container-center">
                    <div class="impx-intro margin-remove uk-text-center">
                        <section class="error-404 not-found">
                            <header class="page-header">
                                <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'diwalirestaurant'); ?></h1>
                                <br>
                            </header><!-- .page-header -->

                            <div class="page-content">
                                <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'diwalirestaurant'); ?></p>

                            </div><!-- .page-content -->
                            <div class="uk-grid">
                                <div
                                    class="uk-width-xlarge-1-3 uk-width-large-1-3 uk-width-small-1-2 uk-container-center">
                                    <a href="<?php echo esc_url(home_url('/')); ?>"
                                       class="uk-button uk-button-large default radius uk-width-1-1">Back to home</a>
                                </div>
                            </div>
                        </section><!-- .error-404 -->

                    </div>
                </div>
                <!-- Intro End -->

            </div>
        </div>
    </section>
    <!-- Wrapper End -->
<?php
get_footer();
