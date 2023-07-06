<nav class="p-pager__container">
    <!-- <ul class="p-pager"> -->
        <?php wp_pagenavi();?>
    <!-- </ul> /p-pager -->
    <?php if ( $wp_query -> max_num_pages > 1 ) : ?>
        <ul class="p-pager--sp">
            <li class="p-pager__prev"><?php next_posts_link( '<span class="previouspostslink"></span> <p>前へ</p>'); ?></li>
            <li class="p-pager__next"><?php previous_posts_link( '次へ <span class="nextpostslink"></span>'); ?></li>
        </ul>
    <?php endif; ?>
</nav> <!-- /p-pager__container -->