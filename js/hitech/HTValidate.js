// +------------------------------------------------------------------------+
// | HTValidate                                                            |
// +------------------------------------------------------------------------+
// | Copyright (c) Saigon Hitech Co.,Ltd. All rights reserved.              |
// +------------------------------------------------------------------------+
    /*
    Giải thích và cú pháp kiểm tra dữ liệu
    (1) : Khai báo khi cần sử dụng
    (2) : Nếu sử dụng mặc định thì không cần khai báo

    $(document).ready(function(){
        $('#form_<Tên id của form>').HTValidate({
            // Chứa các trường dữ liệu cần kiểm tra
            rules: {
                <Tên thuộc tính name>: {
                    //<Tên rule> : <Thông báo nếu dữ liệu sai>
                    required: 'Thông tin bắt buộc', // (1)
                    email: 'Email không hợp lệ', // (1)
                    number: 'Vui lòng nhập số', // (1)
                    maxlength: { // (1)
                        max: <Chiều dài lơn nhất của dữ liệu>,
                        messages: <Thông báo nếu dữ liệu sai>
                    },
                    minlength: { // (1)
                        min: <Chiều dài lơn nhất của dữ liệu>,
                        messages: <Thông báo nếu dữ liệu sai>
                    },
                    // So sánh 2 trường dữ liệu có giống nhau hay không
                    confirm: { // (1)
                        elem: <Tên thuộc tính name cần so sánh>,
                        messages: <Thông báo nếu dữ liệu sai>
                    },
                    // Tương tác với CSDL để kiểm tra dữ liệu,
                    ajax: { // (1)
                        url: <Url xử lý dữ liệu, sẽ chỉ rõ khi thực hiện code>,
                        messages: <Thông báo nếu dữ liệu sai>
                    }
                }
            },
            // Giúp thao tác form chạy ngầm không load lại trang
            ajax: { // (1)
                url: <Url xử lý dữ liệu, sẽ chỉ rõ khi thực hiện code>,
                type: 'post', // Kiểu truyền dữ liệu (POST/GET), (2)
            },
            // Tự động tạo khung thông báo và hiển thị khi form thực thi xong
            setTemplate: {
                notify: 'Bạn đã gửi thành công. Chúng tôi sẽ liên hệ lại trong thời gian sớm nhất!',
                modal: 'notify_<Tên id của form>', // Tên id của khung thông báo
                reload: true, // Khi form thực thi xong có load trang hay không (true/false), (2)
                redirect: false, // Khi form thực thi xong có chuyển trang không (false/<Url trang cần chuyển hướng>), (2)
            }
        });
    });
    */
Object.removeByValue = function(obj, value){
    if (Object.prototype.toString.call( obj ) === '[object Array]') {
        var index = obj.indexOf(value);
        if (index > -1) { obj.splice(index, 1); return obj; }
    } else {
        for(var i in obj){
            if (obj.hasOwnProperty(i) && value === obj[i]) { delete obj[i]; return true; }
        }
    }
    return obj;
};
(function($) {
    "use strict";
    $.extend($.fn, {
        HTValidate: function( options ) {
            this.attr('enctype', 'multipart/form-data');
            this.attr('novalidate', 'novalidate');
            new $.validator( options, this[0] );
            //Tạo template thông báo khi submit
            if ($.validator.settings.setTemplate.modal) {
                $.validator.prototype.setTemplate($.validator.settings.setTemplate);
            }
            $(this).on('submit change', function(event) {
                new $.validator( options, this );
                var elems = Object.keys($.validator.elements);
                for (var i = 0; i < elems.length; i++) {
                    var el = $.validator.prototype.findByName(elems[i]);
                    if ((event.type === 'change' && elems[i] != event.target.name) || el[0] === undefined) { continue; }
                    var methods = Object.keys($.validator.elements[elems[i]]);
                    methods = Object.removeByValue(methods, 'notify');
                    for (var j = 0; j < methods.length; j++) {
                        var error = ($.validator.methods[methods[j]](el[0].value, el[0]) === false) ? methods[j] : '';
                        $.validator.prototype.showErrors(elems[i], error);
                        if (error !== '') {
                            $.validator.errorList.push(elems[i]);
                            $.validator.cancelSubmit = true;
                            break;
                        }
                    }
                }
            });
            $(this).on('submit', function(event) {
                if ($.validator.cancelSubmit || $.validator.settings.ajax.url) {
                    event.preventDefault();
                    $.validator.prototype.focusInvalid();
                }
                if ($.validator.settings.ajax.url && !$.validator.cancelSubmit) {
                    $.ajax({
                        url: $.validator.settings.ajax.url,
                        type: $.validator.settings.ajax.type,
                        data: $.validator.prototype.getDataDefault(this),
                        dataType: 'text',
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                            $('.ht-loading-gif').remove();
                            $('body').append($.validator.settings.ajax.beforeSend);
                        }
                    })
                    .always(function(data) {
                        $('.c-modal.show').find('[ht-close="c-modal"]').click();
                        setTimeout(function() {
                            var setTemplate = (data) ? $.parseJSON(data) : '';
                            if (setTemplate) {
                                $('#'+$.validator.settings.setTemplate.modal).find('.content-notify').html(setTemplate.notify);
                                $('button[ht-target-close="#'+$.validator.settings.setTemplate.modal+'"]').attr('ht-reload', setTemplate.reload);
                            }
                            $('.ht-loading-gif').remove();
                            $('[ht-target="#'+$.validator.settings.setTemplate.modal+'"]').click();
                        }, 300);
                    });
                }
                if (!$.validator.settings.ajax.url && !$.validator.cancelSubmit) {
                    $('.ht-loading-gif').remove();
                    $('body').append($.validator.settings.ajax.beforeSend);
                }
            });
        },
    });
    $.validator = function( options, form ) {
        $.validator.settings = $.extend( true, {}, $.validator.defaults, options );
        $.validator.elements = $.validator.settings.rules;
        $.validator.cancelSubmit = false;
        $.validator.errorList = [];
        $.validator.currentForm = form;
    };
    $.extend( $.validator, {
        defaults: {
            rules: {},
            focusInvalid: true,
            ajax: {
                url: '',
                beforeSend: '<div class="ht-loading-gif"><img src="images/loading.gif" /></div>',
                type: 'post', // post/get
            },
            notify: {
                type: 'text', // text/icon
                position: 'left' // left/right/top/bottom
            },
            setTemplate: {
                // modal: 'myModal',
                // notify: 'Bạn đã gửi thành công.',
                reload: true,
                redirect: false,
            }
        },
        prototype: {
            showErrors: function( name, error ) {
                var element = this.findByName(name);
                $(element).closest('.form-group').removeClass('is-error');
                $(element).closest('.form-group').find('.c_error').remove();
                if (error) {
                    $(element).closest('.form-group').addClass('is-error');
                    var notifyText  = (typeof $.validator.elements[name][error] === 'string') ? $.validator.elements[name][error] : $.validator.elements[name][error].messages,
                        notifyType = $.validator.settings.notify.type,
                        notifyPosition = $.validator.settings.notify.position;
                    if ($.validator.elements[name].notify !== undefined) {
                        notifyType = $.validator.elements[name].notify.type;
                        notifyPosition = ($.validator.elements[name].notify.position) ? $.validator.elements[name].notify.position : $.validator.settings.notify.position;
                    }
                    switch(notifyType) {
                        case 'text':
                            $(element).closest('.form-group').append('<span class="c_error"><i class="fa fa-times-circle-o" aria-hidden="true"></i><span>'+notifyText+'</span></span>');
                        break;
                        case 'icon':
                            $(element).closest('.form-group').append('<span class="c_error" ht-trigger="c-tooltip" ht-placement="' + notifyPosition + '" ht-content="' + notifyText + '" style="width: 13px; z-index: 2;"><i class="fa fa-times-circle-o" aria-hidden="true"></i></span>');
                        break;
                    }
                }
            },
            focusInvalid: function() {
                if ($.validator.settings.focusInvalid) {
                    var el = $.validator.prototype.findByName($.validator.errorList[0]);
                    $(el[0]).filter(':visible').focus().trigger('focusin');
                }
            },
            checkable: function(element) {
                return (/radio|checkbox/i).test(element.type);
            },
            findByName: function(name) {
                return $($.validator.currentForm).find('[name="' + name + '"]');
            },
            getLength: function(value, element) {
                switch (element.nodeName.toLowerCase()) {
                    case 'select':
                        return $('option:selected', element).length;
                    case 'input':
                        if (this.checkable(element)) { return this.findByName(element.name).filter(':checked').length; }
                }
                return value.length;
            },
            elementValue: function(element) {
                var val, $element = $(element), type = element.type;
                if (type === 'radio') {
                    return this.findByName( element.name ).filter(':checked').val();
                } else if ( type === 'number' && typeof element.validity !== 'undefined' ) {
                    return element.validity.badInput ? false : $element.val();
                }
                val = $element.val();
                if (typeof val === 'string') { return val.replace(/\r/g, '' ); }
                return val;
            },
            getDataDefault: function(form) {
                var obj = new FormData(form), elems = form.querySelectorAll('input[type="file"]');
                for (var i = 0; i < elems.length; i++) {
                    if ($(elems[i]).prop('files')[0]) { obj.append(elems[i].getAttribute('name'), $(elems[i]).prop('files')[0]); }
                }
                return obj;
            },
            setTemplate: function(obj) {
                var html = '';
                html += '<a href="javascript:void(0);" ht-trigger="c-modal" ht-target="#'+obj.modal+'" style="display: none;"></a>'+
                        '<div id="'+obj.modal+'" class="c-modal">'+
                            '<div class="c-modal-box">'+
                                '<div class="c-modal-group" ht-skip="parent">'+
                                    '<div class="c_body text-center"><h4 class="content-notify">'+obj.notify+'</h4></div>'+
                                    '<div class="c_footer text-center"><button class="c-btn--sm c-btn--primary" ht-close="c-modal" ht-target-close="#'+obj.modal+'" ht-reload="'+obj.reload+'" ht-redirect="'+obj.redirect+'">OK</button></div>'+
                                '</div>'+
                            '</div>'+
                        '</div>';
                $('body').append(html);
            }
        },
        methods: {
            required: function(value, element) {
                if (element.nodeName.toLowerCase() === 'select') {
                    var val = $(element).val();
                    return val && val.length > 0;
                }
                if ($.validator.prototype.checkable(element)) {
                    return $.validator.prototype.getLength(value, element) > 0;
                }
                return value.length > 0;
            },
            email: function(value, element) {
                return (value) ? /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/igm.test( value ) : true;
            },
            number: function(value, element) {
                return (value) ? /^(?:-?\d+|-?\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test( value ) : true;
            },
            maxlength: function(value, element) {
                var max = $.validator.elements[element.name].maxlength.max;
                var length = value.length;
                return length <= max;
            },
            minlength: function(value, element) {
                var min = $.validator.elements[element.name].minlength.min;
                var length = value.length;
                return length >= min;
            },
            confirm: function(value, element) {
                var a = $.validator.prototype.elementValue( $.validator.prototype.findByName($.validator.elements[element.name].confirm.elem)[0] );
                return (value == a) ? true : false;
            },
            ajax: function(value, element) {
                var result = {};
                result[element.name] = value;
                result.checkAjax = true;
                $.ajax({
                    url: $.validator.elements[element.name].ajax.url,
                    type: 'post',
                    data: result,
                    async: false
                })
                .done(function(data) { result.error = $.parseJSON(data); });
                return (result.error) ? false : true;
            }
        }
    });
})(jQuery);