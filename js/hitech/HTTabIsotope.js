// +------------------------------------------------------------------------+
// | HTTabIsotope                                                           |
// | - Hiệu ứng chuyển tab theo isotope                                     |
// +------------------------------------------------------------------------+
// | Copyright (c) Saigon Hitech Co.,Ltd. All rights reserved.              |
// +------------------------------------------------------------------------+
    /**
     * [HTTabIsotope]
     *  -- @param {[object]} options
     *  -- Giá trị mặc định
            $.fn.HTTabIsotope.defaults = {
                itemSelector: '.item',      || Phần tử cần chạy
                screen: [360,768,1260],     || Kích thức màng hình, kích thước nhỏ khai báo trước
                col: [2,3,4]                || Số col hiển thị theo kích thước màng hình
            };
     *  -- @Syntax
        $(document).ready(function() {
            $(window).on('load resize',function() {
                $('<element>').HTTabIsotope();
            });
        });
     */
(function ($) {
    $.fn.HTTabIsotope = function(options) {
        var settings = $.extend({}, $.fn.HTTabIsotope.defaults, options),
            $container = $(this),
            colWidth = function () {
                var w = $(window).width(), columnNum = 1, columnWidth = 0;
                for (var i = 0; i < settings.screen.length; i++) {
                    if (w >= settings.screen[i]) { columnNum  = settings.col[i]; }
                }
                columnWidth = Math.floor($container.width()/columnNum);
                $container.find(settings.itemSelector).each(function() { $(this).css({width: columnWidth}); });
                return columnWidth;
            };
        $container.isotope({
            resizable: true,
            itemSelector: settings.itemSelector,
            masonry: { columnWidth: colWidth(), gutterWidth: 10 }
        });
        $('.s_filter a').click(function(){
            $('.s_filter .current').removeClass('current');
            $(this).addClass('current');
            var selector = $(this).attr('ht-isotope');
            $container.isotope({
                filter: selector,
                animationOptions: { duration: 750, easing: 'linear', queue: false }
            });
            return false;
        });
    };
    $.fn.HTTabIsotope.defaults = {
        itemSelector: '.item',
        screen: [360,768,1260],
        col: [2,3,4]
    };
}(jQuery));