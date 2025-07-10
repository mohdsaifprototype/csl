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

    $otp = $_GET["otp"];

    $webSql = "update onlin_admission set otp_is_expired='0' where web_phone='" . $_SESSION["otp_phone"] . "'";

    if (mysqli_query($con, $webSql)) {
        echo "1";
    } else {
        echo "0";
    }
}
