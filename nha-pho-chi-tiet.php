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
    <script type="text/javascript" src="js/hitech/HTValidate.js"></script>
    <script type="text/javascript" src="js/hitech/HTSlide.js"></script>
    <?php // CSS & JS dùng chung toàn website ?>
    <link href="css/style.css" rel="stylesheet" />
    <script src="js/style.js" type="text/javascript"></script>

    <?php // CSS, JS chỉ dùng cho trang này ?>
    <link href="css/du-an-chi-tiet.css" rel="stylesheet" />
    <script src="js/du-an-chi-tiet.js" type="text/javascript"></script>
</head>

<body>

    <!-- BEGIN HEADER -->

    <?php include('header.php'); ?>

    <!-- END HEADER -->



    <!-- BEGIN CONTENT -->

    <div class="p-detail-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="b-slide-1">
                        <div class="b_thumb ht-ratio--100"><span class="ht-ratio__img"><img src="images/nha-pho-1.png" alt=""></span></div> <!--595x595-->
                        <div class="b_nav">
                            <ul>
                            <?php for($i = 1; $i <= 6; $i++){ ?>
                                <li>
                                    <a href="javascript:;" data-image="images/nha-pho-<?php echo $i ?>.png">
                                        <img src="images/nha-pho-<?php echo $i ?>.png" alt="" /><!--149x149-->
                                    </a>
                                </li>
                            <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="p_box">
                        <div class="status empty">Còn trống</div> <!-- Còn trống: empty , đã bán: sold, cho thuê: lease -->
                        <h1 class="title">KHU ĐÔ THỊ SINH THÁI AN PHÚ LONG GARDEN</h1>

                        <div class="address"><i class="fa fa-map-marker" aria-hidden="true"></i> 18 Phan Văn Trị, phường 10, quận Gò Vấp, Tp.HCM</div>

                        <div class="desc">
                            Với mục tiêu kiến tạo nên môi trường sống đẳng cấp, thân thiện với môi trường, hài hoà giữa con người với thiên nhiên, bên cạnh cảnh quan sinh thái được đầu tư đồng bộ, Khu đô thị An Phú Long Garden còn sơ hữu những
                            tổ hợp tiện ích hiện đại
                        </div>
                        <div class="price">Giá bán: <span>5.7 tỷ</span></div>

                        <h2 class="title"><span>Thông tin dự án</span></h2>

                        <ul class="info">

                            <li class="fa-cube"><span>Diện tích:</span> 1.000 ha</li>

                            <li class="fa-compass"><span>Hướng:</span> Đông Nam</li>

                            <li class="fa-bed"><span>Số phòng ngủ:</span> 4</li>

                            <li class="fa-bath"><span>WC:</span> 3</li>
                        </ul>

                        <div class="p_map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62702.7326061176!2d106.65592311243394!3d10.81737385381252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xda069d16ce7da255!2zQ8O0bmcgdHkgVE5ISCBHaeG6o2kgcGjDoXAgQ8O0bmcgbmdo4buHIGNhbyBTw6BpIEfDsm4gLSBTYWlnb24gSGl0ZWNo!5e0!3m2!1svi!2s!4v1507601070852"
                                width="600"
                                height="450"
                                frameborder="0"
                                style="border: 0;"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="s-form-4">
                <div class="row row-flex">
                    <div class="col-12 col-sm-12 col-md-3 bg">
                        <div class="s_hotline">
                            <h2><i class="fa fa-phone"></i> Đặt lịch hẹn</h2>

                            <span>098 1879 168</span>
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-9">
                        <div class="s_form">
                            <form id="form_s-form-4" action="" method="POST" accept-charset="utf-8" enctype="multipart/form-data" novalidate="novalidate">
                                <div class="row row-flex">
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="form-group c-form-border c-form-border--icon">
                                            <span class="c_icon"><i class="fa fa-user text--icon" aria-hidden="true"></i></span>

                                            <input type="text" name="fullname" class="c_input" value="" placeholder="Họ và tên" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="form-group c-form-border c-form-border--icon">
                                            <span class="c_icon"><i class="fa fa-phone text--icon" aria-hidden="true"></i></span>

                                            <input type="text" name="phone" class="c_input" value="" placeholder="Điện thoại" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="form-group c-form-border c-form-border--icon">
                                            <span class="c_icon"><i class="fa fa-envelope text--icon" aria-hidden="true"></i></span>

                                            <input type="email" name="email" class="c_input" value="" placeholder="Email" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-8">
                                        <div class="form-group c-form-border c-form-border--icon">
                                            <span class="c_icon c_icon--top"><i class="fa fa-info-circle text--icon" aria-hidden="true"></i></span>

                                            <textarea name="content" class="c_input" rows="1" placeholder="Thông tin thêm"></textarea>
                                        </div>
                                    </div>

                                    <input type="hidden" name="KHU ĐÔ THỊ SINH THÁI AN PHÚ LONG GARDEN">

                                    <div class="col-12 col-sm-12 col-md-4">
                                        <button type="submit" class="c-btn--primary">Gửi</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p_detail">
                <div class="ht-format-detail">
                    <p><strong>Khu đô thị sinh thái An Phú Long Garden</strong> được đầu tư bởi Công ty TNHH MTV Phát Triển Địa Ốc Hoàng Gia Phú với quy mô 120ha, nằm tại xã An Long, huyện Phú Giáo, tỉnh Bình Dương.</p>

                    <p>Trong giai đoạn 1, dự án sẽ được thực hiện trên phần diện tích đất 46ha, gồm các sản phẩm đất nền có diện tích đa dạng từ 5×16m, 5×17m, 5×18m...</p>

                    <p>
                        Với mục tiêu kiến tạo nên môi trường sống đẳng cấp, thân thiện với môi trường, hài hoà giữa con người với thiên nhiên, bên cạnh cảnh quan sinh thái được đầu tư đồng bộ, Khu đô thị An Phú Long Garden còn sơ hữu những tổ
                        hợp tiện ích hiện đại ngay bên trong dự án, đảm bảo đáp ứng mọi nhu cầu từ nghỉ ngơi, thư giãn cho đến vui chơi, giải trí… của cộng đồng cư dân văn minh, thịnh vượng.
                    </p>

                    <p>
                        - Tên dự án:&nbsp;Khu đô thị sinh thái An Phú Long Garden<br />

                        - Vị trí: Xã An Long, huyện Phú Giáo, tỉnh Bình Dương<br />

                        - Chủ đầu tư: Công ty TNHH MTV Phát Triển Địa Ốc Hoàng Gia Phú (thuộc Hoàng Cát Group)<br />

                        - Đơn vị phân phối: Công ty TNHH Xây Dựng Và Phát Triển Địa Ốc Hoàng Cát Bình Dương<br />

                        - Tổng diện tích: 120ha<br />

                        - Mật độ xây dựng: 47,53%<br />

                        - Mật độ hạ tầng, cảnh quan, tiện ích: 52,47%<br />

                        - Quy mô giai&nbsp;đoạn 1: 46ha<br />

                        - Các loại diện tích:&nbsp;5×16m, 5×17m, 5×18m…<br />

                        - Pháp lý:&nbsp;Sổ hồng riêng từng nền, Quy hoạch 1/500<br />

                        + HĐ giữ chỗ, HĐTT Chuyển nhượng, HĐ Nguyên Tắc, GCNQSDĐ
                    </p>

                    <p style="text-align: center;">
                        <img src="images/nha-pho-1.png" /><br />
                        <em>Phối cảnh tổng thể dự&nbsp;án Khu&nbsp;đô thị sinh thái An Phú Long Garden</em>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- END CONTENT -->



    <!-- BEGIN FOOTER -->

    <?php include('footer.php'); ?>

    <!-- END FOOTER -->

</body>

</html>