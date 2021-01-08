/* BEGIN c-upload */
$(document).ready(function() {
    $('body').on('click', '[ht-close="c-upload"]', function(e) {
        e.preventDefault();
        $(this).closest('.c-upload').removeClass('is-active');
        $(this).closest('.c-upload').find('input[type=file]').val('');
    });
});

function readFile(obj, type)
{
    var $this = $(obj);
    var imageTypes = [ 'jpg','jpeg','png','gif','bmp' ]; // khai báo mảng định dạng mở rộng của image
    var fileTypes = [ 'doc','docx','xls','xlsx','ppt','pptx','pdf','rar' ];// khai báo mảng định dạng mở rộng của file
    if (obj.files && obj.files[0]) {
        var extension = obj.files[0].name.split('.').pop().toLowerCase(), // Lấy phần mở rộng của file input
        // Duyệt mảng so sánh, trả về true/false
        isImage = imageTypes.indexOf(extension) > -1;
        isFile = fileTypes.indexOf(extension) > -1;
        if (isImage && !type) {
            // FileReader() lớp của js, https://developer.mozilla.org/en-US/docs/Web/API/FileReader
            var FR = new FileReader();
            FR.onload = function(e) {
                var str = e.target.result;
                // Image() lớp của js, https://developer.mozilla.org/en-US/docs/Web/API/HTMLImageElement/Image
                var image = new Image();
                image.src = str;
                $this.closest('.c-upload').find('.c_thumb-preview').html(image);
                $this.closest('.c-upload').addClass('is-active');
            };
            FR.readAsDataURL(obj.files[0]);
        }
        else if(isFile && type) {
            $this.closest('.c-upload').find('.c_file-filename').text(obj.files[0].name);
            $this.closest('.c-upload').addClass('is-active');
        } else {
            obj.value = '';
            var modal = 'upload-'+obj.getAttribute('name');
            if ($('body').find('#' + modal).length == 0) {
                var notify = (type) ? 'Tập tin yêu cầu có định dạng thuộc .doc, .docx, .xls, .xlsx, .pptx, .pdf, .rar' : 'Hình ảnh yêu cầu có định dạng thuộc .jpg, .jpeg, .png, .gif';
                var html = '';
                html += '<a href="javascript:;" ht-trigger="c-modal" ht-target="#'+modal+'" style="display: none;"></a><div id="'+modal+'" class="c-modal"><div class="c-modal-box"><div class="c-modal-group" ht-skip="parent"><div class="c_body text-center"><h4 class="content-notify">'+notify+'</h4></div><div class="c_footer text-center"><button class="c-btn--sm c-btn--primary" ht-close="c-modal" ht-target-close="#'+modal+'">OK</button></div></div></div></div>';
                $('body').append(html);
            }
            $('a[ht-target="#'+modal+'"]').click();
        }
    }
}
/* BEGIN c-upload */

$(document).ready(function(){
    $('#form_s-form-2').HTValidate({
        rules: {
            fullname: { required: 'Thông tin bắt buộc' },
            phone: { required: 'Thông tin bắt buộc', number: 'Vui lòng nhập số' },
            email: { required: 'Thông tin bắt buộc', email: 'Email không hợp lệ' }
        },
        // ajax: { url: 'tuyen-dung-52.html' },
        setTemplate: {
            notify: 'Bạn đã gửi thành công. Chúng tôi sẽ liên hệ lại trong thời gian sớm nhất!',
            modal: 'notify_s-form-1',
        }
    });
});