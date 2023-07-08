<?php get_header(); ?>
            <main class="l-main">
            <!-- plugin.phpを読み込む -->
            <?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
                <div class="p-jumbotron --index" 
                    style="background-image: url(<?php if(is_plugin_active( 'advanced-custom-fields/acf.php' )) { if (get_field('banner_bg')) {
                        the_field('banner_bg');
                    } else {
                        echo get_theme_file_uri('/img/burger-veggie.png');
                    }} else {
                        echo get_theme_file_uri('/img/burger-veggie.png'); 
                    } ?>);">
                    <h1 class="p-jumbotron__title c-title c-title--jp"><?php if(is_plugin_active( 'advanced-custom-fields/acf.php' )) {
                        the_field('page_title');
                     } else {
                        echo 'ページタイトル';
                     } ?></h1>
                </div> <!-- /p-jumbotron -->
                <div class="p-card__container">
                    <div class="p-card --takeout" 
                        style="background-image: url(<?php if(is_plugin_active( 'advanced-custom-fields/acf.php' )) {
                                the_field('take_out_bg');
                            } else { 
                                echo get_theme_file_uri('/img/three-burgers.png');
                            } ?>);">
                        <a href="<?php echo get_category_link('3'); ?>">
                            <div class="p-card__title c-title">
                                <h1>Take Out</h1>
                            </div> <!-- /p-card__title 1-->
                            <div class="p-card__contents">
                                <div class="p-card__content">
                                    <h3><?php if(is_plugin_active( 'advanced-custom-fields/acf.php' )) {
                                        the_field('take_out1');
                                     } else {
                                        echo 'Take Out';
                                     } ?></h3>
                                    <p><?php if(is_plugin_active( 'advanced-custom-fields/acf.php' )) {
                                        the_field('take_out1_description');
                                     } else {
                                        echo 'Advanced Custom Fieldsプラグインを有効化してください';

                                    } ?></p>
                                </div> <!-- /p-card__content 1-->
                                <div class="p-card__content">
                                    <h3><?php if(is_plugin_active( 'advanced-custom-fields/acf.php' )) {
                                        the_field('take_out2');
                                     } else {
                                        echo 'Take Out';
                                     } ?></h3>
                                    <p><?php if(is_plugin_active( 'advanced-custom-fields/acf.php' )) {
                                        the_field('take_out2_description');
                                     } else {
                                        echo 'Advanced Custom Fieldsプラグインを有効化してください';
                                     } ?></p>
                                </div> <!-- /p-card__content 1-->
                            </div> <!-- /p-card__contents 1-->
                        </a>
                    </div> <!-- /p-card 1-->
                    <div class="p-card --eatin" style="background-image: url(<?php if(is_plugin_active( 'advanced-custom-fields/acf.php' )) {
                        the_field('eat_in_bg');
                     } else {
                        echo get_theme_file_uri('/img/bacon-burger.png');
                     } ?>);">
                        <a href="<?php echo get_category_link('2'); ?>">   
                            <div class="p-card__title c-title">
                                <h1>Eat In</h1>
                            </div> <!-- /p-card__title 2-->
                            <div class="p-card__contents">
                                <div class="p-card__content">
                                    <h3><?php if(is_plugin_active( 'advanced-custom-fields/acf.php' )) {
                                        the_field( 'eat_in1' );
                                     } else {
                                        echo 'Eat In';
                                     } ?></h3>
                                    <p><?php if(is_plugin_active( 'advanced-custom-fields/acf.php' )) {
                                        the_field( 'eat_in1_description' );
                                     } else {
                                        echo 'Advanced Custom Fieldsプラグインを有効化してください';
                                     } ?></p>
                                </div> <!-- /p-card__content 2-->
                                <div class="p-card__content">
                                    <h3><?php if(is_plugin_active( 'advanced-custom-fields/acf.php' )) {
                                        the_field( 'eat_in2' );
                                     } else {
                                        echo 'Eat In';
                                     } ?></h3>
                                    <p><?php if(is_plugin_active( 'advanced-custom-fields/acf.php' )) {
                                        the_field( 'eat_in2_description' );
                                     } else {
                                        echo 'Advanced Custom Fieldsプラグインを有効化してください';
                                     } ?></p>
                                </div> <!-- /p-card__content 2-->
                            </div> <!-- /p-card__contents 2-->
                        </a>
                    </div> <!-- /p-card 2--> 
                </div> <!-- /p-card__container -->
                <article class="p-about">
                    <h2 class="p-about__title"><?php if(is_plugin_active( 'advanced-custom-fields/acf.php' )) {
                        the_field('about_title');
                     } else {
                        echo 'ACFプラグインを有効化してください';
                     } ?></h2>
                    <p class="p-about__description"><?php if(is_plugin_active( 'advanced-custom-fields/acf.php' )) {
                        the_field('about_description');
                     } else {
                        echo 'ACFプラグインを有効化してください';
                     } ?></p>
                </article> <!-- /p-about -->
<!-- ここから全ページ共通2 -->
            </main>
        </div> <!-- /c-flex--pc__main -->
        <?php get_sidebar(); ?>
    </div> <!-- /c-flex -->
<?php get_footer(); ?>