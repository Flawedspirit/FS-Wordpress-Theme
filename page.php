<?php
/**
 * Template for a standard page
 * 
 * @author Flawedspirit
 * @package FlawedspiritWP
 * @since 1.0.0
 */
?>

<?php get_header() ?>

<?php
    if(have_posts()) {

        while(have_posts()) {
            
            the_post();

            the_title('<h2>', '</h2>');
            get_template_part('template-parts/post/entry', 'metadata');

            the_content();
        }
    }
?>

<?php get_footer() ?>