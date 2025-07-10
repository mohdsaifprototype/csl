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
    $sql = "select course_name,course_id from course where is_active=1 order by course_name";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<option value=''>----Courses Name----</option>";
        while ($row = mysqli_fetch_assoc($result)) {

            echo "<option value='" . $row['course_id'] . "'>" . $row['course_name'] . " </option>";
        }
    }
}

mysqli_close($conn);
