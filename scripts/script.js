$(function () {

    $(".close_menu_aside").click(function () {

        // adiciona o ícone
        if (!$(this).hasClass("icon-cancel-circle")) {

            $(this).removeClass("icon-menu");

            $(this).css({
                "transition": "0.2s",
                "transform": "rotate(40deg)"
            })

            $(this).addClass("icon-cancel-circle").css("color", "#fff");

            $(".menu_absolute").animate({
                "left": "0%"
            }, 270)

        } else {

            $(this).css({
                "transition": "0.2s",
                "transform": "rotate(-0.5deg)"
            })

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