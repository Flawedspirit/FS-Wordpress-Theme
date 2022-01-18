<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="card shadow-1dp mb-5">
        <div class="card-body shadow-0dp">
            <?php

                the_title(
                    sprintf(
                        '<h2 class="card-title entry-title mb-0"><a href="%s" rel="bookmark">',
                        esc_url(get_permalink())
                    ), 
                    '</a></h2>'
                );

                if(has_post_thumbnail()): ?>

                    <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="img-thumbnail float-right ml-2" alt="<?php the_title_attribute(); ?>" title="<?php the_post_thumbnail_caption(); ?>">

                <?php endif;

                get_template_part('template-parts/post/entry', 'metadata');

                the_excerpt();

            ?>

            <a href="<?php echo esc_url(get_permalink()); ?>" class="btn btn-sm btn-flat-primary mt-2">Read more...</a>
        </div>        
    </div>
</article>