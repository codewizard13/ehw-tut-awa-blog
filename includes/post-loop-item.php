<?php
echo "<div class='row'>";
                echo "   <div class='col'>" . $row['Title'] . "</div>";
                echo "   <div class='col'>";

                $img_url = pick_img([$row['image1'], $row['image2'], $row['image3']]);

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