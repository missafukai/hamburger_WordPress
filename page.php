<!-- ここから全ページ共通1 -->
<?php get_header(); ?>
<!-- ここまで全ページ共通1 -->
            <main class="l-main">
                <div class="p-jumbotron --page" style="background-image: url(<?php the_field('banner_bg'); ?>);">
                    <h1 class="p-jumbotron__title c-title c-title--jp --page"><?php the_title(); ?></h1>
                </div> <!-- /p-jumbotron -->
                <div class="l-block">
                    <?php the_content(); ?>
                </div>
<!-- ここから全ページ共通2 -->
            </main>
        </div> <!-- /c-flex--pc__main -->
        <?php get_sidebar(); ?>
    </div> <!-- /c-flex -->
<?php get_footer(); ?><!-- ここまで全ページ共通2 -->