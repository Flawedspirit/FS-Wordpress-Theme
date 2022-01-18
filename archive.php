<?php
/**
 * Template for the archive page
 * 
 * @author Flawedspirit
 * @package FlawedspiritWP
 * @since 1.0.0
 */
?>

<?php get_header() ?>

<header>
    <?php the_archive_title('<h1 class="header-title">', '</h1>'); ?>
</header>

<?php if(have_posts()) :

    while(have_posts()) {
        the_post();

        get_template_part('template-parts/content/content', 'excerpt');
    }
else : ?>

    <?php get_template_part('template-parts/content/content', 'none'); ?>
<?php endif; ?>

<?php get_footer() ?>