<?php // post-loop-item.php

// Get the image full path
$img_url = pick_img([$row['image1'], $row['image2'], $row['image3']]);

// Get publish date
$date = date("l, F d, Y", strtotime($row['Publish_Date']));

// Define loop item layout
$loop_item = <<<HTML
<article class="card">
  <div class="col">{$row['Title']}</div>
  <div class="col">
    <figure class="post-thumb">
      <img src="$img_url" style="width:320px; height:180px">
      <figcaption>{$date}</figcaption>
    </figure>
  </div>
  <div class="col">{$row['Blurb']}</div>
</article>

HTML;

echo $loop_item;

