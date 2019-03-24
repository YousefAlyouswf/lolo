<?php
include_once '../../db.inc.php';
?><?php
session_start();
if (isset($_SESSION['log'])) {


    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../../styles/catagorycontrol.css">
        <link rel="stylesheet" type="text/css" href="../../styles/bootstrap-4.1.2/bootstrap1.min.css">

        <meta charset="utf-8"/>
        <link rel="icon" type="image/png" href="assets/img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <link rel="stylesheet" href="../css/uploadfile1.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="../css/textbox2.css">



        <title>Light Bootstrap Dashboard by Creative Tim</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
        <meta name="viewport" content="width=device-width"/>


        <!-- Bootstrap core CSS     -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>

        <!-- Animation library for notifications   -->
        <link href="assets/css/animate.min.css" rel="stylesheet"/>

        <!--  Light Bootstrap Table core CSS    -->
        <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="assets/css/demo.css" rel="stylesheet"/>


        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet"/>

    </head>
    <body>

    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

            <!--

                Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
                Tip 2: you can also add an image using data-image tag

            -->

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a class="simple-text">
                        أهلا وسهلا
                    </a>
                </div>

                <ul class="nav">
                    <li class="active">
                        <a href="index.php">
                            <i class="pe-7s-graph"></i>
                            <p>لوحه التحكم</p>
                        </a>
                    </li>
                    <li>
                        <a href="user.html">
                            <i class="pe-7s-user"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="table.html">
                            <i class="pe-7s-note2"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li>
                        <a href="typography.html">
                            <i class="pe-7s-news-paper"></i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li>
                        <a href="icons.html">
                            <i class="pe-7s-science"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li>
                        <a href="maps.html">
                            <i class="pe-7s-map-marker"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a href="notifications.html">
                            <i class="pe-7s-bell"></i>
                            <p>Notifications</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">صفحه الشمعات</a>
                    </div>
                    <div class="collapse navbar-collapse">


                        <ul class="nav navbar-nav navbar-right">

                            <li>
                                <a href="#">
                                    <p>تسجيل خروج</p>
                                </a>
                            </li>
                            <li class="separator hidden-lg"></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <?php
            $msg = '';

            if (isset($_POST['upload'])) {
                $des = $_POST['text1'];
                $price = $_POST['price'];
                $target = '../../images/candle/' . basename($_FILES['image']['name']);
                $image = $_FILES['image']['name'];
                if (empty($image)) {
                    $msg = 'أختر الصوره';
                } elseif (empty($des)) {
                    $msg = 'أكتب الوصف';
                } elseif (empty($price)) {
                    $msg = 'أكتب السعر';
                } else {
                    $sql = "INSERT INTO `candle`(`image`, `price`, `des`) VALUES ('$image','$price','$des')";

                    mysqli_query($connect, $sql);
                    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

                    }
                }


            }
            ?>
            <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
            <form action="candle.php" method="POST" enctype="multipart/form-data">
                <div class="file-upload">
                    <div class="image-upload-wrap">
                        <input type="hidden" name="size" value="1000000">
                        <input class="file-upload-input" type='file' name="image" onchange="readURL(this);" accept="image/*"/>
                        <div class="drag-text">
                            <h3>ضع الصورة هنا او اضغط لتحديد مكان الصوره</h3>
                        </div>
                    </div>
                    <div class="file-upload-content">
                        <img class="file-upload-image" src="#" alt="your image"/>
                        <div class="image-title-wrap">
                            <button type="submit" onclick="removeUpload()" class="remove-image">Remove <span
                                        class="image-title">Uploaded Image</span></button>
                        </div>

                    </div>


                            <input type="text" id="input" name="text1" required="required" />

                            <input type="number" id="input" name="price" required="required" />

                    <br><br><br>
                    <button class="file-upload-btn" type="submit" name="upload">أضف الصورة</button>
            </form>
        </div>


        <?php

        $sql = "SELECT * FROM candle";
        $result = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo '<a target="_blank" href="../../images/candle/' . $row['image'] . '">';
            // echo '<div class=" col-md-4 col-sm-6"><img src="../../images/candle/' . $row['image'] . '" ></a><a href="deletefluid.php?id=' . $row['id'] . '">Delete</a>';
            echo '<div class="col-xl-4 col-md-6 grid-item new">
                <div class="product">
                    <div class="product_image"><img src="../../images/candle/' . $row['image'] . '" alt=""></div>
                    <div class="product_content">
                        <div class="product_info d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div>
                                    <div class="product_name" style="font-size: xx-large">' . $row['des'] . '</div>
                                </div>
                            </div>
                            <div class="ml-auto text-right">
                                <div class="product_price text-right" style="font-size: xx-large">' . $row['price'] . '<span> ريال</span></div>
                            </div>
                        </div>
                        <div class="product_buttons">
                            <div class="text-right d-flex flex-row align-items-start justify-content-start">

                                <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                    <div><div><img src="../../images/cart.svg" class="svg" alt=""></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';

        }

        ?>


    </div>
    </div>


    </body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>
    <script src="../js/uploadfile.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    </html>
    <?php
} else {
    header("refresh:0;url=../index.php");
}
