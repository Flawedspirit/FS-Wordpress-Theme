<?php
/**
 * Template a page with no available content
 * 
 * @author Flawedspirit
 * @package FlawedspiritWP
 * @since 1.0.0
 */
?>

<h2 class="text-danger">Nothing was found!</h2>

<?php if(is_home() && current_user_can('publish_posts')) : ?>

    <?php __(printf('Nothing has been posted to this site yet. <a href="%s">Click here</a> to add a new post.',
        esc_url(admin_url('post-new.php'))
    )); ?>

<?php elseif(is_search()) : ?>

    <p><?php _e("Nothing was found using that search term. Try something else."); ?></p>
<?php else : ?>

    <p><?php _e("For whatever reason we couldn't find that. But don't worry; we got'chu, fam. Try searching for it using the search bar."); ?></p>
<?php endif; ?>