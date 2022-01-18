<?php

$categories = get_the_category();
$separator = ', ';
$output = '';

if(!empty($categories)) {

    foreach($categories as $category) {
        $output .= '<a href="' . esc_url( get_category_link($category->term_id)) . '" alt="' . esc_attr( sprintf(__('View all posts in %s', 'flawedspirit-wp'), $category->name ) ) . '">' . esc_html($category->name) . '</a>' . $separator;
    }    
}

?>

<div class="mt-3">
    <?php echo trim(__('Categories: ') . $output, $separator); ?>
</div>