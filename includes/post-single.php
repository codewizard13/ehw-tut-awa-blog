<?php
/**
 * Author:          Eric Hepperle
 * Date Created:    07/01/24
 */
// Following this tut: 
//  https://www.youtube.com/watch?v=_O3UCmObj5k&ab_channel=JamalProgrammingTips
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

<article>
        
    <h1><?php
        if (isset($_GET['post_title']))
            echo $_GET['post_title'];
        ?>
    </h1>

    <section class="post-meta"><?php
        if (isset($_GET['pub_date']))
            echo $_GET['pub_date'];
        ?>
    </section>

</article>








</body>
</html>


