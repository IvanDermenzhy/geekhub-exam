jQuery(document).ready(function($) {
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            items: 4,
            loop: true,
            nav: false,
            dots: false,
            smartSpeed: 1000
        });
    });

    $('.menu-item-has-children > a').on('click',function (e) {
        e.preventDefault();
        $('.sub-menu').delay(50).fadeIn();
        $(document).mouseup(function (e)
            {
                var container = $('.sub-menu');
                if (!container.is(e.target)
                    && container.has(e.target).length === 0)
                {
                    container.hide();
                }
        });
    });
    $('.header-menu-btn').on('click', function(){
        $('.header-main nav').delay(50).fadeIn();
        var width = $(document).width();
        if (width < 992) {
            $(document).mouseup(function (e)
            {
                var container = $('.header-main nav');
                if (!container.is(e.target)
                    && container.has(e.target).length === 0)
                {
                    container.hide();
                }
            });
        }
    });
});