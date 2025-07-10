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

    $webSql = "select otp from web_enquiry where otp='$otp' and is_expired='1' and web_phone='" . $_SESSION["otp_phone"] . "'";

    $optRes = mysqli_query($con, $webSql);
    if (mysqli_num_rows($optRes) > 0) {
        echo "1";
    } else {
        echo "0";
    }
}
