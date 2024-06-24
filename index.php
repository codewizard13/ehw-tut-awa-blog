<?php
include_once 'includes/dbh.inc.php';
/**
 * Author:          Eric Hepperle
 * Date Created:    06/21/24
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
    $img_path = 'https://elijahstreams.com/images/faces/';
    echo "<h3>IMG_PATH: " . $img_path . "</h3>";

    // FUNCTIONS
    function remote_file_exists($file_url) {

        echo "<h4 class='msg error'>Hey!</h4>";
        // Ensure this is url
        if ( strpos($file_url, "://") === false ) {
            echo "<h4 class='msg'>This is NOT a remote URL</h4>";
            return false;
        }

        /**
         * #GOTCHA: Handling for if the image loaded or not is a bit complicated :(
         *  If we use the CodexWorld `fopen` example it takes a lot of time,
         *  very bad performance: https://www.codexworld.com/how-to/check-if-remote-file-exists-url-php
         */
        // Open file as readonly
        // $handle = @fopen($file_url, 'r');

        // // Check if file exists
        // if (!$handle) {
        //     echo '<h4 class="msg warn">File NOT FOUND :(</h4>';

        //     return false;
        // } else {
        //     echo '<h4 class="msg">File EXISTS!</h4>';
        //     return true;
        // }


    }

    // Get SQL query
    $sql = "SELECT * FROM videos;";

    $result = mysqli_query($conn, $sql);

    $resultCheck = mysqli_num_rows($result);

    // Use the data
    if ($resultCheck > 0) {

        ?>
        <section class="container">
            <?php

            while ($row = mysqli_fetch_assoc($result)) {

                echo "<div class='row'>";
                echo "   <div class='col'>" . $row['Title'] . "</div>";
                echo "   <div class='col'>";

                $img1 = $row['image1'];
                $img2 = $row['image2'];
                $img3 = $row['image3'];

                // If we have a filename in one of the 3 fields,
                //  (prefer img 1, fastest load)
                if (
                    isset($img1) && '' != $img1
                    || isset($img2) && '' != $img2
                    || isset($img3) && '' != $img3
                ) {

                    // Set the pic filename
                    if (isset($row['image1'])) {
                        $pic_filename = trim($row['image1']);
                    } elseif (isset($row['image2'])) {
                        $pic_filename = trim($row['image2']);
                    } elseif (isset($row['image3'])) {
                        $pic_filename = trim($row['image3']);
                    }

                    // Handle image names missing extensions
                    if (!str_ends_with(strtolower($pic_filename), '.jpg')) {
                        echo "<span class='msg error'>Pic Filename: [$pic_filename]</span>";
                        $pic_filename .= '.jpg';
                    }
                    $img_url = $img_path . $pic_filename;

                    // Else, we don't have any images so use placeholder instead
                } else {
                    $img_url = '/pix/placeholder__1024x683.png';
                }

                // Check if file exists: If local path or remote


                // if (file_exists($img_url) && getimagesize($img_url)) {
                if (file_exists($img_url) || remote_file_exists($img_url)) {
                    echo "<h3>File Path EXISTS: $img_url</h3>";
                } else {
                    echo "<h3>File Path DOES NOT EXIST: $img_url</h3>";

                }


                // Get publish date
                $date = date("l, F d, Y", strtotime($row['Publish_Date']));
                // $pub_date = date_format($date, "l, F m, Y");
        
                ?>
                <h4><?php echo "\$img_url = $img_url"; ?></h4>
                <figure>
                    <img src="<?php echo $img_url; ?>" style="width:320px; height:180px">
                    <figcaption><?php echo $row['Publish_Date'] . "<br>"; ?><?php echo $date; ?></figcaption>

                </figure>

                <?php
                echo "</div>";

                echo "   <div class='col'>" . $row['Blurb'] . "</div>";

                echo "</div>";

            }

            ?>
        </section>
        <?php

    }


    ?>

</body>

</html>