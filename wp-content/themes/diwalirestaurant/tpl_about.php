<?php
/**
 * Template Name: About Page Template
 */
get_header();
?>
    <!-- Page Heading -->
<?php get_template_part('template-parts/content', 'page_title'); ?>
    <!-- Page Heading End -->

    <!-- Wrapper -->
    <section class="impx-wrapper">
        <div class="uk-container uk-container-center">
            <div class="uk-grid uk-margin-top-remove">

                <!-- Intro Images  -->
                <div class="uk-width-xlarge-4-6 uk-width-large-4-6 uk-width-medium-1-1 uk-width-medium-1-1">
                    <ul class="uk-grid uk-grid-width-xlarge-1-3 uk-grid-width-large-1-3 uk-grid-width-medium-1-3 uk-grid-width-small-1-3  uk-grid-small">
                        <li>
                            <figure class="uk-overlay uk-overlay-hover">
                                <img  class="uk-overlay-scale" src="<?php echo get_template_directory_uri(); ?>/images/content-img1.jpg" alt="Content Img 1"/>
                            </figure>
                        </li>
                        <li>
                            <figure class="uk-overlay uk-overlay-hover">
                                <img  class="uk-overlay-scale" src="<?php echo get_template_directory_uri(); ?>/images/content-img2.jpg" alt="Content Img 2" />
                            </figure>
                        </li>
                        <li>
                            <figure class="uk-overlay uk-overlay-hover">
                                <img  class="uk-overlay-scale" src="<?php echo get_template_directory_uri(); ?>/images/content-img3.jpg" alt="Content Img 3" />
                            </figure>
                        </li>
                    </ul>
                </div>
                <!-- Intro Images End -->

                <!-- Intro Text -->
                <div class="uk-width-xlarge-2-6 uk-width-large-2-6 uk-width-medium-1-1 uk-width-small-1-1 uk-margin-large-top">
                    <div class="impx-intro margin-medium">
                        <p class="impx-pre-intro">the Reason</p>
                        <h2>Why Choose Us?</h2>
                        <p>Lorem ipsum dolor sit amet ac gravida tortor eu lacinia tincidunt ac volutpat dui sodales lectus</p>
                    </div>
                    <h5><span>Our Advantages</span></h5>
                    <ol class="uk-list uk-list-line uk-list-space">
                        <li>Duis pulvinar sapien sit amet venenatis.</li>
                        <li>viverra  massa sed urna feugiat</li>
                        <li>sed tincidunt lectus aliquam amet</li>
                    </ol><br/>

                    <a class="uk-button uk-button-large outline default" href="">Browse Our Menu<i class="uk-icon-folder-open"></i></a>
                </div>
                <!-- Intro Text End -->
            </div>
        </div>
    </section>
    <!-- Wrapper End -->

    <!-- Chef Wrapper -->
    <section class="impx-wrapper">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">

                <!-- Intro -->
                <div class="uk-width-3-4 uk-container-center">
                    <div class="impx-intro uk-text-center">
                        <p class="impx-pre-intro">Greeting and</p>
                        <h1><span>Meet Our Chefs</span></h1>
                        <p>Phasellus non auctor sem, nec laoreet augue fermentum faucibus sit volutpat in volutpat mattis et velit euismod efficitur  euismod efficitur laoreet augue</p>
                    </div>
                </div>
                <!-- Intro End -->

                <!-- Chefs List -->
                <div class="uk-width-1-1 uk-container-center">
                    <ul class="uk-grid uk-grid-width-xlarge-1-4 uk-grid-width-large-1-4  uk-grid-width-medium-1-2 uk-grid-width-small-1-1 impx-chef-list">

                        <!-- Chefs List Item 1 -->
                        <li class="uk-text-center">
                            <div class="impx-chef-item">
                                <h5>Chef Marinka</h5>
                                <div class="impx-chef-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/people/chef1.jpg" class="uk-border-circle" alt="Chef 1">
                                </div>
                                <div class="impx-chef-content">
                                    <ul class="impx-chef-social">
                                        <li><a href="#"><i class="uk-icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="uk-icon-facebook"></i></a></li>
                                        <li><a href="#"><i class="uk-icon-instagram"></i></a></li>
                                        <li><a href="#"><i class="uk-icon-linkedin"></i></a></li>
                                    </ul>
                                    <p>Phasellus non auctor sem in volutpat in mattis euismod efficitur laoreet augue ac</p>
                                </div>
                            </div>
                        </li>
                        <!-- Chefs List Item 1 End -->

                        <!-- Chefs List Item 2 -->
                        <li class="uk-text-center">
                            <div class="impx-chef-item">
                                <h5>Chef Jono</h5>
                                <div class="impx-chef-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/people/chef2.jpg" class="uk-border-circle" alt="Chef 2">
                                </div>
                                <div class="impx-chef-content">
                                    <ul class="impx-chef-social">
                                        <li><a href="#"><i class="uk-icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="uk-icon-facebook"></i></a></li>
                                        <li><a href="#"><i class="uk-icon-instagram"></i></a></li>
                                        <li><a href="#"><i class="uk-icon-linkedin"></i></a></li>
                                    </ul>
                                    <p>Phasellus non auctor sem in volutpat in mattis euismod efficitur laoreet augue ac</p>
                                </div>
                            </div>
                        </li>
                        <!-- Chefs List Item 2 End -->

                        <!-- Chefs List Item 3 -->
                        <li class="uk-text-center">
                            <div class="impx-chef-item">
                                <h5>Chef Moreno</h5>
                                <div class="impx-chef-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/people/chef3.jpg" class="uk-border-circle" alt="Chef 3">
                                </div>
                                <div class="impx-chef-content">
                                    <ul class="impx-chef-social">
                                        <li><a href="#"><i class="uk-icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="uk-icon-facebook"></i></a></li>
                                        <li><a href="#"><i class="uk-icon-instagram"></i></a></li>
                                        <li><a href="#"><i class="uk-icon-linkedin"></i></a></li>
                                    </ul>
                                    <p>Phasellus non auctor sem in volutpat in mattis euismod efficitur laoreet augue ac</p>
                                </div>
                            </div>
                        </li>
                        <!-- Chefs List Item 3 End -->

                        <!-- Chefs List Item 4 -->
                        <li class="uk-text-center">
                            <div class="impx-chef-item">
                                <h5>Chef Master</h5>
                                <div class="impx-chef-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/people/chef4.jpg" class="uk-border-circle" alt="Chef 4">
                                </div>
                                <div class="impx-chef-content">
                                    <ul class="impx-chef-social">
                                        <li><a href="#"><i class="uk-icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="uk-icon-facebook"></i></a></li>
                                        <li><a href="#"><i class="uk-icon-instagram"></i></a></li>
                                        <li><a href="#"><i class="uk-icon-linkedin"></i></a></li>
                                    </ul>
                                    <p>Phasellus non auctor sem in volutpat in mattis euismod efficitur laoreet augue ac</p>
                                </div>
                            </div>
                        </li>
                        <!-- Chefs List Item 4 End -->
                    </ul>
                </div>
                <!-- Chefs List End -->

            </div>
        </div>
    </section>
    <!-- Chef Wrapper End -->
<?php
get_footer();
