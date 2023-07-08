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
                <?php
                    // 投稿内容をブロックごとに取得//
                    // 投稿のIDを指定
                    $post_id = get_the_ID();
                    // 投稿のコンテンツを取得
                    $content = get_post_field('post_content', $post_id);
                    // コンテンツをブロック単位にパース
                    $blocks = parse_blocks($content);
                    // 最初のブロックを取得
                    $first_block = $blocks[0];
                    // 最初のブロックの内容を表示
                    echo render_block($first_block);
                    the_excerpt();
                ?>
            </div>
            <div class="p-archive-media__button-wrapper">
                <a href="<?php the_permalink(); ?>"><button class="c-button--detail p-archive-media__button">詳しく見る</button></a>
            </div>
        </div> <!-- /p-archive-media__body -->
    </div> <!-- /p-archive-media-->
    <?php endwhile; endif; ?>
