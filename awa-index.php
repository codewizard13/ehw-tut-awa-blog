<?php
session_start();
include 'path.php';
include 'inc/dbh.inc.php';

/**
 * Author:          Eric Hepperle
 * Date Created:    06/21/24
 * Date Modified:   07/22/24
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
                        <i class="fa fa-user"> Eric Hepperle</i>
                        <i class="fa fa-calendar"> Mar 8, 2019</i>
                    </div>
                </div>

                <div class="post">
                    <img src="/pix/071817-Jennifer-LeClaire_320x180.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="post-single.php">One day your life will flash before your eyes</a></h4>
                        <i class="fa fa-user"> Eric Hepperle</i>
                        <i class="fa fa-calendar"> Mar 8, 2019</i>
                    </div>
                </div>

                <div class="post">
                    <img src="/pix/120517-Heidi-Baker_320x180.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="post-single.php">One day your life will flash before your eyes</a></h4>
                        <i class="fa fa-user"> Eric Hepperle</i>
                        <i class="fa fa-calendar"> Mar 8, 2019</i>
                    </div>
                </div>

                <div class="post">
                    <img src="/pix/011918-Robert-Henderson_320x180.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="post-single.php">One day your life will flash before your eyes</a></h4>
                        <i class="fa fa-user"> Eric Hepperle</i>
                        <i class="fa fa-calendar"> Mar 8, 2019</i>
                    </div>
                </div>

                <div class="post">
                    <img src="/pix/Charlie-Shamp_320x180.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="post-single.php">One day your life will flash before your eyes</a></h4>
                        <i class="fa fa-user"> Eric Hepperle</i>
                        <i class="fa fa-calendar"> Mar 8, 2019</i>
                    </div>
                </div>

                <div class="post">
                    <img src="/pix/image1.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="post-single.php">One day your life will flash before your eyes</a></h4>
                        <i class="fa fa-user"> Eric Hepperle</i>
                        <i class="fa fa-calendar"> Mar 8, 2019</i>
                    </div>
                </div>

                <div class="post">
                    <img src="/pix/image1.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="post-single.php">One day your life will flash before your eyes</a></h4>
                        <i class="fa fa-user"> Eric Hepperle</i>
                        <i class="fa fa-calendar"> Mar 8, 2019</i>
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
                        <h2><a href="single.html">The strongest and sweetest songs yet remain to be sung</a></h2>
                        <i class="fa fa-user"> Eric Hepperle</i>
                        &nbsp;
                        <i class="fa fa-calendar"> Mar 11, 2019</i>
                        <p class="preview-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur accusamus, molestias odio rerum eligendi quae?</p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>

                <div class="post">
                    <img src="pix/image2.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.html">The strongest and sweetest songs yet remain to be sung</a></h2>
                        <i class="fa fa-user"> Eric Hepperle</i>
                        &nbsp;
                        <i class="fa fa-calendar"> Mar 11, 2019</i>
                        <p class="preview-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur accusamus, molestias odio rerum eligendi quae?</p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>


                <div class="post">
                    <img src="pix/image1.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.html">The strongest and sweetest songs yet remain to be sung</a></h2>
                        <i class="fa fa-user"> Eric Hepperle</i>
                        &nbsp;
                        <i class="fa fa-calendar"> Mar 11, 2019</i>
                        <p class="preview-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur accusamus, molestias odio rerum eligendi quae?</p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>


                <div class="post">
                    <img src="pix/011918-Robert-Henderson_320x180.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.html">The strongest and sweetest songs yet remain to be sung</a></h2>
                        <i class="fa fa-user"> Eric Hepperle</i>
                        &nbsp;
                        <i class="fa fa-calendar"> Mar 11, 2019</i>
                        <p class="preview-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur accusamus, molestias odio rerum eligendi quae?</p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>


            </div>
            <!-- // Main Content -->

            <!-- Sidebar -->
            <div class="sidebar">

                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.html" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>


                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <li><a href="#">Poems</a></li>
                        <li><a href="#">Quotes</a></li>
                        <li><a href="#">Fiction</a></li>
                        <li><a href="#">Biography</a></li>
                        <li><a href="#">Motivation</a></li>
                        <li><a href="#">Inspiration</a></li>
                        <li><a href="#">Life Lessons</a></li>
                    </ul>

                </div>

            </div>
            <!-- // Sidebar -->

        </div>


        <!-- // Content -->

    </div>
    <!-- // PAGE WRAPPER -->


    <!-- Footer -->
    <div class="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h1 class="logo-text"><span>Eric</span>Inspires</h1>
                <p>
                    EricInspires is a fictional blog conceived for the purpose of a tutorial on YouTube. However, Eric has a blog called erichepperle.com where he writes truly inspiring stuff.
                </p>
                <div class="contact">
                    <span><i class="fas fa-phone"></i> &nbsp; 123-456-7890</span>
                    <span><i class="fas fa-envelope"></i> &nbsp; info@erichepperle.com</span>
                </div>
                <div class="socials">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-section links">
                <h2>Quick Links</h2>
                <br>
                <ul>
                    <a href="">
                        <li>Events</li>
                    </a><a href="">
                        <li>Team</li>
                    </a><a href="">
                        <li>Mentors</li>
                    </a><a href="">
                        <li>Gallery</li>
                    </a><a href="">
                        <li>Terms and Conditions</li>
                    </a>
                </ul>
            </div>

            <div class="footer-section contact-form">
                <h2>Contact us</h2>
                <br>
                <form action="awa-index.php" method="post">
                    <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
                    <textarea rows="4" name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
                    <button type="submit" class="btn btn-big contact-btn">
                        <i class="fas fa-envelope"></i>
                        Send
                    </button>
                </form>
            </div>


        </div>

        <div class="footer-bottom">
            &copy; erichepperle.com | Designed by Eric Hepperle
        </div>
    </div>

    <!-- // Footer -->

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