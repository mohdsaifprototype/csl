<?php
$servername = "Localhost";
$username = "CSLims_root";
$password = "Admin@123";
$dbname = "CSLims_ims";
$conn = mysqli_connect($servername, $username, $password, "$dbname");
if (!$conn) {
   die('Could not Connect My Sql:' . mysql_error());
}
