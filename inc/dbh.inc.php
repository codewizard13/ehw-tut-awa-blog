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


function selectAll($table, $conditions = [])
{

  global $conn;

  $sql = "SELECT * FROM $table";

  if (empty($conditions)) {

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;

  } else {
    // return records that match conditons ...

    $i = 0; // counter
    foreach ( $conditions as $key => $value ) {
      if ($i === 0) {
        // If it is is the first time through the loop, precede with WHERE
        $sql = $sql . " WHERE $key=$value";
      } else {
        $sql = $sql . " AND $key=$value";

      }
      $i++;
    }
    dump($sql);

  }

}

$conditions = [
  'admin' => 1,
  'username' => 'Awa',
  'limit' => 3
];

$videos = selectAll('videos', $conditions);
dump($videos);