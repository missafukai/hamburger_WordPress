<!-- ここから全ページ共通1 -->
<?php get_header(); ?>
<!-- ここまで全ページ共通1 -->
<?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
            <main class="l-main">
                <div class="p-jumbotron --single" style="background-image: url(<?php if(is_plugin_active('advanced-custom-fields/acf.php')) {
                    if(get_field( 'banner_bg' )){
                        the_field('banner_bg');
                    }else {
                        echo get_theme_file_uri('/img/cheese-burger.png');
                    }} else {
                        echo get_theme_file_uri('/img/cheese-burger.png');
                    } ?>);">
                    <h1 class="p-jumbotron__title c-title c-title--jp --single"><?php the_title(); ?></h1>
                </div> <!-- /p-jumbotron -->
                <div class="l-block">
                    <h2 class="wp-block-heading"><?php if(is_plugin_active( 'advanced-custom-fields/acf.php' )) {
                    the_field('menu_headline'); 
                } else {
                    echo 'ACFプラグインを有効化してください';
                }?></h2>
                    <p><?php if(is_plugin_active( 'advanced-custom-fields/acf.php' )) {
                        the_field('menu_excerpt');
                     } else {
                        echo 'ACFプラグインを有効化してください';
                     } ?></p>
                    <?php the_content(); ?>
                </div> 
<!-- ここから全ページ共通2 -->
            </main>
        </div> <!-- /c-flex--pc__main -->
        <?php get_sidebar(); ?>
    </div> <!-- /c-flex -->
<?php get_footer(); ?><!-- ここまで全ページ共通2 -->