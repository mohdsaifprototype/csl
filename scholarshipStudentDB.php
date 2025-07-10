<?php
session_start();
$server = "Localhost";
$user = "CSLims_root";
$password = "Admin@123";
$dbname = "CSLims_ims";

$con = mysqli_connect($server, $user, $password, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error($con));
} else {
    $regCode = $_POST["scholarshipStudentRegTF"];

    $sql = "select * from session where student_code='$regCode' ";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        if ($row = mysqli_fetch_assoc($result)) {
            $_SESSION["scholar_name"] = $row["student_name"];
            $_SESSION["visit"] = $row["visited"];
            $_SESSION["school"] = $row["school"];
            $_SESSION["scholar_father"] = $row["father_name"];
            $_SESSION["visit_date"] = $row["visit_date"];
            header("Location:scholarship-home.php");
        }
    } else {
        header("Location:scholarship-student.php?msg=You Are Not Registered Yet!");
    }
}
