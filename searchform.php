<div class="card shadow-1dp">
    <div class="card-body">
        <h4 class="d-none d-xl-block">Search</h2>
        
        <form action="/" method="GET" class="d-none d-xl-block">
            <div class="form-group mb-0">
                <input id="search" class="form-control" name="s" placeholder="Search <?php echo get_bloginfo('name'); ?>" value="<?php the_search_query(); ?>"></input>
                <button type="submit" class="btn btn-block btn-primary mt-3">Search</button>
            </div>
        </form>

        <form action="/" method="GET" class="form-inline d-xl-none">
            <div class="form-group row w-100">
                <label for="search-sm" class="col-sm-2 col-form-label">Search</label>

                <div class="col-sm-10 input-group mb-0">                    
                    <input id="search-sm" class="form-control" name="s" placeholder="Search <?php echo get_bloginfo('name'); ?>" value="<?php the_search_query(); ?>"></input>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-block btn-primary input-group-button">Search</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
