$(function () {

    $(".close_menu_aside").click(function () {

        if (!$(this).hasClass("icon-cancel-circle")) {

            $(this).removeClass("icon-menu");
            $(this).css("transition", "1s")
            $(this).addClass("icon-cancel-circle").css("color", "#fff");

            $(".menu_absolute").animate({
                "left": "0%"
            }, 270)

        } else {

            $(".icon-cancel-circle").animate({
                "transform": "rotate(40deg)"
            });
            $(this).removeClass("icon-cancel-circle");
            $(this).addClass("icon-menu").css("color", "#000");

            $(".menu_absolute").animate({
                "left": "-100%"
            }, 270)
        }

    });
});