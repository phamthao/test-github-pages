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
    <link href="css/tin-tuc.css" rel="stylesheet" />


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
                        <h2 class="c_name">Tin tức</h2>
                    </div>
                    <div class="list"> <!--Giới hạn 15 card-->
                    <?php for($i = 1; $i <= 6; $i++){ ?>
                        <a href="tin-tuc-chi-tiet.php" class="b-card-2">
                            <div class="b_thumb ht-ratio--75"><img src="images/news-<?php echo $i ?>.png" alt="" class="ht-ratio__img" /></div> <!--200x150-->
                            <h3 class="b_title"><span>Tiêu đề bài viết của doanh nghiệp</span></h3>
                            <h4 class="b_desc">Mô tả tóm tắt bài viết của doanh nghiệp hiển thị tại vị trí này. Mô tả tóm tắt bài viết của doanh nghiệp hiển thị tại vị trí này. Mô tả tóm tắt bài viết của doanh nghiệp hiển thị tại vị trí này. Mô tả tóm tắt bài viết của doanh nghiệp hiển thị tại vị trí này.</h4>
                        </a>
                    <?php } ?>
                    <?php for($i = 1; $i <= 6; $i++){ ?>
                        <a href="tin-tuc-chi-tiet.php" class="b-card-2">
                            <div class="b_thumb ht-ratio--75"><img src="images/news-<?php echo $i ?>.png" alt="" class="ht-ratio__img" /></div>
                            <h3 class="b_title"><span>Tiêu đề bài viết của doanh nghiệp</span></h3>
                            <h4 class="b_desc">Mô tả tóm tắt bài viết của doanh nghiệp hiển thị tại vị trí này. Mô tả tóm tắt bài viết của doanh nghiệp hiển thị tại vị trí này. Mô tả tóm tắt bài viết của doanh nghiệp hiển thị tại vị trí này. Mô tả tóm tắt bài viết của doanh nghiệp hiển thị tại vị trí này.</h4>
                        </a>
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