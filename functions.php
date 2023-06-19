<?php

function mytheme_setup() {
    add_theme_support( 'wp-block-styles');
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

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
        $title = get_bloginfo( 'name', 'display' );
    } elseif ( is_singular()) {
        $title = single_post_title( '', false );
    }
    return $title;
}

add_filter( 'pre_get_document_title', 'mytheme_title' );

//スタイルシートとスクリプトシート読み込み
function mytheme_scripts() {

    wp_enqueue_style( 'hamburger-style', get_theme_file_uri( 'css/style.css' ), array() );
    wp_enqueue_style( 'fontawesome', '//kit.fontawesome.com/f721506b34.js', array() );
    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.6.4.min.js', array() );
    wp_enqueue_script( 'myscript', get_theme_file_uri( 'js/main.js' ), array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'mytheme_scripts' );

//サイドバー用ウィジェットの設定
function mytheme_widgets_init() {
    register_sidebar([
        'name' => 'サイドバー',
        'id' => 'sidebar-1',
        'before_widget' => '<div class="c-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="c-widget__title">',
        'after_title' => '</h3>',
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