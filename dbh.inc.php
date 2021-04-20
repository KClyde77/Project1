<?php
//connecting to database or database information
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "phpregistration";


$conn =  mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);

if (!$connect) {
  // code...
  die("Connection failed: " . mysqli_connect_error());
}
