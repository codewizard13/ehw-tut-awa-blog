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

                $img_url = '';

                // Get working image (prefere img 1, fastest load)
                if (isset($row['image1'])) {
                    $img_url = $img_path . $row['image1'];
                } elseif (isset($row['image2'])) {
                    $img_url = $img_path . $row['image2'];
                } elseif (isset($row['image3'])) {
                    $img_url = $img_path . $row['image3'];
                } else {
                    $img_url = '<span class="error">NO IMAGE PROVIDED</span>';
                }

                echo "<h3>" . gettype($row['Publish_Date']);
                // Get publish date
                $date = date("l, F d, Y", strtotime($row['Publish_Date']));
                // $pub_date = date_format($date, "l, F m, Y");

                ?>
                <figure>
                    <img src="<?php echo $img_url; ?>">
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