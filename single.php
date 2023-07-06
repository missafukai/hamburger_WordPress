<!-- ここから全ページ共通1 -->
<?php get_header(); ?>
<!-- ここまで全ページ共通1 -->
            <main class="l-main">
                <div class="p-jumbotron --single" style="background-image: url(<?php if(get_field('banner_bg')){the_field('banner_bg'); } else {echo get_theme_file_uri('img/cheese-burger.png');} ?>);">
                    <h1 class="p-jumbotron__title c-title c-title--jp --single"><?php the_title(); ?></h1>
                </div> <!-- /p-jumbotron -->
                <div class="l-block">
                    <h2 class="wp-block-heading"><?php the_field('menu_headline'); ?></h2>
                    <p><?php the_field('menu_excerpt'); ?></p>
                    <?php the_content(); ?>
                </div> 
<!-- ここから全ページ共通2 -->
            </main>
        </div> <!-- /c-flex--pc__main -->
        <?php get_sidebar(); ?>
    </div> <!-- /c-flex -->
<?php get_footer(); ?><!-- ここまで全ページ共通2 -->