<div class="entry-metadata mb-3">
    <?php
    
    _e(vsprintf(
        /*
         * 1. %s - Image tag of the post's author
         * 2. %s - Link tag to the comment's author page
         * 3. %s - The name of the author
         * 4. %s - The date of the post
         * 5. %s - The timezone string
         * 6. %s - The time of the post
        */
        '<div class="comment-meta d-flex justify-content-between"><span class="text-muted">%s <a href="%s">%s</a> &ndash; %s at <abbr title="GMT %s">%s</abbr></span></div>',
        array(
            get_avatar($comment, 24, "", "", array('class' => 'rounded-circle')),
            get_author_posts_url($comment, $comment->comment_author),
            $comment->comment_author, // The friendly name of the author
            get_comment_date(get_option('date_format', 'F j, Y')),
            get_option('gmt_offset'),
            get_comment_time(get_option('time_format', 'g:i a'))
        )
    ), 'flawedspirit-wp');

    ?>
</div>