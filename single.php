<?php
session_start();
include 'path.php';
include 'inc/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TUTWRK: Awa Single Post</title>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/e79f7003be.js" crossorigin="anonymous"></script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
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

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content -->
      <div class="main-content single">
        <h1 class="post-title">This is the title of the Post</h1>

        <div class="post-content">
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum quas corporis, quibusdam maiores reiciendis sapiente?</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique veritatis perspiciatis, odio quis sint facilis ex dolorum. Deleniti magni temporibus amet numquam, animi rerum sequi sit fugit aliquid enim maxime?</p>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, aperiam! Vel odio sint quos. Iure a optio tenetur doloremque veniam quisquam, dolores itaque alias, explicabo distinctio cupiditate sequi quasi sint odio provident vero molestiae totam dolor. Aut sequi facere praesentium.</p>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa, aut.</p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum quas corporis, quibusdam maiores reiciendis sapiente?</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique veritatis perspiciatis, odio quis sint facilis ex dolorum. Deleniti magni temporibus amet numquam, animi rerum sequi sit fugit aliquid enim maxime?</p>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, aperiam! Vel odio sint quos. Iure a optio tenetur doloremque veniam quisquam, dolores itaque alias, explicabo distinctio cupiditate sequi quasi sint odio provident vero molestiae totam dolor. Aut sequi facere praesentium.</p>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa, aut.</p>          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum quas corporis, quibusdam maiores reiciendis sapiente?</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique veritatis perspiciatis, odio quis sint facilis ex dolorum. Deleniti magni temporibus amet numquam, animi rerum sequi sit fugit aliquid enim maxime?</p>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, aperiam! Vel odio sint quos. Iure a optio tenetur doloremque veniam quisquam, dolores itaque alias, explicabo distinctio cupiditate sequi quasi sint odio provident vero molestiae totam dolor. Aut sequi facere praesentium.</p>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa, aut.</p>          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum quas corporis, quibusdam maiores reiciendis sapiente?</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique veritatis perspiciatis, odio quis sint facilis ex dolorum. Deleniti magni temporibus amet numquam, animi rerum sequi sit fugit aliquid enim maxime?</p>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, aperiam! Vel odio sint quos. Iure a optio tenetur doloremque veniam quisquam, dolores itaque alias, explicabo distinctio cupiditate sequi quasi sint odio provident vero molestiae totam dolor. Aut sequi facere praesentium.</p>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa, aut.</p>          
        </div>


      </div>
      <!-- // Main Content -->


      <!-- Sidebar -->
      <div class="sidebar single">

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
          EricInspires is a fictional blog conceived for the purpose of a tutorial on YouTube. However, Eric has a blog
          called erichepperle.com where he writes truly inspiring stuff.
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