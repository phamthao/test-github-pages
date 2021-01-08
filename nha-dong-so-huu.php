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

    <div class="container ht-mrt30">
        <div class="ht-page">
            <div class="ht-page__sidebar"><?php include('sidebar.php'); ?></div>
            <div class="ht-page__main">
                <div class="s-list-1">
                    <div class="c-headline-9">
                        <h5 class="c_sub">Minh huy Land</h5>
                        <h2 class="c_name">Nhà đồng sở hữu</h2>
                    </div>
                    <div class="row row-flex"> <!--Giới hạn 15 card-->
                    <?php for($i = 9; $i >= 1; $i--){ ?>
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
                    <?php for($i = 9; $i >= 1; $i--){ ?>
                        <div class="col-12 col-xs-6 col-md-4">
                            <div class="b-card-53">
                                <a href="nha-pho-chi-tiet.php">
                                    <div class="b_thumb ht-ratio--100">
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
                    <ul class="s-pagination-2 text-center">
                        <li><a href="javascript:;">«</a></li>
                        <li><a href="javascript:;">1</a></li>
                        <li><a href="javascript:;">2</a></li>
                        <li class="active"><a href="javascript:;">3</a></li>
                        <li><a href="javascript:;">4</a></li>
                        <li><a href="javascript:;">5</a></li>
                        <li><a href="javascript:;">»</a></li>
                    </ul>
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