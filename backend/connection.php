<?php
function getConnection()
{
  //todo set servername to localhost
  $servername = "";
  $username = "";
  //todo set password
  $password = "";
  $database = "";

  $conn = new mysqli($servername, $username, $password, $database);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  return $conn;
}
