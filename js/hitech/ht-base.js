$(function() {
    // Checkbox, Radio || Thêm element cần thiết
    $('.c-checkbox').find('.c_tick').remove();
    $('.c-checkbox').find('input').after('<span class="c_tick"><span class="check"></span></span>');
    $('.c-radio').find('input').after('<span class="c_tick"></span>');
    // Focus event
    $('body').on('focus', 'input, textarea', function() {
        $(this).closest('.form-group:not(.c-select)').addClass('is-focused');
    });
    // Blur event
    $('body').on('blur', 'input:not([type="checkbox"]), textarea', function() {
        $(this).closest('.form-group').removeClass('is-focused');
    });
    $('.form-group').each(function() {
        if ($(this).find('input').val() == '' || $(this).find('textarea').val() == '') { $(this).addClass('is-empty'); }
    });
    // Check input
    $('input, textarea').change(function() {
        if ($(this).val() !== '') {
            $(this).closest('.form-group').removeClass('is-empty');
        } else {
            $(this).closest('.form-group').addClass('is-empty');
        }
    });
    // scrollTop
    $(window).scroll(function(){
        var wScroll = $(window).scrollTop();
        if( wScroll > 400 ){
            $('[ht-trigger="backtop"]').addClass('is-show');
        } else {
            $('[ht-trigger="backtop"]').removeClass('is-show');
        }
    });
    $('[ht-trigger="backtop"]').click(function(){ $('html, body').animate({ 'scrollTop': 0 },500); });

    // Event c-modal
    $('body').on('click', '[ht-trigger="c-modal"]', function() {
        $('body').append('<div class="c-modal-backdrop show"></div>');
        $('body').addClass('c-modal-open');
        $target = $($(this).attr('ht-target'));
        $target.css('display', 'block');
        $close = $(this).attr('ht-target-close');
        if ($close !== undefined) {
            $($close).removeClass('show');
            $($close).removeAttr('style');
            $('body').find('.c-modal-backdrop:last').remove();
        }
        setTimeout(function() { $target.addClass('show'); }, 200);
    });
    $('body').on('click', '[ht-close="c-modal"]', function() {
        var $close = $(this).attr('ht-target-close');
        var $reload = $(this).attr('ht-reload');
        if ($close) {
            $($close).removeClass('show');
            $('body').find('.c-modal-backdrop:last').removeClass('show');
            setTimeout(function() {
                $($close).removeAttr('style');
                $('body').find('.c-modal-backdrop:last').remove();
            }, 200);
        } else {
            $('.c-modal-backdrop').removeClass('show');
            $('.c-modal').removeClass('show');
            setTimeout(function() {
                $('.c-modal').removeAttr('style');
                $('body').removeClass('c-modal-open');
                $('.c-modal-backdrop').remove();
            }, 200);
        }
        if ($reload === 'true') {
            $redirect = ($(this).attr('ht-redirect') === 'false') ? '' : $(this).attr('ht-redirect');
            window.location.href = $redirect;
        }
    });
    $('body').on('click', '[ht-skip]', function(e) { e.stopPropagation(); });
});
var _HTHelper = function() {
    return {
        slug: function(str) {
            str = str.replace(/^\s+|\s+$/g, '');
            str = str.toLowerCase();
            var from = 'àáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđ·/_,:;';
            var to = 'aaaaaaaaaaaaaaaaaeeeeeeeeeeeiiiiiooooooooooooooooouuuuuuuuuuuyyyyyd------';
            for (var i = 0, l = from.length; i < l; i++) {
                str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
            }
            str = str.replace(/[^a-z0-9 -]/g, '').replace(/\s+/g, '-').replace(/-+/g, '-');
            return str;
        },
        money: function(num, separator) {
            separator = (separator === undefined) ? '.' : separator;
            num = String(num).replace(/[^0-9]/g, '');
            if (!isNaN(num)) {
                var array = num.toString().split('');
                var index = -3;
                while (array.length + index > 0) {
                    array.splice(index, 0, separator);
                    index -= 4;
                }
                return array.join('');
            }
        },
        number: function(str) {
            return str.replace(/[^0-9]/g, '');
        },
        round: function(value, precision) {
            var multiplier = Math.pow(10, precision || 0);
            return Math.round(value * multiplier) / multiplier;
        },
        detect: function() {
            var ua = navigator.userAgent.toLowerCase();
            return (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(ua)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(ua.substr(0,4))) ? 'mobile' : 'desktop';
        }
    };
}();