/* BEGIN s-header-13 */
$(document).ready(function(){
    // Tính toàn chiều dài của menu cấp con
    var li = $('.s-header-13 ul[ht-target="hd-menu"] > li > ul').parent();
    for (var i = 0; i < li.length; i++) {
        $(li[i].lastElementChild).css('width', $(li[i].lastElementChild).outerWidth());
    }
    // Thay đổi giá trị 992 nếu thay đổi kích thước responsive
    $(window).on('load resize', function() {
        li.removeClass('no-hover');
        li.children('a').unbind('click');
        if (window.innerWidth < 1260) {
            li.addClass('no-hover');
            li.children('a').click(function(e) {
                e.preventDefault();
                li.not($(this).parent()).addClass('no-hover');
                $(this).parent().toggleClass('no-hover');
            });
        }
    });
    if($(window).width() < 1260){
        $('.s-header-13 .hd-menu  ul  li > .submenu').parent('li').append('<span class="icon"><i class="fa fa-angle-down"></i></span>');
        $('.s-sidebar-5 .s_heading').click(function() {
            $(this).parent().find('.s_menu').slideToggle(400);
        });
    }
    $('.s-header-13 .hd-menu ul li > span > i').click(function() {
        var target = $(this).parent().siblings(".submenu");
        $('.s-header-13 .hd-menu  ul  li > .submenu').not(target).slideUp();
        $('.s-header-13 .hd-menu ul li > span > i').addClass('fa-angle-down').removeClass('fa-angle-up');
        target.slideToggle();
        if($(this).hasClass('fa-angle-down')){
            $(this).removeClass('fa-angle-down').addClass('fa-angle-up');
        }else{
            $(this).addClass('fa-angle-down').removeClass('fa-angle-up');
        }
    });
    $('.s-header-13 [ht-trigger="hd-menu"]').click(function() {
        $(this).parent().find('[ht-target="hd-menu"], .fa-transformation').toggleClass('is-active');
    });
    $('.s-sidebar-5>ul li>div span').click(function() {
        $(this).closest('li').find('ul').slideToggle(400);
        $(this).closest('li').addClass('is-active');
        $(this).closest('li').siblings().find('ul').slideUp(400);
        $(this).closest('li').siblings().removeClass('is-active');
    });

});
/* END s-header-13 */
/* BEGIN c-select-single */
$(document).ready(function() {
    $('.c-select .c-radio').find('.c_tick').remove();
    $('body').on('click', '[ht-trigger="c-select"]', function() {
        var focused = $(this).parent().hasClass('is-focused');
        $('[ht-close="c-select"]').click();
        if (!focused) {
            $(this).parent().addClass('is-focused');
            $('body').append('<div class="overlay-transparent" ht-close="c-select"></div>');
        }
    });
    $('body').on('click', '.c-select .c-radio', function() {
        var el_select = $(this).closest('.c-select');
        el_select.find('div.c_input').text($(this).find('span').text());
        el_select.find('div.c_input').removeClass('text--icon');
        el_select.find('.c-radio').removeClass('is-selected');
        $(this).addClass('is-selected');
        $('[ht-close="c-select"]').click();
    });
    $('body').on('click', '[ht-close="c-select"]', function() {
        $('.c-select').removeClass('is-focused');
        $('.overlay-transparent').remove();
    });
});
/* END c-select-single */