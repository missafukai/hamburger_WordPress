<?php
$categories = get_categories();
$cat_id = $categories[0]->cat_ID;
$banner_bg = get_field('category_banner_bg', 'category_' . $cat);
$article_title = get_field('article_title', 'category_' . $cat);
$article_contents = get_field('article_contents',  'category_' . $cat);
?>

<?php get_header(); ?>
            <main class="l-main">
                <div class="p-jumbotron --archive" style="background-image: url(<?php if($banner_bg){the_field('category_banner_bg', 'category_' . $cat);} else {echo get_theme_file_uri('/img/cheese-burger.png');} ?>);">
                    <h1 class="p-jumbotron__title c-title --archive">Menu:</h1>
                    <p class="p-jumbotron__subtitle"><?php if(is_category()) {
                        single_cat_title(); } else{echo 'すべてのメニュー';} ?></p>
                </div> <!--/p-jumbotron -->
                <article class="p-article">
                    <h2 class="p-article__title"><?php if($article_title){the_field('article_title', 'category_' . $cat);} else { echo 'すべてのメニュー';} ?></h2>
                    <p class="p-article__contents"><?php if($article_contents) {the_field('article_contents', 'category_' . $cat);} else { echo 'カテゴリーの詳細です';} ?></p>
                </article> <!-- /p-article -->
                <?php get_template_part ( 'template-parts/post-content' ); ?>
                <?php get_template_part('template-parts/pagenation'); ?>
<!-- ここから全ページ共通2 -->
            </main>
        </div> <!-- /c-flex--pc__main -->
        <?php get_sidebar(); ?>
    </div> <!-- /c-flex -->
<?php get_footer(); ?>