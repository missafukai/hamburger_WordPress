//メニューの表示、bodyにshadeと固定
$(function(){
    $('#js-menu').click(function(){
        $('.l-menu').addClass('active');
        $('.u-bg--grey').fadeIn('fast');
        $('body').addClass('fixed');
    });
});

//メニューの×ボタンを押したとき、メニューを非表示、メニュートップに戻す、bodyを戻す
$(function(){
    $('#js-close, .u-bg--grey').click(function(){
        $('.l-menu').removeClass('active');
        $('.u-bg--grey').fadeOut('fast');
        $('body').removeClass('fixed');
        $('.l-menu').scrollTop(0);
    });
});

//画面幅が変わったときにメニューをリセット
$(window).on('resize', function() {
    $('.l-menu').removeClass('active');
    $('.u-bg--grey').hide();
});
