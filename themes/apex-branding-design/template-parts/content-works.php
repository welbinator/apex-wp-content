<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Apex_Branding_&_Design
 */

?>


<div class="portfolio-card-container">

    <div class="portfolio-glimpse-bar">
        <span class="portfolio-information"><?php the_field('year'); ?></span><span class="portfolio-information"><?php the_field('project_type'); ?></span>
        <span class="portfolio-information">#01</span>
    </div><!-- portfolio-glimpse-bar -->
    <div class="card portfolio-card">
        <div class="card-body">
            <?php
            if (is_singular()) :
                the_title('<h1 class="entry-title">', '</h1>');
            else :
                the_title('<h1 class="mt-auto mt-lg-0">', '</a></h1>');
            endif;

            ?>
            <?php
            the_content(
                sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'apex-branding-design'),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post(get_the_title())
                )
            );


            ?>
            <div class="btn-container mb-3 mb-md-0"><a class="btn btn-primary" role="button" href="<?php echo esc_url(get_permalink()) ?>">View Case Study</a></div>
        </div><!-- card-body -->
        <img class="card-img-bottom w-100 d-block card-portfolio-image" src="<?php the_field('hero_image'); ?>">

    </div><!-- card portfolio-card -->

</div><!-- portfolio-card-container -->