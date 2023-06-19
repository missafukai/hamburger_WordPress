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
            <!-- <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
            <?php endif; ?>
            <a href="#"><h4 class="p-menu__group">バーガー</h4></a>
            <ul>
                <a href="#"><li class="p-menu__item">ハンバーガー</li></a>
                <a href="#"><li class="p-menu__item">チーズバーガー</li></a>
                <a href="#"><li class="p-menu__item">テリヤキバーガー</li></a>
                <a href="#"><li class="p-menu__item">アボカドバーガー</li></a>
                <a href="#"><li class="p-menu__item">フィッシュバーガー</li></a>
                <a href="#"><li class="p-menu__item">ベーコンバーガー</li></a>
                <a href="#"><li class="p-menu__item">チキンバーガー</li></a>
            </ul>
            <a href="#"><h4 class="p-menu__group">サイド</h4></a>
            <ul>
                <a href="#"><li class="p-menu__item">ポテト</li></a>
                <a href="#"><li class="p-menu__item">サラダ</li></a>
                <a href="#"><li class="p-menu__item">ナゲット</li></a>
                <a href="#"><li class="p-menu__item">コーン</li></a>
            </ul>
            <a href="#"><h4 class="p-menu__group">ドリンク</h4></a>
            <ul>
                <a href="#"><li class="p-menu__item">コーラ</li></a>
                <a href="#"><li class="p-menu__item">ファンタ</li></a>
                <a href="#"><li class="p-menu__item">オレンジ</li></a>
                <a href="#"><li class="p-menu__item">アップル</li></a>
                <a href="#"><li class="p-menu__item">紅茶（Ice/Hot）</li></a>
                <a href="#"><li class="p-menu__item">コーヒー（Ice/Hot）</li></a>
            </ul> -->
        </div> <!-- /p-menu__container -->
    </div> <!-- /p-menu -->
</aside> <!-- /l=menu /c-flex--pc__side -->
