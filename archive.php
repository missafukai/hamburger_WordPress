<?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
<?php get_header(); ?>
            <main class="l-main">
                <div class="p-jumbotron --archive" style="background-image: url(<?php if(is_plugin_active('advanced-custom-fields/acf.php')) {
                    if(get_field( 'category_banner_bg', 'category_' . $cat)) {
                        the_field('category_banner_bg', 'category_' . $cat);
                    } else {
                        echo get_theme_file_uri('/img/three-burgers.png');
                    }} else {
                        echo get_theme_file_uri('/img/three-burgers.png');
                    } ?>);">
                    <h1 class="p-jumbotron__title c-title --archive">Menu:</h1>
                    <p class="p-jumbotron__subtitle"><?php if(is_category()) {
                        single_cat_title(); } else{echo 'すべてのメニュー';} ?></p>
                </div> <!--/p-jumbotron -->
                <article class="p-article">
                    <h2 class="p-article__title"><?php if(is_plugin_active( 'advanced-custom-fields/acf.php')) {
                        if(get_field('article_title', 'category_' . $cat)) {
                            the_field('article_title', 'category_' . $cat);
                            } else {
                                 echo '全般的な小見出しです';
                        }} else {
                            echo 'ACFプラグインを有効化してください';
                        } ?></h2>
                    <p class="p-article__contents"><?php if(is_plugin_active( 'advanced-custom-fields/acf.php')) {
                        if(get_field('article_contents',  'category_' . $cat)) {
                            the_field('article_contents', 'category_' . $cat);
                        } else { 
                            echo 'カテゴリーの詳細です。カテゴリーの詳細です。カテゴリーの詳細です。カテゴリーの詳細です。カテゴリーの詳細です。';
                            }} else {
                            echo 'ACFプラグインを有効化してください';
                            } ?></p>
                </article> <!-- /p-article -->
                <?php get_template_part ( 'template-parts/post-content' ); ?>
                <?php get_template_part('template-parts/pagenation'); ?>
<!-- ここから全ページ共通2 -->
            </main>
        </div> <!-- /c-flex--pc__main -->
        <?php get_sidebar(); ?>
    </div> <!-- /c-flex -->
<?php get_footer(); ?>