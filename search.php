<?php get_header(); ?>
            <main class="l-main">
                <div class="p-jumbotron --archive" style="background-image: url(<?php echo get_theme_file_uri('img/three-burgers.png'); ?>);">
                    <h1 class="p-jumbotron__title c-title --archive">Search:</h1>
                    <p class="p-jumbotron__subtitle --search"><?php the_search_query(); ?></p>
                </div> <!--/p-jumbotron -->
                <article class="p-article">
                    <h2 class="p-article__title">小見出しが入ります</h2>
                    <p class="p-article__contents">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </article> <!-- /p-article -->
                <?php get_template_part ( 'template-parts/post-content' ); ?>
                <?php get_template_part('template-parts/pagenation'); ?>
<!-- ここから全ページ共通2 -->
            </main>
        </div> <!-- /c-flex--pc__main -->
        <?php get_sidebar(); ?>
    </div> <!-- /c-flex -->
<?php get_footer(); ?>