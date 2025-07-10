<?php
//  $server="Localhost";
//  $user="CSLims_root";
//  $password="Admin@123";
//  $dbname="CSLims_ims";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ims";



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
