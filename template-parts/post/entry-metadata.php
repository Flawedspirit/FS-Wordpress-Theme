<div class="entry-metadata mb-3">
    <?php
    
    echo _e(vsprintf(
        /*
         * 1. %s - Image tag of the post's author
         * 2. %s - Link tag to the poster's author page
         * 3. %s - The name of the author
         * 4. %s - The date of the post
         * 5. %s - The timezone string
         * 6. %s - The time of the post
        */
        '<div class="entry-meta d-flex justify-content-start">%s <span class="text-muted ml-2"><a href="%s">%s</a> &ndash; %s at <abbr title="GMT %s">%s</abbr></span></div>',
        array(
            get_avatar(get_the_author_meta('ID'), 24, "", "", array('class' => 'rounded-circle')),
            get_author_posts_url(get_the_author_meta('ID'), get_the_author()),
            get_the_author(),
            get_the_date(get_option('date_format', 'F j, Y')),
            get_option('gmt_offset'),
            get_the_time(get_option('time_format', 'g:i a'))
        )
    ));

    ?>
</div>