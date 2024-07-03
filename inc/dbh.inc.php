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


function selectAll($table, $conditions = [], $limit = 1)
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
    foreach ($conditions as $key => $value) {
      if ($i === 0) {
        // If it is is the first time through the loop, precede with WHERE
        $sql = $sql . " WHERE $key=?";
      } else {
        $sql = $sql . " AND $key=?";
      }
      $i++;
    }

    // For bind_param the num values must match num types
    $stmt = $conn->prepare($sql);
    $values = array_values($conditions);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values); // i = integer, s = string
    $stmt->execute();
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;

  }

}

$conditions = [
  'ID' => 4
];

$videos = selectAll('videos', $conditions);
dump($videos);