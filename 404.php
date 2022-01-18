<?php
/**
 * Template for the 404 page when the requested content is not found
 * 
 * @author Flawedspirit
 * @package FlawedspiritWP
 * @since 1.1.0
 */
?>

<?php get_header() ?>

    <h2 class="text-danger"><?php _e("There is no 404 &ndash; only Zuul", 'flawedspirit-wp'); ?></h2>

    <p><?php _e("Whatever you were looking for, I don't got it. Try searching for it in yonder search bar?", 'flawedspirit-wp'); ?></p>

<?php get_footer() ?>