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
    $fname = $_POST["pledge_name"];
    $email = $_POST["pledge_email"];
    $phone = $_POST["pledge_phone"];
    $gender = $_POST["pledge_gender"];
    $city = $_POST["pledge_city"];
    $state = $_POST["pledge_state"];
    $profession = $_POST["pledge_profession"];

    $sql = "insert into pledge(pledge_fname,pledge_email,pledge_phone,pledge_gender,pledge_city,pledge_state,pledge_profession,pledge_date) values('$fname','$email','$phone','$gender','$city','$state','$profession',CURRENT_DATE)";

    if (mysqli_query($con, $sql)) {
        $_SESSION["fname"] = $fname;
        header("Location:pledge.php");
    } else {
        header("Location:start.php");
    }
}
