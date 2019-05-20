<?php
function getConnection()
{
  //todo set servername to localhost
  $servername = "";
  $username = "16_diachenko";
  //todo set password
  $password = "";
  $database = "16_diachenko";

  $conn = new mysqli($servername, $username, $password, $database);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  return $conn;
}
