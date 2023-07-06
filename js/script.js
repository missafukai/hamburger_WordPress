console.log("Hello World");

//メニューの表示、bodyにshadeと固定
jQuery(function(){
    jQuery('#js-menu').click(function(){
        jQuery('.l-menu').addClass('active');
        jQuery('.u-bg--grey').fadeIn('fast');
        jQuery('body').addClass('fixed');
    });
});

//メニューの×ボタンを押したとき、メニューを非表示、メニュートップに戻す、bodyを戻す
jQuery(function(){
    jQuery('#js-close, .u-bg--grey').click(function(){
        jQuery('.l-menu').removeClass('active');
        jQuery('.u-bg--grey').fadeOut('fast');
        jQuery('body').removeClass('fixed');
        jQuery('.l-menu').scrollTop(0);
    });
});

//画面幅が変わったときにメニューをリセット
jQuery(window).on('resize', function() {
    jQuery('.l-menu').removeClass('active');
    jQuery('.u-bg--grey').hide();
});
