<?php
session_start();
$servername = "Localhost";
$username = "CSLims_root";
$password = "Admin@123";
$dbname = "CSLims_ims";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    $cname = $_GET["cname"];
    $bc = $_GET["bc"];
    $year = $_GET["year"];
    $code = $_GET["code"];
    $sql = "select course_duration,regNo from course where course_id='$cname'";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        if ($row = mysqli_fetch_assoc($result)) {
            if ($row['course_duration'] < 365) {
                $dur = "S";
            } else {
                $dur = "L";
            }
            echo $bc . $dur . "" . $row['regNo'] . $year . $code;
        }
    }
}

mysqli_close($conn);
