<?php
function getDB() {
  $host = 'sql1.njit.edu';
  $port = 3306;
  $dbname = 'ds2338';
  $username = 'ds2338';
  $password = 'Cookie@123';
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  try {
      $db = new mysqli($host, $username, $password, $dbname, $port);
      error_log( "You are connected to the $host database!");
      return $db;
  } catch (mysqli_sql_exception $e) {
      error_log($e->getMessage(), 0);
      echo $e->getMessage();
  }
}

//get_DB();
?>