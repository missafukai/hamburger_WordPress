<?php

function mytheme_setup() {
    add_theme_support( 'html5', array(
        'style', 'script',
    ));
    add_theme_support( 'wp-block-styles');
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'editor-style.css' );
    add_image_size( 'img_eyecatch', 677, 471, true );

    //ナビゲーション
    register_nav_menus([
        'primary' => 'navigation',
        'menu' => 'sidebar',
    ]);
}
add_action( 'after_setup_theme', 'mytheme_setup' );

//タイトル出力
function mytheme_title( $title ) {
    if ( is_front_page() && is_home() ) {
        $title = get_bloginfo( 'name' );
    } elseif ( is_singular()) {
        $title = single_post_title( '', false );
    }
    return $title;
}

add_filter( 'pre_get_document_title', 'mytheme_title' );

//スタイルシートとスクリプトシート読み込み
function mytheme_scripts() {

    wp_enqueue_style( 'hamburger-style', get_theme_file_uri() . '/css/style.css', array() );
    wp_enqueue_style( 'fontawesome', '//kit.fontawesome.com/f721506b34.js', array() );
    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.7.0.js', array(), true );
    wp_enqueue_script( 'hamburger-script', get_theme_file_uri() . '/js/script.js', array(), true );
}

add_action( 'wp_enqueue_scripts', 'mytheme_scripts' );

//サーチ用ウィジェットの設定
function mytheme_widgets_init() {
    register_sidebar([
        'name' => '検索',
        'id' => 'search',
        'before_widget' => '<div class="p-search__wrapper">',
        'after_widget' => '</div>',
    ]);
}

add_action( 'widgets_init', 'mytheme_widgets_init' );

//サイドバーのメニューをカスタムウォーカー使ってカスタマイズ
class custom_walker_side_menu extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        $id = 'menu-item-' . $item->ID;
        $css_classes = '';
        foreach ($classes as $class){
            $css_classes .= $class. ' ';
        }

        if($depth == 0){
            $output .= '<li id="'.$id.'" class="'.$css_classes.'"><h4><a href="'.$item->url.'">'.$item->title.'</a></h4>';
        }else{
            $output .= '<li id="'.$id.'" class="'.$css_classes.'"><a href="'.$item->url.'">'.$item->title.'</a>';
        }
    }
}

//記事の並び替え
function archive_order( $query ) {
    if($query->is_main_query()) {
    $query->set( 'orderby', 'date' );
    $query->set( 'order', 'ASC' );
    }
    }
    add_action( 'pre_get_posts', 'archive_order' );

//archiveの設定
function post_has_archive( $args, $post_type ) {
    if ( 'post' == $post_type ) {
      $args['rewrite'] = true;
      $args['has_archive'] = 'archives'; //URLとして使いたい文字列
      $args['label'] = 'Menu';
    }
    return $args;
  }
  add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

// 検索対象にカテゴリを含める
function custom_search($search, $wp_query) {
    global $wpdb;
 
    //検索ページ以外
    if (!$wp_query->is_search)
    return $search;
 
    if (!isset($wp_query->query_vars))
    return $search;
 
    $search_words = explode(' ', isset($wp_query->query_vars['s']) ? $wp_query->query_vars['s'] : '');
    if ( count($search_words) > 0 ) {
        $search = '';
        foreach ( $search_words as $word ) {
            if ( !empty($word) ) {
                $search_word = $wpdb-> _escape("%{$word}%");
                $search .= " AND (
                        {$wpdb->posts}.post_title LIKE '{$search_word}'
                        OR {$wpdb->posts}.post_content LIKE '{$search_word}'
            /*タグ名・カテゴリ名を検索対象に含める記述 start*/
                        OR {$wpdb->posts}.ID IN (
                            SELECT distinct r.object_id
                            FROM {$wpdb->term_relationships} AS r
                            INNER JOIN {$wpdb->term_taxonomy} AS tt ON r.term_taxonomy_id = tt.term_taxonomy_id
                            INNER JOIN {$wpdb->terms} AS t ON tt.term_id = t.term_id
                            WHERE t.name LIKE '{$search_word}'
                        OR t.slug LIKE '{$search_word}'
                        OR tt.description LIKE '{$search_word}'
                        )
          /*タグ名・カテゴリ名を検索対象に含める記述 end*/
                ) ";
            }
        }
    }
 
    return $search;
}
add_filter('posts_search','custom_search', 10, 2);

//ブロックスタイルの追加
register_block_style(
    'core/image',
    array(
        'name' => 'big-image',
        'label' => '大画像',
        'inline_style' =>
            'is-style-big-image {
                margin: 3.125vw 5.2083333333vw;
                width: 70.46875vw;
                height: 26.0416666667vw;
            }'
    )
);

register_block_style(
    'core/gallery',
    array(
        'name' => 'hamburger-gallery',
        'label' => 'ハンバーガーサイト用',
        'inline_style' =>
            'is-style-hamburger-gallery {
            }'
    )
);
//抜粋の文字数の設定
function mytheme_excerpt_length( $length ) {
    return 85;
}
add_filter( 'excerpt_length', 'mytheme_excerpt_length', 999 );

//抜粋の最後の文字を変更
function mytheme_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'mytheme_excerpt_more' );