<div id="comments" class="ml-3">
    <h2>Comments (<?php printf(_x('%1$s so far', get_comments_number(), 'comment-title', 'flawedspirit-wp'), number_format_i18n(get_comments_number())); ?>)</h2>

    <?php if(!comments_open()) : /* Notify user if comments are closed */ ?>
        <div class="alert alert-info" role="alert">
            <?php _e('Comments are currently closed.', 'flawedspirit-wp'); ?>
        </div>
    <?php endif; ?>

    <div class="comment-list mb-4">
        <?php if(post_password_required()) : /* Return if comments are password-protected */ ?>
            <div class="alert alert-warning" role="alert">
                <?php _e('This post is password protected. <a href="' . get_option('siteurl') . '/wp-login.php?redirect_to=' . urlencode(get_permalink()) . '">Login</a> to view any comments.', 'flawedspirit-wp'); ?>
            </div>
        <?php return; endif; ?>

        <?php 
            $comments = get_comments();

            if($comments): ?>

            <?php foreach($comments as $comment): ?>

                <div id="comment-<?php comment_ID(); ?>" class="card mb-1 shadow-0dp">
                    <div class="card-body">
                        <?php get_template_part('template-parts/post/comment', 'metadata'); ?>
                        <?php comment_text(); ?>
                    </div>
                </div>

            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <?php

        $commenter = wp_get_current_commenter();
        $required = ((int) get_option('require_name_email') === 1);
        $req_string = '<span class="text-danger"> *</span>';

        $fields = array(
            'author' => '<div class="form-group row">' . 
                '<label for="author" class="col-sm-2 col-form-label">' . __('Name') . ($required ? $req_string : '') . '</label>' .
                '<input type="text" id="author" name="author" class="form-control col-sm-5">' .
            '</div>',
            'email' => '<div class="form-group row">' . 
                '<label for="email" class="col-sm-2 col-form-label">' . __('Email') . ($required ? $req_string : '') . '</label>' .
                '<input type="email" id="email" name="email" class="form-control col-sm-5">' .
            '</div>'
        );

        $comment_field = '<div class="form-group row px-3">' .
            '<label for="comment">' . __('Comment') . ($required ? $req_string : '') . '</label>' .
            '<textarea class="form-control" id="comment" name="comment" rows="5"></textarea>' .
            '</div>';

        $comment_args = array(
            'fields'        => $fields,
            'comment_field' => $comment_field,
            'comment_notes_before' => __('<p class="mb-3">Your email address will not be shown to others. Required fields are marked with' . $req_string . '.</p>'),
            'title_reply'   => __('Leave a Comment')
        );

    ?>

    <div class="mb-3">
        <?php comment_form($comment_args); ?>
    </div>

    <p><?php _e("Fields marked with{$req_string} are required."); ?></p>
</div>
