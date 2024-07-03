<?php 
    session_start();
    include '../path.php'; 
    include 'dbh.inc.php';
?>

<?php
/**
 * Author:          Eric Hepperle
 * 
 * @References: 
 * - https://www.youtube.com/watch?v=_O3UCmObj5k&ab_channel=JamalProgrammingTips
 * - https://chatgpt.com/c/58d0fbbc-9016-4f1d-9707-6c4ce979c5a7
 */

?>


<?php

// echo "<pre>".print_r($_SESSION,true)."</pre>";
// exit;

// If a post ID was passed from previous page
if (isset($_GET['id'])) {
    $card_id = $_GET['id'];
} else {
    $card_id = 'NONE PASSED';
}

// Fetch details for current card
$query = "SELECT * FROM videos WHERE ID = $card_id";
// echo "<pre>".print_r($query,true)."</pre>";

$result = mysqli_query($conn, $query);
$card = mysqli_fetch_assoc($result);
// echo "<pre>".print_r($card,true)."</pre>";




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
    <h3>Card ID: <?php echo $card_id; ?></h3>
        
    <h1><?php
        if (isset($_SESSION['cards'][$card_id]['post_title']))
            echo $_SESSION['cards'][$card_id]['post_title'];
        ?>
    </h1>

    <figure class="post-thumb">
        <img src="<?php 
            if (isset($_SESSION['cards'][$card_id]['img_url']))
                echo $_SESSION['cards'][$card_id]['img_url'];
        ?>">
        <figcaption>{$date}</figcaption>
    </figure>

    <section class="post-meta"><?php
        if (isset($_SESSION['cards'][$card_id]['pub_date']))
            echo $_SESSION['cards'][$card_id]['pub_date'];
        ?>
    </section>

    <section class="blurb"><?php
        if (isset($_SESSION['cards'][$card_id]['blurb']))
            echo $_SESSION['cards'][$card_id]['blurb'];
        ?>
    </section>

</article>
</main>
<aside class="sidebar">
    SIDEBAR
</aside>






</body>
</html>


