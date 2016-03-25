$(document).ready(function () {
        $('.accordionButton').click(function () {
                $('.accordionButton').removeClass('on');
                $('.accordionContent').slideUp('normal');
                if ($(this).next().is(':hidden') == true) {
                    $(this).addClass('on');
                    $(this).next().slideDown('normal')
                }
            });
        $('.accordionContent').hide()
    });
