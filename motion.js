//ハンバーガーメニュー
$(function($) {
        WindowHeight = $(window).height();
        $('.drawr').css('height', WindowHeight); //メニューをwindowの高さいっぱいにする

        $(document).ready(function() {
                $('.btn').click(function(){ //クリックしたら
                        $('.drawr').animate({width:'toggle'}); //animateで表示・非表示
                        $(this).toggleClass('peke'); //toggleでクラス追加・削除
                });
        });
});

//ページトップ
$(document).ready(function() {
  var pagetop = $('#page_top');
    $(window).scroll(function () {
       if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
       } else {
            pagetop.fadeOut();
            }
       });
       pagetop.click(function () {
           $('body, html').animate({ scrollTop: 0 }, 500);
              return false;
   });
});


(function($) {
    // 読み込んだら開始
    $(function() {
    
        // アコーディオン
        var accordion = $("#box_content");
        accordion.each(function () {
            var noTargetAccordion = $(this).siblings(accordion);
            $(this).find(".switch").click(function() {
                $(this).next(".contentWrap").slideToggle();
                $(this).toggleClass("open");
                noTargetAccordion.find(".contentWrap").slideUp();
                noTargetAccordion.find(".switch").removeClass("open");
            });
            $(this).find(".btn_close").click(function() {
                var targetContentWrap = $(this).parent(".contentWrap");
                $(targetContentWrap).slideToggle();
                $(targetContentWrap).prev(".switch").toggleClass("open");
            });
        });
    
    });
})(jQuery);
