<header id="navbar" class="container-fluid mb-4" role="navigation">
    <div id="navbar-container" class="row shadow-1dp">
        <div id="title" class="col-lg-3">
            <a href="<?php bloginfo('url'); ?>">
                <img class="py-3 mx-auto d-block logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-header.svg" alt="Flawedspirit Logo" height="80px">
            </a>
        </div>

        <div id="main-nav" class="col-lg-9 p-0">
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php

                    wp_nav_menu(
                        array(
                            'theme_location'    => 'header-nav',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_id'      => 'nav-collapse',
                            'container_class'   => 'navbar-collapse collapse',
                            'menu'              => 'top-menu',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker()
                        )
                    );
                ?>
            </nav>
        </div>
    </div>

    <div id="banner" class="row shadow-1dp">
        <div class="banner-img col-md-12">
            <img src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width); ?>" height="<?php echo absint(get_custom_header()->height); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
        </div>
    </div>
</header>
