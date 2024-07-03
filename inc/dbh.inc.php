<?php // dbh.inc.php

/**
 * Database Handler: This file manages the connection to the database
 */
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