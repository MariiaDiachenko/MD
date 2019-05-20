<?php

function getConnection()
{
  $servername = "db";
  $username = "16_diachenko";
  $password = "F8r2w8t4c2";
  $database = "16_diachenko";

  $conn = new mysqli($servername, $username, $password, $database);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  return $conn;
}
