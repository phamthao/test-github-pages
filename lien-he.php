<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Title</title>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">

    <?php // Thư viện dùng chung toàn website -- KHÔNG ĐƯỢC SỬA ?>
    <link href="css/vendor/normalize.css" rel="stylesheet" />
    <link href="css/vendor/font-awesome.css" rel="stylesheet" />
    <link href="css/hitech/ht-base.css" rel="stylesheet" />
    <script src="js/vendor/jquery-3.3.1.js" type="text/javascript"></script>
    <script src="js/hitech/ht-base.js" type="text/javascript"></script>

    <?php // Thư viện chỉ dùng cho trang này -- KHÔNG ĐƯỢC SỬA ?>
    <script src="js/hitech/HTValidate.js" type="text/javascript"></script>

    <?php // CSS & JS dùng chung toàn website ?>
    <link href="css/style.css" rel="stylesheet" />
    <script src="js/style.js" type="text/javascript"></script>

    <?php // CSS, JS chỉ dùng cho trang này ?>

</head>
<body>
    <!-- BEGIN HEADER -->
	<?php include('header.php'); ?>
    <!-- END HEADER -->

    <!-- BEGIN CONTENT -->
    <div class="p-contact-1">
        <div class="container-fluid">
            <div class="c-headline-2 h1">
                <h1 class="c_name">Liên hệ</h1>
                <div class="c_divider"><i class="fa fa-address-card-o" aria-hidden="true"></i></div>
            </div>
            <div class="p_contact">
                <ul class="p_contact-info">
                    <li><h2><span class="fa fa-home fa-abs-top">CÔNG TY TNHH GIẢI PHÁP CÔNG NGHỆ CAO SÀI GÒN</span></h2></li>
                    <li><span class="fa fa-map-marker fa-abs-top">399B Trường Chinh, phường 14, quận Tân Bình, TP.HCM</span></li>
                    <li>
                        <span class="fa fa-phone">(028) 62661155</span>
                        <span class="fa fa-mobile">0909888888</span>
                    </li>
                    <li>
                        <span class="fa fa-envelope ht-hover"><a href="mailto:lienhe@saigonhitech.vn">lienhe@saigonhitech.vn</a></span>
                        <span class="fa fa-globe ht-hover"><a href="https://saigonhitech.vn">https://saigonhitech.vn</a></span>
                    </li>
                    <li><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62702.7326061176!2d106.65592311243394!3d10.81737385381252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xda069d16ce7da255!2zQ8O0bmcgdHkgVE5ISCBHaeG6o2kgcGjDoXAgQ8O0bmcgbmdo4buHIGNhbyBTw6BpIEfDsm4gLSBTYWlnb24gSGl0ZWNo!5e0!3m2!1svi!2s!4v1507601070852" frameborder="0" style="border:0" allowfullscreen=""></iframe></li>
                </ul>
                <form id="form_contact" action="" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="form-group c-form c-form--icon">
                        <span class="c_icon"><i class="fa fa-user text--icon" aria-hidden="true"></i></span>
                        <input type="text" name="fullname" value="" class="c_input" placeholder="Họ và tên (*)">
                    </div>
                    <div class="form-group c-form c-form--icon">
                        <span class="c_icon"><i class="fa fa-phone-square text--icon" aria-hidden="true"></i></span>
                        <input type="text" name="phone" value="" class="c_input" placeholder="Điện thoại (*)">
                    </div>
                    <div class="form-group c-form c-form--icon">
                        <span class="c_icon"><i class="fa fa-envelope text--icon" aria-hidden="true"></i></span>
                        <input type="text" name="email" value="" class="c_input" placeholder="Email (*)">
                    </div>
                    <div class="form-group c-form c-form--icon">
                        <span class="c_icon"><i class="fa fa-map-marker text--icon" aria-hidden="true"></i></span>
                        <input type="text" name="address" value="" class="c_input" placeholder="Địa chỉ">
                    </div>
                    <div class="form-group c-form c-form--icon">
                        <span class="c_icon c_icon--top"><i class="fa fa-info-circle text--icon" aria-hidden="true"></i></span>
                        <textarea name="content" class="c_input" rows="3" placeholder="Thông tin thêm"></textarea>
                    </div>
                    <div class="form-group text-center"><button type="submit" class="c-btn--sm c-btn--primary">Gửi</button></div>
                </form>
            </div>
        </div>
    </div>
    <style type="text/css" media="screen">
        /* BEGIN p-contact-1 */
        .p-contact-1 {
            margin: 30px 0;
        }
        .p-contact-1 .p_contact {
            position: relative;
            margin-bottom: 30px;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center;
        }
        .p-contact-1 .p_contact > ul {
            margin: 0 1.25%;
        }
        .p-contact-1 .p_contact > ul h1 {
            font-size: 20px;
            margin: 10px 0 5px;
            text-transform: uppercase;
        }
        .p-contact-1 .p_contact > ul span.fa {
            margin-bottom: 7px;
            line-height: 1.42857143;
            font-weight: inherit;
        }
        .p-contact-1 .p_contact > ul span.fa:not(:last-child) {
            margin-right: 20px;
        }
        .p-contact-1 .p_contact > ul span.fa::before {
            width: 15px;
            text-align: center;
        }
        .p-contact-1 .p_contact > ul iframe {
            width: 100% !important;
            height: 225px !important;
            margin-top: 25px;
        }
        .p-contact-1 .p_contact > form {
            width: 30%;
            margin: 0 1.25%;
        }
        @media screen and (max-width: 991px) {
            .p-contact-1 .p_contact {
                flex-direction: column;
            }
            .p-contact-1 .p_contact > ul h1 {
                font-size: 14px;
                font-weight: bold;
            }
            .p-contact-1 .p_contact > ul iframe {
                margin: 15px 0;
            }
            .p-contact-1 .p_contact > form {
                width: auto;
            }
        }
        /* END p-contact-1 */
    </style>
    <script>
        /* BEGIN p-contact-1 */
        /* Thêm thư viện js/hitech/HTValidate.js */
        $(document).ready(function(){
            $('#form_contact').HTValidate({
                rules: {
                    fullname: { required: 'Thông tin bắt buộc' },
                    phone: { required: 'Thông tin bắt buộc', number: 'Vui lòng nhập số' },
                    email: { required: 'Thông tin bắt buộc', email: 'Email không hợp lệ' }
                },
                setTemplate: {
                    notify: 'Bạn đã gửi thành công. Chúng tôi sẽ liên hệ lại trong thời gian sớm nhất!',
                    modal: 'notify_contact',
                }
            });
        });
        /* END p-contact-1 */
    </script>
    <!-- END CONTENT -->

    <!-- BEGIN FOOTER -->
	<?php include('footer.php'); ?>
    <!-- END FOOTER -->
</body>
</html>