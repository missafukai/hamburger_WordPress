<?php get_header(); ?>
            <main class="l-main">
                <div class="p-jumbotron --index" style="background-image: url(<?php echo get_theme_file_uri('img/burger-veggie.png'); ?>);">
                    <h1 class="p-jumbotron__title c-title c-title--jp">404 Not Found</h1>
                </div> <!-- /p-jumbotron -->
                <article class="p-article">
                    <h2 class="p-article__title">大変申し訳ありませんが、お探しのページが見つかりませんでした。</h2>
                    <p class="p-article__contents">一時的にアクセスできない状況にあるか、移動もしくは削除された可能性があります。</p>
                    <p>お手数ですが、<a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a>から再度アクセスしてください。</p>
                    </article> <!-- /p-article -->
                    <article class="p-article">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="wp-block-button__link wp-element-button">HOMEへ</a>
                    </article> <!-- /p-article -->
                </article> <!-- /p-article -->
<!-- ここから全ページ共通2 -->
            </main>
        </div> <!-- /c-flex--pc__main -->
        <?php get_sidebar(); ?>
    </div> <!-- /c-flex -->
<?php get_footer(); ?>