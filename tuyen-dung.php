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
                        <h2 class="c_name">Tuyển dụng</h2>
                    </div>
                    <div class="list"> <!--Giới hạn 15 card-->
                    <?php for($i = 1; $i <= 12; $i++){ ?>
                        <a href="tuyen-dung-chi-tiet.php" class="b-job">
                            <div>
                                <div class="job-name">Nhân viên tư vấn và hỗ trợ kí gửi nhà đất</div>
                            </div>
                            <div class="b_location">
                                <span class="fa fa-map-marker fa-abs-top">2 năm kinh nghiệm</span>
                            </div>
                            <div>
                                <span class="fa fa-money">5 triệu - 7 triệu</span>
                            </div>
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

    <style type="text/css">
        .s-job_main {
            width: 100%;
        }
        .s-job_main .b-job:nth-child(2n) {
            background-color: #fafafa;
        }
        .b-job {
            font-size: 14px;
            display: block;
            padding: 20px 0 10px;
            border-bottom: 1px dashed #ddd;
            transition: all .25s ease-in-out;
        }
        .b-job>div {
            padding: 10px 15px;
            margin-bottom: 10px;
        }
        .s-table_col>div:first-child {
            margin-bottom: 10px;
        }
        .job-name a {
            font-size: 16px;
            font-weight: 500;
            line-height: 1;
            transition: all .5s;
        }
        .b-job>div span {
            line-height: 20px;
            display: block;
            margin-bottom: 5px;
        }
        .b-job>div span.fa:before {
            width: 15px;
            text-align: center;
            color: #2a4c68;
        }
        .b-job>div span.fa-filter:before {
            color: #2a4c68;
        }
        .b-job:hover {
            box-shadow: inset 0px 0px 5px #CCC;
        }
        .b-job .job-name {
            font-size: 13px;
            text-transform: uppercase;
            font-weight: normal;
            margin-bottom: 5px;
            color: #2658a1;
            font-weight: bold;
            transition: all 0.5s;
        }
        .b-job:hover .job-name {
            color: #f60;
        }

        @media screen and (min-width: 768px) {
            .b-job {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }
            .b-job .b_location {
                width: 35%;
            }
        }
    </style>

    <!-- BEGIN FOOTER -->

    <?php include('footer.php'); ?>

    <!-- END FOOTER -->

</body>

</html>