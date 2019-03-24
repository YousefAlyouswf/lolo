<?php
include_once 'db.inc.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Category</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Little Closet template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/category1.css">
    <link rel="stylesheet" type="text/css" href="styles/category_responsive.css">
</head>
<body>

<!-- Menu -->

<div class="menu">

    <!-- Search -->

    <!-- Navigation -->
    <div class="menu_nav">
        <ul>
            <li><a href="index.php">تغليف المصاحف</a></li>
            <li><a href="#">الصناديق</a></li>
            <li><a href="#">الكوب بالاسم</a></li>
            <li><a href="candle.php">الشمعه بالاسم</a></li>
        </ul>
    </div>
    <!-- Contact Info -->
    <div class="menu_contact">
        <div class="menu_phone d-flex flex-row align-items-center justify-content-start">
            <div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
            <div>+966 53-290-6836</div>
        </div>
        <div class="menu_social">
            <ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<div class="super_container">

    <!-- Header -->

    <header class="header">
        <div class="header_overlay"></div>
        <div class="header_content d-flex flex-row align-items-center justify-content-start">
            <div class="logo">
                <a href="#">
                    <div class="d-flex flex-row align-items-center justify-content-start">
                        <div><img src="images/logo_1.png" alt=""></div>
                        <div>لآليْ لتغليف المصاحف</div>
                    </div>
                </a>
            </div>
            <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
            <nav class="main_nav">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                    <li><a href="index.php">تغليف المصاحف</a></li>
                    <li><a href="#">الصناديق</a></li>
                    <li><a href="#">الكوب بالاسم</a></li>
                    <li><a href="candle.php">الشمعه بالاسم</a></li>
                </ul>
            </nav>
            <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">

                <!-- User -->
                <div class="user"><a href="#"><div><img src="images/user.svg" alt="https://www.flaticon.com/authors/freepik"><div>1</div></div></a></div>
                <!-- Cart -->
                <div class="cart"><a href="cart.html"><div><img class="svg" src="images/cart.svg" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
                <!-- Phone -->
                <div class="header_phone d-flex flex-row align-items-center justify-content-start">
                    <div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
                    <div>+966 53-290-6836</div>
                </div>
            </div>
        </div>
    </header>

    <div class="super_container_inner">
        <div class="super_overlay"></div>

        <!-- Home -->

        <div class="home">
            <div class="home_container d-flex flex-column align-items-center justify-content-end">
                <div class="home_content text-center">
                    <div class="home_title">الشمعات</div>
                    <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
                        <ul class="d-flex flex-row align-items-start justify-content-start text-center">
                            <li><a href="index.php">صفحة البدايه</a></li>
                            <li><a href="">تغليف المصاحف</a></li>
                            <li><a href="#">الصناديق</a></li>
                            <li><a href="#">الكوب بالاسم</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products -->

        <div class="products">
            <div class="container">
                <div class="row products_bar_row">
                    <div class="col">
                        <div class="products_bar d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center">


                        </div>
                    </div>
                </div>
                <div class="row products_row products_container grid">

                    <!-- Product -->
                   


                    <?php

                    $sql = "SELECT * FROM candle";
                    $result = mysqli_query($connect, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<a target="_blank" href="images/candle/' . $row['image'] . '">';
                        // echo '<div class=" col-md-4 col-sm-6"><img src="../../images/candle/' . $row['image'] . '" ></a><a href="deletefluid.php?id=' . $row['id'] . '">Delete</a>';
                        echo '<div class="col-xl-4 col-md-6 grid-item new">
                <div class="product">
                    <div class="product_image"><img src="images/candle/' . $row['image'] . '" alt=""></div>
                    <div class="product_content">
                        <div class="product_info d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div>
                                    <div class="product_name"><a href="product.html">' . $row['des'] . '</a></div>
                                </div>
                            </div>
                            <div class="ml-auto text-right">
                                <div class="product_price text-right">' . $row['price'] . '<span> ريال</span></div>
                            </div>
                        </div>
                        <div class="product_buttons">
                            <div class="text-right d-flex flex-row align-items-start justify-content-start">

                                <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                    <div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
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
        </div>

        <!-- Footer -->

        <footer class="footer">
            <div class="footer_content">
                <div class="container">
                    <div class="row">



                        <!-- Footer Contact -->
                        <div class="col-lg-4 footer_col">
                            <div class="footer_contact">

                                <div class="footer_social">
                                    <ul class="footer_social_list d-flex flex-row align-items-start justify-content-start">

                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bar">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
                                <div class="copyright order-md-1 order-2"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                                <nav class="footer_nav ml-md-auto order-md-2 order-1">
                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                        <li><a href="category.html">مصاحف</a></li>
                                        <li><a href="category.html">صناديق</a></li>
                                        <li><a href="category.html">اكواب</a></li>
                                        <li><a href="category.html">شمعات</a></li>
                                        <li><a href="#">تواصل معنا</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/Isotope/fitcolumns.js"></script>
<script src="js/category.js"></script>
</body>
</html>