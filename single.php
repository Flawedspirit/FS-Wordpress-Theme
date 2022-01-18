<?php
/**
 * Template for an expanded view of a single post
 * 
 * @author Flawedspirit
 * @package FlawedspiritWP
 * @since 1.0.0
 */
?>

<?php get_header() ?>

<?php if(have_posts()): ?>

    <?php while(have_posts()): the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
            <div class="card shadow-1dp mb-5">
                <?php if(has_post_thumbnail()): ?>

                    <div class="card-header post-header">
                        <?php echo get_the_post_thumbnail(null, 'post_head', ''); ?>

                        <div class="post-title-wrapper">
                            <?php
                                the_title('<h2 class="post-title">', '</h2>');

                                get_template_part('template-parts/post/entry', 'metadata');
                            ?>
                        </div>
                    </div>

                <?php else: ?>

                    <div class="card-header">
                        <?php
                            the_title('<h2 class="post-title">', '</h2>');

                            get_template_part('template-parts/post/entry', 'metadata');
                        ?>  
                    </div>

                <?php endif; ?>

                <div class="card-body">
                    <?php

                        the_content();

                        edit_post_link('Edit Post', '<p>', '</p>', null, 'btn btn-sm btn-flat-primary mt-3');

                        get_template_part('template-parts/post/entry', 'footer');
                    ?>
                </div>
            </div>

            <?php comments_template() ?>
        </article>

    <?php endwhile; ?>

<?php else: ?>

    <?php _e('Nothing has been posted here.'); ?>
<?php endif; ?> 

<?php get_footer() ?>