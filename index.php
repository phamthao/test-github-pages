<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <meta name="viewport" content="width=device-width, initial-scale=1 , maximum-scale=1, user-scalable=no, viewport-fit=cover" />

        <title>Title</title>

        <link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

        <?php // Thư viện dùng chung toàn website -- KHÔNG ĐƯỢC SỬA ?>

        <link href="css/vendor/normalize.css" rel="stylesheet" />

        <link href="css/vendor/font-awesome.css" rel="stylesheet" />

        <link href="css/hitech/ht-base.css" rel="stylesheet" />

        <script src="js/vendor/jquery-3.3.1.js" type="text/javascript"></script>

        <script src="js/hitech/ht-base.js" type="text/javascript"></script>

        <?php // Thư viện chỉ dùng cho trang này -- KHÔNG ĐƯỢC SỬA ?>
        <link rel="stylesheet" href="js/vendor/nivo-slider/nivo-slider.css">

        <script type="text/javascript" src="js/vendor/nivo-slider/nivo-slider.js"></script>
        <?php // CSS & JS dùng chung toàn website ?>

        <link href="css/style.css" rel="stylesheet" />

        <script src="js/style.js" type="text/javascript"></script>

        <?php // CSS, JS chỉ dùng cho trang này ?>
        <link href="css/home.css" rel="stylesheet" />

        <script src="js/home.js" type="text/javascript"></script>
    </head>

    <body>
        <!-- BEGIN HEADER -->

        <?php include('header.php'); ?>

        <!-- END HEADER -->

        <!-- BEGIN CONTENT -->

        <div class="s-slide-5">
            <div class="b-nslide-ratio">
                <div class="nivoSlider">
                    <a href=""><img src="images/slide-1.png" alt="" /></a> <!--1381x510-->
                    <a href=""><img src="images/slide-2.png" alt="" /></a>
                </div>
            </div>
        </div>

        <div class="container ht-mrt30">
            <div class="ht-page">
                <div class="ht-page__sidebar"><?php include('sidebar.php'); ?></div>
                <div class="ht-page__main">
                    <div class="s-list-1">
                        <div class="c-headline-9">
                            <h5 class="c_sub">Minh huy Land</h5>
                            <h2 class="c_name">Bất động sản mới nhất</h2>
                        </div>
                        <div class="row row-flex">
                        <?php for($i = 1; $i <= 6; $i++){ ?>
                            <div class="col-12 col-xs-6 col-md-4">
                                <a href="dat-nen-chi-tiet.php" class="b-card-44">
                                    <div class="b_thumb ht-ratio--100">
                                        <img src="images/dat-nen-<?php echo $i ?>.png" alt="" class="ht-ratio__img"> <!--546x546-->
                                        <div class="overlay">
                                            <div><i class="fa fa-search" aria-hidden="true"></i></div>
                                        </div>
                                        <span class="status sold">Đã bán</span>
                                    </div>
                                    <div class="b_content">
                                        <h3 class="b_title">Đất nền 4 mặt tiền khu vực Long Thành</h3>
                                        <div class="b_price">Giá bán: <span>5.8 Tỷ</span></div>
                                        <div class="b_acreage">Diện tích: <span>2000 ha</span></div>
                                        <h4 class="b_desc">1979/16 Huỳnh Tấn Phát, Khu Phố 6, Thị Trấn Nhà Bè, TP.HCM</h4>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                    <div class="s-list-1">
                        <div class="c-headline-9">
                            <h5 class="c_sub">Minh huy Land</h5>
                            <h2 class="c_name">Nhà phố nổi bật</h2>
                        </div>
                        <div class="row row-flex">
                        <?php for($i = 1; $i <= 6; $i++){ ?>
                            <div class="col-12 col-xs-6 col-md-4">
                                <div class="b-card-53">
                                    <a href="nha-pho-chi-tiet.php">
                                        <div class="b_thumb ht-ratio--100"><!--546x546-->
                                            <img src="images/nha-pho-<?php echo $i ?>.png" alt="" class="ht-ratio__img" />
                                            <span class="status empty">Còn trống</span>
                                            <div class="b_overlay"></div>
                                            <ul class="b_multi">
                                                <li><span class="fa fa-cube">300 Ha</span></li>
                                                <li><span class="fa fa-bed">3</span></li>
                                                <li><span class="fa fa-bath">2</span></li>
                                                <li><span class="fa fa-compass">Đông</span></li>
                                            </ul>
                                        </div>
                                        <h3 class="b_title">Biệt thự nhà bè khu dân cư đô thị cấp cao Green Riverside </h3>
                                    </a>

                                    <div class="b_address"><i class="fa fa-map-marker" aria-hidden="true"></i> 1979/16 Huỳnh Tấn Phát, Khu Phố 6, Thị Trấn Nhà Bè, TP.HCM</div>
                                    <div class="b_price">Giá bán: <span>5.8 Tỷ</span></div>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="s-home-34">
            <div class="container">
                <div class="row row-flex">
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="s_left">
                            <div class="c-headline-2 h2">
                                <div class="c_name">Tin tức nổi bật</div>
                                <div class="c_divider"><i class="fa fa-newspaper-o" aria-hidden="true"></i></div>
                            </div>
                            <div class="b_title"><a href="bai-viet.php">Tiêu đề bài viết của doanh nghiệp</a></div>
                            <a href="tin-tuc-chi-tiet.php">
                                <div class="b_thumb ht-ratio--75"> <!--432x324-->
                                    <img src="images/news-1.png" alt="" class="ht-ratio__img" />
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-7">
                        <div class="s-list">
                            <?php for($i = 2; $i <= 4; $i++){ ?>
                            <a href="tin-tuc-chi-tiet.php" class="b-card-2">
                                <div class="b_thumb ht-ratio--75"><img src="images/news-<?php echo $i ?>.png" alt="" class="ht-ratio__img" /></div> <!--180x135-->
                                <div class="b_title"><span>Tiêu đề bài viết của doanh nghiệp</span></div>
                                <div class="b_desc">Mô tả tóm tắt bài viết của doanh nghiệp hiển thị tại vị trí này. Mô tả tóm tắt bài viết của doanh nghiệp hiển thị tại vị trí này. Mô tả tóm tắt bài viết của doanh nghiệp hiển thị tại vị trí này.Mô tả tóm tắt bài viết của doanh nghiệp hiển thị tại vị trí này.</div>
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT -->

        <!-- BEGIN FOOTER -->

        <?php include('footer.php'); ?>

        <!-- END FOOTER -->

        <script>
            $(document).ready(function() {
                $('.s-slide-5 .nivoSlider').nivoSlider({ effect: 'random' });
            });
        </script>
    </body>
</html>
