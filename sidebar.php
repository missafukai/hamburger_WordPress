<aside class="l-menu c-flex--pc__side">
    <div class="p-menu">
        <span class="c-close p-menu__close" id="js-close"></span>
        <div class="p-menu__container">
            <a href="#"><h2 class="p-menu__title">Menu</h2></a>
            <?php wp_nav_menu( array(
                 'theme_location' => 'menu' ,
                 'walker' => new custom_walker_side_menu,
                 'container' => false
                 ) ); ?>
            <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
            <?php endif; ?>
        </div> <!-- /p-menu__container -->
    </div> <!-- /p-menu -->
</aside> <!-- /l=menu /c-flex--pc__side -->
