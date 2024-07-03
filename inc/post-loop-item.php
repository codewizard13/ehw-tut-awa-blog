<?php // post-loop-item.php
// session_start();

// $row_str = "<pre>".print_r($row,true)."</pre>";
// echo $row_str;
// exit;

// Get the image full path
$img_url = pick_img([$row['image1'], $row['image2'], $row['image3']]);

// Get publish date
$date = date("l, F d, Y", strtotime($row['Publish_Date']));

// Define session variables
$_SESSION['post_title'] = $row['Title'];
$_SESSION['pub_date'] = $date;
$_SESSION['img_url'] = $img_url;
$_SESSION['blurb'] = $row['Blurb'];

// Define URL query string to pass to post-single
// $url_query_get = "?post_title=" . $row['Title'];
// $url_query_get .= "&pub_date=" . $date;
// $url_query_get .= "&img_url=" . $img_url;
// $url_query_get .= "&blurb=" . $row['Blurb'];
// $single_url = 'inc/post-single.php' . $url_query_get;
$single_url = 'inc/post-single.php?id=' . $row['ID']; //. $url_query_get;

// Define loop item layout
$loop_item = <<<HTML
  <article class="card">
    <div class="card-sec">
      <a href="{$single_url}">
        <h3 class="card-title">{$row['Title']}</h3>
      </a>
    </div>
    <div class="card-sec">
      <figure class="post-thumb">
        <img src="$img_url" style="width:320px; height:180px">
        <figcaption>{$date}</figcaption>
      </figure>
    </div>
    <div class="card-sec truncate">
      <div class="blurb">{$row['Blurb']}</div>
    </div>
  </article>

HTML;

echo $loop_item;

