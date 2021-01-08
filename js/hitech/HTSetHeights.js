// +------------------------------------------------------------------------+
// | HTSetHeights                                                           |
// +------------------------------------------------------------------------+
// | Copyright (c) Saigon Hitech Co.,Ltd. All rights reserved.              |
// +------------------------------------------------------------------------+
    /**
     *  -- @param {[object]} options
     *  -- Giá trị mặc định
            $.fn.HTSetHeights.defaults = {
                level: 'min',         {[string]}    [min/max]       [Lấy chiều cao theo element lớn nhất hoặc nhỏ nhất]
                typeHeight: 'outer',  {[string]}    [outer/inner]   [Kiểu lấy chiều cao  .outerHeight()/.innerHeight()]
                maxWidth: false,      {[bool]}      [true/false]    [Thiết lập max-width: auto, width: auto]
                limit: 0,             {[int]}                       [Giới hạn theo options.level]
                resize: 480           {[int]}                       [Kích thước màng hình thực thi]
            };
     *  -- @Syntax
        $(document).ready(function() {
            $(window).on('load resize',function() {
                $('<element>').HTSetHeights();
            });
        });
     */
(function ($) {
    $.fn.HTSetHeights = function (options){
        var settings = $.extend({}, $.fn.HTSetHeights.defaults, options),
            heights = [], Height = 'auto', location = $(this);
        setTimeout(function() {
            if (window.innerWidth > settings.resize) {
                location.each(function() {
                    // thiết lập style cho từng element
                    $(this).css({
                        'min-height': '1','max-height':'none','height':'auto','overflow':'hidden',
                        'max-width' : (settings.maxWidth) ? '100%' : '',
                        'width'     : (settings.maxWidth) ? '100%' : '',

                    });
                    // lấy tất cả chiều cao ghi thành 1 mảng
                    if (settings.typeHeight == 'inner' && $(this).innerHeight() > 0) {
                        heights.push($(this).innerHeight());
                    } else if (settings.typeHeight == 'outer' && $(this).outerHeight() > 0) {
                        heights.push($(this).outerHeight());
                    }
                });
                Height = Math[settings.level].apply(Math,heights);
                if (settings.level == 'max') {
                    Height = ((settings.limit && Height > settings.limit) ? settings.limit : Height) + 'px';
                } else {
                    Height = ((settings.limit && Height < settings.limit) ? settings.limit : Height) + 'px';
                }
            }
            // thiết lập chiều cao cho element
            location.each(function() { $(this).css({ height: Height, width: (settings.maxWidth) ? 'auto' : '' }); });
        }, 200);
    };
    $.fn.HTSetHeights.defaults = {
        level: 'min',
        typeHeight: 'outer',
        maxWidth: false,
        limit: 0,
        resize: 480
    };
}(jQuery));