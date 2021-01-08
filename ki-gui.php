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
    <link href="css/ki-gui.css" rel="stylesheet" />


</head>

<body>

    <!-- BEGIN HEADER -->

	<?php include('header.php'); ?>

    <!-- END HEADER -->



    <!-- BEGIN CONTENT -->

    <div class="s-home-15">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="s_contact">
                        <h2>Đăng ký nhận ký gửi</h2>
                        <h1>Công ty TNHH Bất Động sản Minh Huy Land</h1>
                        <div class="ht-format-detail">
                            <p><b>Minh Huy Land</b> chuyên lĩnh vực đầu tư môi giới bất động sản, với kinh nghiệm 10 năm thành lập, hoạt động với phương châm lấy uy tín đi đầu, luôn hướng đến sự đổi mới và phong cách chuyên nghiệp, chúng tôi rất hãnh diện khi mang lại cho quý khách hàng những cơ hội đầu tư hấp dẫn, sản phẩm tốt và nhiều tiềm năng , cơ hội sở hữu một cuộc sống an cư chất lượng</p>
                        </div>
                        <ul>
                            <li><a href="tel:02862661155"><i class="fa fa-phone" aria-hidden="true"></i> <span>(028) 62661155</span></a></li>
                            <li><a href="mailto:lienhe@saigonhiech.vn"><i class="fa fa-envelope" aria-hidden="true"></i> <span>lienhe@saigonhiech.vn</span></a></li>
                            <li><a href="https://saigonhitech.vn"><i class="fa fa-globe" aria-hidden="true"></i> <span>https://saigonhitech.vn</span></a></li>
                        </ul>
                    </div>
                    <div class="s_social">
                        <a href="javascript:;" class="c-icon-bg--fb"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="" rel="nofollow" class="c-icon-img c-icon-bg--zalo" style="background-image: url('images/icons/zalo-w.png');"></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 pull-right">
                    <form id="form_s-home-15" action="" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                        <div class="form-group c-form-border c-form-border--icon">
                            <span class="c_icon"><i class="fa fa-user text--icon" aria-hidden="true"></i></span>
                            <input type="text" name="fullname" class="c_input" value="" placeholder="Họ tên">
                        </div>
                        <div class="form-group c-form-border c-form-border--icon">
                            <span class="c_icon"><i class="fa fa-phone text--icon" aria-hidden="true"></i></span>
                            <input type="text" name="phone" class="c_input" value="" placeholder="Điện thoại">
                        </div>
                        <div class="form-group c-form-border c-form-border--icon">
                            <span class="c_icon"><i class="fa fa-envelope text--icon" aria-hidden="true"></i></span>
                            <input type="email" name="email" class="c_input" value="" placeholder="Email">
                        </div>
                        <div class="form-group c-form-border c-form-border--icon">
                            <span class="c_icon"><i class="fa fa-map-marker text--icon" aria-hidden="true"></i></span>
                            <input type="text" name="address" class="c_input" value="" placeholder="Địa chỉ BĐS">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group c-form-border c-form-border--icon">
                                    <span class="c_icon"><i class="fa fa-cube text--icon" aria-hidden="true"></i></span>
                                    <input type="text" name="dt" class="c_input" value="" placeholder="Diện tích">
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group c-form-border c-form-border--icon">
                                    <span class="c_icon"><i class="fa fa-usd text--icon" aria-hidden="true"></i></span>
                                    <input type="text" name="price" class="c_input" value="" placeholder="Giá">
                                </div>
                            </div>
                        </div>
                        <div class="form-group c-form-border c-form-border--icon">
                            <span class="c_icon c_icon--top"><i class="fa fa-info-circle text--icon" aria-hidden="true"></i></span>
                            <textarea name="content" class="c_input" rows="3" placeholder="Thông tin thêm về BĐS"></textarea>
                        </div>
                        <div class="form-group text-center"><button type="submit" class="c-btn--secondary">Gửi</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- END CONTENT -->

    <script type="text/javascript">
        /* BEGIN s-home-15 */
        /* Thêm thư viện js/hitech/HTValidate.js */
        $(document).ready(function(){
            $("#form_s-home-15").HTValidate({
                rules: {
                    fullname: { required: 'Thông tin bắt buộc' },
                    phone: { required: 'Thông tin bắt buộc', number: 'Vui lòng nhập số' },
                    email: { required: 'Thông tin bắt buộc', email: 'Email không hợp lệ' }
                },
                setTemplate: {
                    notify: 'Bạn đã gửi thành công. Chúng tôi sẽ liên hệ lại trong thời gian sớm nhất!',
                    modal: 'notify_s-home-15',
                }
            });
        });
        /* END s-home-15 */
    </script>

    <!-- BEGIN FOOTER -->

	<?php include('footer.php'); ?>

    <!-- END FOOTER -->

</body>

</html>