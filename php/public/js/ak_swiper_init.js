$(function () {
    setTimeout(function () {
        swiper_check();
    }, 1);

    $(window).resize(function () {
        swiper_check();
    });
});

function swiper_check() {
    // 如果兩個箭頭都disabled =>隱藏
    $(".swiper").map(function () {
        var n = $(this).parent().find(".swiper-button-disabled").length;
        if (n == 2) {
            // $(this).parent().find(".swiper-button-disabled").css("opacity", 0);
            $(this).parent().find(".swiper-btn-block").hide();
        } else {
            if($(this).parent().find(".swiper-btn-block").hasClass('space-between-btn')){
                $(this).parent().find(".swiper-btn-block").css("display","flex")
            }else{

                $(this).parent().find(".swiper-btn-block").show();
            }
        }
    });
}
