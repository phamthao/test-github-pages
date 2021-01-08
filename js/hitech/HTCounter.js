// +------------------------------------------------------------------------+
// | HTCounter                                                              |
// +------------------------------------------------------------------------+
// | Copyright (c) Saigon Hitech Co.,Ltd. All rights reserved.              |
// +------------------------------------------------------------------------+
    /**
     * [HTCounter]
     *  -- @param {[object]} options
     *  -- Giá trị mặc định
            $.fn.HTCounter.defaults = {
                speed: 4000,
            };
     *  -- @Syntax
        $(document).ready(function() {
            $('<element>').HTCounter();
        });
     */
(function ($) {
    $.fn.HTCounter = function(options) {
        var settings = $.extend({}, $.fn.HTCounter.defaults, options);
        $(this).each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: settings.speed,
                easing: 'swing',
                step: function (now) { $(this).text(Math.ceil(now)); }
            });
        });
    };
    $.fn.HTCounter.defaults = { speed: 4000 };
})(jQuery);