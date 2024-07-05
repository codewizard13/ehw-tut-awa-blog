<?php
session_start();
include 'path.php';
include 'inc/dbh.inc.php';

/**
 * Author:          Eric Hepperle
 * Date Created:    06/21/24
 * Date Modified:   07/03/24
 * 
 * This is the index.php file based off of Awa's tutorial:
 * - https://www.youtube.com/watch?v=S05EWIHAVcc&list=PL3pyLl-dgiqBSBsC5O5AQHN1UsUk-60nc&ab_channel=AwaMelvine
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NO-WP: Old ES Database Tester</title>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/e79f7003be.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <!-- Custom Styling -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>


    <header>
        <div class="logo">
            <h1 class="logo-text">
                <span>Eric</span>Inspires
            </h1>
        </div>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="top-nav">
            <li><a href="#">Home</a>
                <ul>
                    <li><a href="awa-index.php">Awa Index</a></li>
                    <li><a href="index.php">Eric Index</a></li>
                </ul>
            </li>

            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    Eric Hepperle
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="menu-align-rt">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#" class="logout">Logout</a></li>
                </ul>
            </li>
        </ul>

    </header>

    <h1 class="page-title">🎓TUTWRK: Designing a blog website HTML/CSS (Awa Melvine)</h1>


    <!-- PAGE WRAPPER -->
    <div class="page-wrapper">

        <!-- Post Slider -->
        <div class="post-slider">
            <h1 class="slider-title">Trending Posts</h1>
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>

            <div class="post-wrapper">

                <div class="post">
                    <img src="/pix/image1.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="post-single.php">One day your life will flash before your eyes</a></h4>
                        <i class="fa fa-user">Eric Hepperle</i>
                        <i class="fa fa-calendar">Mar 8, 2019</i>
                    </div>
                </div>

                <div class="post">
                    <img src="/pix/image1.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="post-single.php">One day your life will flash before your eyes</a></h4>
                        <i class="fa fa-user">Eric Hepperle</i>
                        <i class="fa fa-calendar">Mar 8, 2019</i>
                    </div>
                </div>

                <div class="post">
                    <img src="/pix/image1.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="post-single.php">One day your life will flash before your eyes</a></h4>
                        <i class="fa fa-user">Eric Hepperle</i>
                        <i class="fa fa-calendar">Mar 8, 2019</i>
                    </div>
                </div>

                <div class="post">
                    <img src="/pix/image1.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="post-single.php">One day your life will flash before your eyes</a></h4>
                        <i class="fa fa-user">Eric Hepperle</i>
                        <i class="fa fa-calendar">Mar 8, 2019</i>
                    </div>
                </div>

                <div class="post">
                    <img src="/pix/image1.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="post-single.php">One day your life will flash before your eyes</a></h4>
                        <i class="fa fa-user">Eric Hepperle</i>
                        <i class="fa fa-calendar">Mar 8, 2019</i>
                    </div>
                </div>

                <div class="post">
                    <img src="/pix/image1.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="post-single.php">One day your life will flash before your eyes</a></h4>
                        <i class="fa fa-user">Eric Hepperle</i>
                        <i class="fa fa-calendar">Mar 8, 2019</i>
                    </div>
                </div>

                <div class="post">
                    <img src="/pix/image1.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="post-single.php">One day your life will flash before your eyes</a></h4>
                        <i class="fa fa-user">Eric Hepperle</i>
                        <i class="fa fa-calendar">Mar 8, 2019</i>
                    </div>
                </div>

            </div>
        </div>
        <!-- // Post Slider -->

        <!-- Content -->
        <div class="content clearfix">

            <!-- Main Content -->
            <div class="main-content">
                <h1 class="recent-post-title">Recent Posts</h1>

                <div class="post">
                    <img src="pix/image3.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h1><a href="single.html">The strongest and sweetest songs yet remain to be sung</a></h1>
                        <i class="fa fa-user">Eric Hepperle</i>
                        &nbsp;
                        <i class="fa fa-caledar">Mar 11, 2019</i>
                        <p class="preview-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur accusamus, molestias odio rerum eligendi quae?</p>
                        <a href="single.html" class="btn">Read More</a>
                    </div>
                </div>

            </div>
            <!-- // Main Content -->

            <div class="sidebar"></div>

        </div>


        <!-- // Content -->

    </div>
    <!-- // PAGE WRAPPER -->

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Slick Carousel / Post Slider -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <!-- Custom Script -->
    <script src="js/scripts.js"></script>

</body>

</html>