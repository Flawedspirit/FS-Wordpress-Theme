<?php
/**
 * Template for the search results page
 * 
 * @author Flawedspirit
 * @package FlawedspiritWP
 * @since 1.0.0
 */
?>

<?php get_header() ?>

<section>
    <h1 class="header-title">
        <?php
            printf('%s "%s"',
                __('Search results for:'),
                get_search_query()
            );
        ?>
    </h1>
</section>

<?php if(have_posts()) :

    while(have_posts()) {
        the_post();

        get_template_part('template-parts/content/content', 'excerpt');
    }
else : ?>

    <?php get_template_part('template-parts/content/content', 'none'); ?>                
<?php endif; ?>

<?php get_footer() ?>