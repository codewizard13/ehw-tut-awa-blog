<?php // dbh.inc.php Database Handler File

/**
 * Database Handler: This file manages the connection to the database
 */

// CONNECTION

$host_name = 'localhost:10028';
$database = 'dbs11290831';
$user_name = 'root';
$password = 'root';

$conn = new mysqli($host_name, $user_name, $password, $database);

if ($conn->connect_error) {
  die('<p>Failed to connect to MySQL: ' . $conn->connect_error . '</p>');
} else {
  // echo '<p>Connection to MySQL server successfully established.</p>';
}



///////////////// DB FUNCTIONS /////////////////////



function dump($arr) // TO BE DELETED -- Only use for DEV not PROD !!!
{

  echo "<pre>" . print_r($arr, true) . "</pre>";

}


function selectAll($table, $limit = 0)
{

  global $conn;

  $sql = "SELECT * FROM $table LIMIT $limit";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

  return $records;


}

$videos = selectAll('videos', 3);
dump($videos);