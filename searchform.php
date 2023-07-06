<form id="searchform" action="<?php echo home_url('/'); ?>" method="get" class="p-search">
    <div class="p-search__wrapper">
        <input class="c-input--search p-search__input" type="search" name="s" id="s" value="<?php if(is_search()){ echo get_search_query(); } ?>" >
    </div> <!-- /p-search__wrapper -->
    <button class="c-button--submit p-search__submit" type="submit" name="submit">検索</button>
</form> <!-- /p-search -->
