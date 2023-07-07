<?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div <?php post_class('p-archive-media'); ?>>
        <?php if( has_post_thumbnail() ) : ?>
            <figure class="p-archive-media__img-wrapper">
                <?php the_post_thumbnail( 'img_eyecatch'); ?>
            </figure> <!-- /p-archive-media__img-wrapper-->
        <?php endif; ?>
        <div class="p-archive-media__body">
            <div class="p-archive-media__content">
                <h4 class="p-archive-media__title"><?php the_title(); ?></h4>
                <h2><?php if(is_plugin_active( 'advanced-custom-fields/acf.php')) {
                    the_field('menu_headline');
                 } else {
                     echo 'ACFプラグインを有効化してください';
                 } ?></h2>
                <p><?php if(is_plugin_active( 'advanced-custom-fields/acf.php')) {
                        $excerpt = get_field('menu_excerpt');
                        $limits = 100;
                        if(mb_strlen($excerpt, 'UTF-8') > $limits){ 
                            $excerpt = mb_substr($excerpt, 0, $limits, 'UTF-8'); 
                            echo $excerpt .= '...';
                        } else {
                            echo $excerpt;
                        } } else {
                        echo 'ACFプラグインを有効化してください';
                        } 
                        ?></p>

            </div>
            <div class="p-archive-media__button-wrapper">
                <a href="<?php the_permalink(); ?>"><button class="c-button--detail p-archive-media__button">詳しく見る</button></a>
            </div>
        </div> <!-- /p-archive-media__body -->
    </div> <!-- /p-archive-media-->
    <?php endwhile; endif; ?>
