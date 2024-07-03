<?php 
    session_start();
    include_once 'path.php'; 
    include_once 'inc/dbh.inc.php';
?>
<?php
/**
 * Author:          Eric Hepperle
 * Date Created:    06/21/24
 * Date Modified:   07/03/24
 */
// Following this tut: https://www.youtube.com/watch?v=0YLJ0uO6n8I&list=PL0eyrZgxdwhwBToawjm9faF1ixePexft-&index=37&ab_channel=DaniKrossing
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NO-WP: Old ES Database Tester</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

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