/* -- Form xài chung cho đất nền và nhà phố */
$(document).ready(function(){
    $("#form_s-form-4").HTValidate({
        rules: {
            fullname: { required : 'Thông tin bắt buộc' },
            phone: { required : 'Thông tin bắt buộc', number: 'Vui lòng nhập số' }
        },
        // ajax: { url: 'dat-lich-hen-52.html' },
        setTemplate: {
            notify: 'Bạn đã gửi thành công. Chúng tôi sẽ liên hệ lại trong thời gian sớm nhất!',
            modal: 'notify_s-form-4',
        }
    });
    $('.b-slide-1').HTSlide();
});