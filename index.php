<?php 
    session_start();
    include 'path.php'; 
    include 'inc/dbh.inc.php';

/**
 * Author:          Eric Hepperle
 * Date Created:    06/21/24
 * Date Modified:   07/03/24
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

    <h1>NO-WP: Old ES Database Tester</h1>

    <?php

    // CONSTANTS


    // FUNCTIONS
    function remote_file_exists($file_url)
    {

        echo "<h4 class='msg error'>Hey!</h4>";
        // Ensure this is url
        if (strpos($file_url, "://") === false) {
            echo "<h4 class='msg'>This is NOT a remote URL</h4>";
            return false;
        }

        return true;

    }

    /**
     * @param array $args Array of named array elements where key is the db FIELD NAME 
     * @return string $out Image filename or error msg
     * 
     * Usage: Pass in an array of 3 fields containing filenames:
     *  array( $row['image1'], $row['image2'], $row['image3'] )
     */
    function pick_img($args)
    {

        $use_local = false;

        $img1 = $args[0];
        $img2 = $args[1];
        $img3 = $args[2];

        // If all passed values are empty, use placeholder
        if (
            isset($img1) && '' != $img1
            || isset($img2) && '' != $img2
            || isset($img3) && '' != $img3
        ) {

            // Set the pic filename
            if (isset($img1)) {
                $pic_filename = trim($img1);
            } elseif (isset($img2)) {
                $pic_filename = trim($img2);
            } elseif (isset($img3)) {
                $pic_filename = trim($img3);
            } else {
                // NONE OF THE IMAGES ARE SET, so we'll use the local placeholder
                $use_local = true;
            }

        }

        if ($use_local || !isset($pic_filename)) {
            $img_url = '/pix/placeholder__1024x683.png';
        } else {
            // Ensure image names have .jpg extension
            if (!str_ends_with(strtolower($pic_filename), '.jpg')) {
                // echo "<span class='msg error'>Pic Filename: [$pic_filename]</span>";
                $pic_filename .= '.jpg';
            }
            $img_url = IMG_ROOT_URL . $pic_filename;
        }

        return $img_url;
    }


    // Get SQL query
    $sql = "SELECT * FROM videos;";

    $result = mysqli_query($conn, $sql);

    $resultCheck = mysqli_num_rows($result);

    // Use the data
    if ($resultCheck > 0) {

        ?>
        <section class="cards">
            <?php

            // Posts loop
            while ($row = mysqli_fetch_assoc($result)) {

                include 'inc/post-loop-item.php';

            }

            ?>
        </section>
        <?php

    }


    ?>

</body>

</html>