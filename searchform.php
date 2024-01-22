<!-- Search form -->
<form role="search method="get" action="<?php echo home_url( '/' ); ?>" class="form-inline ">
  <input class="form-control form-control-sm mt-1 mr-3" type="text" name="s" placeholder="Search" value="<?php echo get_search_query(); ?>" aria-label="Search">
</form>