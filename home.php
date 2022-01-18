<?php
/**
 * Template for the default home page
 * 
 * @author Flawedspirit
 * @package FlawedspiritWP
 * @since 1.0.0
 */
?>

<?php get_header() ?>

<header>
    <h1><?php bloginfo('name'); ?></h1>
    <?php if(!get_bloginfo('description') == ""): ?>
        <h3 class="text-muted font-italic"><?php bloginfo('description'); ?></h3>
    <?php endif; ?>
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