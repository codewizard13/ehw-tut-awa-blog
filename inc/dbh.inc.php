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


/**
 * Print out an array to browser with print_r.
 * 
 * @param mixed $arr any array or object or probably any data type
 * 
 * @return void
 */
function dump($arr) // TO BE DELETED -- Only use for DEV not PROD !!!
{

  echo "<pre>" . print_r($arr, true) . "</pre>";

}


/**
 * Get all records from table (filters optional).
 * 
 * Return all records from a MySQL database, or filter by conditions
 *  and limit if present. Default limit is one - If there are thousands
 *  of records, defaulting to 1 will prevent browser crashing.
 * 
 * @param string $table the table name
 * @param array $conditions the options for the where clause
 * @param integer $limit the number of records to return
 * 
 * @return array 
 */
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



/**
 * Get one record from table (filters optional).
 * 
 * Return all records from a MySQL database, or filter by conditions
 *  and limit if present. Default limit is one - If there are thousands
 *  of records, defaulting to 1 will prevent browser crashing.
 * 
 * @param string $table the table name
 * @param array $conditions the options for the where clause
 * 
 * @return array 
 */
function selectOne($table, $conditions)
{

  global $conn;

  $sql = "SELECT * FROM $table";


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

  // ADD limit of 1 so it stops once it has found the first match
  $sql = $sql . " LIMIT 1";

  // For bind_param the num values must match num types
  $stmt = $conn->prepare($sql);
  $values = array_values($conditions);
  $types = str_repeat('s', count($values));
  $stmt->bind_param($types, ...$values); // i = integer, s = string
  $stmt->execute();
  $records = $stmt->get_result()->fetch_assoc();
  return $records;


}




$conditions = [
  'ID' => 4
];

// $videos = selectAll('videos', $conditions);
// dump($videos);
$video = selectOne('videos', $conditions);
dump($video);