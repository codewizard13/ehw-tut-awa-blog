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
define ("IMG_PATH", 'https://elijahstreams.com/images/faces/');
echo "<h3>IMG_PATH: " . IMG_PATH;


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
            echo "   <div class='col'>".$row['Title'] . "</div>";
?>
<figure>
    <img src="" alt="">
    <figcaption></figcaption>
</figure>

<?php

            echo "   <div class='col'>".$row['Title'] . "</div>";
            
            echo "</div>";

        }

        ?>
        </section>
        <?php

    }


?>
    
</body>
</html>