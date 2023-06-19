<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="u-bg--grey"></div>
    <div class="c-flex--pc">
        <div class="c-flex--pc__main">
            <header class="l-header">
                <div class="c-menu" id="js-menu">
                    <button>Menu</button>
                </div> <!-- /c-menu -->
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1 class="c-title p-header__title"><?php bloginfo( 'name' ); ?></h1></a>
                <?php get_search_form(); ?>
            </header> <!-- /l-header -->