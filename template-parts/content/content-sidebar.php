<aside id="sidebar" class="sidebar col-xl-4 order-1 order-xl-2 mb-3">
    <div class="mb-4">
        <?php get_search_form(); ?>
    </div>

    <div class="card shadow-1dp d-none d-xl-block">
        <div class="card-body">
            <h4>Archives</h4>

            <ol class="list-unstyled mb-0">
                <?php wp_get_archives('type=monthly'); ?>
            </ol>
        </div>
    </div>
</aside>