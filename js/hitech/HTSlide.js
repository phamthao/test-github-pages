// +------------------------------------------------------------------------+
// | HTSlide                                                                |
// | - Slide chuyển hình đơn giản                                           |
// +------------------------------------------------------------------------+
// | Copyright (c) Saigon Hitech Co.,Ltd. All rights reserved.              |
// +------------------------------------------------------------------------+
    /**
     * [HTTabIsotope]
     *  -- @param {[object]} options
     *  -- Giá trị mặc định
            $.fn.HTSlide.defaults = {
                vertical: false,    || [true/false] Kiểu nav ngang/dọc
                zoom: false         || [json/false] Phong to ảnh đại diện, json là optons của thư viện js/vendor/elevatezoom.js
                arrows: true        || [true/false] Tạo button prev/next
            };
     *  -- @Syntax
        $(document).ready(function() {
            $('<element>').HTSlide();
        });
     */
(function($) {
    "use strict";
    $.fn.HTSlide = function (options){
        var settings = $.extend({}, $.fn.HTSlide.defaults, options);
        var $this = $(this);
        var $nav = $this.find('.b_nav > ul li');
        var $thumb = $this.find('.b_thumb');
        // vertical
        if (settings.vertical) {
            settings.param = { wh: 'height', owh: 'outerHeight', transform: 'translateY' };
        } else {
            settings.param = { wh: 'width', owh: 'outerWidth', transform: 'translateX' };
            $this.find('.b_nav').css('height', $nav.outerHeight());
        }
        // zoom
        if (settings.zoom && window.innerWidth > settings.zoom.minWidth) {
            $(settings.zoom.slideId).elevateZoom(settings.zoom.elevateZoom);
        }
        var wh = $nav.parent()[settings.param.wh]();
        var whLi = $nav[settings.param.owh]();
        var n = Math.round((wh / whLi));
        $($nav[0]).find('a').addClass('is-active');
        if ($nav.length >= n) {
            wh = whLi*n;
            $nav.parent().css([settings.param.wh], wh);
            $this.find('.b_nav > ul li:nth-child(n+'+(n+1)+')').css('visibility', 'visible');
            $nav.each(function(i, el) {
                $(el).css('transform', settings.param.transform+'('+(i*whLi)+'px)');
                $(el).css({ position: 'absolute', transform: settings.param.transform+'('+(i*whLi)+'px)' });
                if (i < n) {
                    $(el).addClass('ht-current');
                    if (i == (n - 1) && $nav.length > n) { $(el).addClass('ht-end'); }
                }
            });
        } else {
            $nav.parent().css('text-align', 'center');
            $nav.each(function(i, el) { $(el).css({ display: 'inline-block', float: 'none' }); });
        }
        setTimeout(function(){ $nav.css('transition', 'all .25s ease'); }, 500);
        // arrows
        if (settings.arrows && $nav.length > 1) {
            $thumb.prepend('<a class="arrows prev"></a>');
            $thumb.append('<a class="arrows next"></a>');
            $('body').on('click', '.b_thumb .arrows', function(){
                var arrows = $(this).attr('class');
                var index = $nav.find('a.is-active').parent().index();
                index = (arrows == 'arrows prev') ? index - 1 : index + 1;
                if (index > -1 && index < ($nav.parent().children().length + 1)) {
                    $nav.eq(index).click();
                }
            });
        }
        $nav.click(function(e){
            $(this).siblings().find('a').removeClass('is-active');
            $(this).find('a').addClass('is-active');
            var thumb = $(this).find('a').attr('data-image');
            $thumb.find('img').attr('src', thumb);
            $thumb.find('img').addClass('fadeIn');
            setTimeout(function(){ $thumb.find('img').removeClass('fadeIn'); },500);
        });
        $nav.parent().on('click','li.ht-end', function(){
            var wh = $nav.parent()[settings.param.wh]();
            var whLi = $nav[settings.param.owh]();
            var n = Math.round((wh / whLi));
            wh = whLi*n;
            var index = $(this).index();
            $nav.removeClass('ht-current');
            $nav.removeClass('ht-start');
            $nav.removeClass('ht-end');
            $nav.each(function(i, el) {
                var translateX = parseInt($(el)[0].style.transform.replace(/[^0-9-\.]/g, ''),10);
                $(el).css('transform', settings.param.transform+'('+(translateX - whLi)+'px)');
                if (i < (index + 2) && i > (index - 4)) {
                    $(el).addClass('ht-current');
                    if ((index - (n - 2)) == i) { $(el).addClass('ht-start'); }
                    if ((index + 1) == i && ($nav.length - 1) != i) { $(el).addClass('ht-end'); }
                }
            });
        });
        $nav.parent().on('click','li.ht-start', function(){
            var wh = $nav.parent()[settings.param.wh]();
            var whLi = $nav[settings.param.owh]();
            var n = Math.round((wh / whLi));
            wh = whLi*n;
            var index = $(this).index();
            $nav.removeClass('ht-current');
            $nav.removeClass('ht-start');
            $nav.removeClass('ht-end');
            $nav.each(function(i, el) {
                var translateX = parseInt($(el)[0].style.transform.replace(/[^0-9-\.]/g, ''), 10);
                $(el).css('transform', settings.param.transform+'('+(translateX + whLi)+'px)');
                if (i < (index + 4) && i > (index - 2)) {
                    $(el).addClass('ht-current');
                    if ((index - 1) == i && i !== 0) { $(el).addClass('ht-start'); }
                    if ((index + (n - 2)) == i) { $(el).addClass('ht-end'); }
                }
            });
        });
    };
    $.fn.HTSlide.defaults = { vertical: false, arrows: true, zoom: false };
})(jQuery);