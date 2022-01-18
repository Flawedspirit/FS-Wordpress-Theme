<?php
/**
 * Template for an attachment info page
 * 
 * @author Flawedspirit
 * @package FlawedspiritWP
 * @since 1.0.0
 */
?>

<?php get_header() ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="card-dark shadow-1dp mb-5">
        <div class="card-header">
            <?php the_title('<h2 class="mb-0">', '</h2>'); ?>
        </div>
        <div class="card-body shadow-0dp">
            <div class="row">                        
                <div class="col-md-6">
                    <?php

                        $image_size = apply_filters('wporg_attachment_size', 'medium');

                        echo wp_get_attachment_image(get_the_ID(), $image_size);

                    ?>
                </div>

                <div class="col-md-6">
                    <?php 

                        if(has_excerpt()) {
                            the_excerpt();
                        }

                    ?>
                </div>
            </div>
        </div>
        <?php get_template_part('template-parts/post/entry', 'metadata'); ?>
    </div>
</article>

<?php get_footer() ?>