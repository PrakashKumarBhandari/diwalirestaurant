<div class="impx-page-heading">
    <?php
    if (has_post_thumbnail()) {
        $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'page_heading', true)[0];
    } else {
        $image_url = get_template_directory_uri() . '/images/page-heading1.jpg';
    }
    ?>
    <figure class="uk-overlay uk-overlay-page-title">
        <style>
            @media only screen and (min-width: 1025px) {
                .uk-overlay-page-title {
                    background: url('<?php echo $image_url; ?>') no-repeat;
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    background-size: cover;
                    width: 100%;
                    height: auto;
                    min-height: 365px;
                }

                .uk-overlay-page-title img {
                    display: none;
                }
            }
        </style>

        <img src="<?php echo $image_url; ?>"
             alt="Page Heading Image">

        <figcaption class="uk-overlay-panel uk-overlay-background uk-text-center">
            <div class="uk-container uk-container-center">
                <div class="uk-grid">
                    <div class="uk-width-2-3 uk-container-center">
                        <div class="impx-page-caption">
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_field('sub_title'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>