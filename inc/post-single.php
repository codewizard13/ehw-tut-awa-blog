<?php
/**
 * Author:          Eric Hepperle
 * Date Created:    07/01/24
 */
// Following this tut: 
//  https://www.youtube.com/watch?v=_O3UCmObj5k&ab_channel=JamalProgrammingTips

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NO-WP: Old ES Database Tester</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="single">


<main>
MAIN

<article>
        
    <h1><?php
        if (isset($_GET['post_title']))
            echo $_GET['post_title'];
        ?>
    </h1>

    <figure class="post-thumb">
        <img src="<?php 
            if (isset($_GET['img_url']))
                echo $_GET['img_url'];
        ?>">
        <figcaption>{$date}</figcaption>
    </figure>

    <section class="post-meta"><?php
        if (isset($_GET['pub_date']))
            echo $_GET['pub_date'];
        ?>
    </section>

    <section class="blurb"><?php
        if (isset($_GET['blurb']))
            echo $_GET['blurb'];
        ?>
    </section>

</article>
</main>
<aside class="sidebar">
    SIDEBAR
</aside>






</body>
</html>


