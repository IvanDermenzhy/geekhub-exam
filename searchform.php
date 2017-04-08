<form role="search" class="d-flex justify-content-center " method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="text" class="search-field" placeholder="Type and hit Enter..." value="<?php echo get_search_query(); ?>" name="s" id="s" />
</form>